<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Intervention\Image\Exception\ImageException;
use Intervention\Image\Exception\NotReadableException;
use Intervention\Image\Facades\Image;

class RegisterController extends Controller
{

    private $storagePath = '/uploads/users/profile_pic/';
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'profile_pic' => ['required', 'mimes:jpeg,jpg,png']
        ], [
            'profile_pic.required' => 'Profile Image is required',
            'profile_pic.mimes' => ' Only supports JPG, JPEG and PNG Files'

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\User;
     */
    protected function create(array $data)
    {

        $profilePic = null;
        if (isset($data['profile_pic'])) {
            $profilePic = $this->handleProfilePicture($data['profile_pic']);
        }
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->profile_pic = $profilePic;
        if ($profilePic) {
            $user->images->image_name = $profilePic;
        }
        $user->push();
        $path = $this->storagePath . str_replace('.', '_', $profilePic);
        $newPath = $this->storagePath . $user->id;
        /** @noinspection PhpUndefinedMethodInspection */
        Storage::move($path, $newPath);
        return $user;
    }

    /**
     * @param UploadedFile $file
     * @return string
     */
    protected function handleProfilePicture(UploadedFile $file): string
    {
        $extension = $file->getClientOriginalExtension();
        $mimetype = $file->getMimeType();
        $unique = uniqid() . rand() . md5(microtime());
        $fileName = $unique . '.' . $extension;
        $path = $this->storagePath . str_replace('.', '_', $fileName);
        /** @noinspection PhpUndefinedMethodInspection */
        $a = Storage::putFileAs($path, $file, $fileName);

        foreach (config('image_sizes.profile_pic') as $type => $value) {
            try {
                $img = Image::make($file)
                    ->fit($value[0], $value[1], function ($constraint) {
                        $constraint->upsize();
                    })
                    ->encode($mimetype, 100);
                $newFileName = $fileName . '-' . $type . '.' . $extension;
                /** @noinspection PhpUndefinedMethodInspection */
                Storage::put($path . '/' . $newFileName, $img);

            } catch (Exception $exception) {
                /** @noinspection PhpUndefinedMethodInspection */
                Storage::delete($path);
                throw ValidationException::withMessages([
                    'profile_pic' => ['Something Went Wrong! Please Try again later']
                ]);
            } catch (NotReadableException $exception) {
                /** @noinspection PhpUndefinedMethodInspection */
                Storage::delete($path);
                throw ValidationException::withMessages([
                    'profile_pic' => ['Image Source Not readable']
                ]);
            } catch (ImageException $exception) {
                Storage::delete($path);
                throw ValidationException::withMessages([
                    'profile_pic' => ['Cannot process image. Please use another image.']
                ]);
            }
        }
        return $fileName;

    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));
        $message = 'You have been successfully registered. Please check your email address for the email verification link.';
        return redirect($this->redirectPath())->with('success', $message);
    }
}

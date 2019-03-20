<div class="group">
    <h2 class="form-heading">Create new account</h2>
</div> <!--close group -->
<div class="group">
    <input type="text" name="name" value="{{old('name')}}" class="control" placeholder="Enter Full Name...">
    @if($errors->has('name'))
        <span class="error">{{$errors->first('name')}}</span>
    @endif

</div> <!--close group -->
<div class="group">
    <input type="email" name="email" class="control" value="{{old('email')}}" placeholder="Enter Email Address...">
    @if($errors->has('email'))
        <span class="error">{{$errors->first('email')}}</span>
    @endif
</div> <!--close group -->
<div class="group">
    <input type="password" name="password" class="control" placeholder="Enter Password...">
    @if($errors->has('password'))
        <span class="error">{{$errors->first('password')}}</span>
    @endif
</div> <!--close group -->
<div class="group">
    <input type="password" name="password_confirmation" class="control" placeholder="Confirm Password...">
</div> <!--close group -->

<div class="group">
    <label for="file" id="file-label"><i class="fas fa-cloud-upload-alt upload-icon"></i>Choose
        Image</label>
    <input type="file" id="file" name="profile_pic" class="file">
    @if($errors->has('profile_pic'))
        <span class="error">{{$errors->first('profile_pic')}}</span>
    @endif
</div> <!--close group -->
<div class="group">
    <input type="submit" value="Create Account" class="btn account-btn">
</div> <!--close group -->
<div class="group">
    <a href="{{route('login')}}" class="link">Already have an account?</a>
</div><!--close group -->

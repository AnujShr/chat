<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserImage extends Model
{
    protected $fillable = ['user_id', 'image_name'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

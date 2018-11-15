<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    protected $guarded =['_token'];
    protected $fillable = ['url_sound'];
}

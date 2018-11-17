<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    protected $guarded =['_token'];
    protected $fillable = ['year_album'];
}

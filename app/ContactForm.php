<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    protected $table = 'contact_forms';
    protected $guarded =['_token'];
    protected $fillable = ['name','email','message'];
}

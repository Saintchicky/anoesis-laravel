<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
     protected $guarded =['_token'];
   
    protected $table = 'galleries';

     public function Year()
    {
        return $this->belongsTo(Year::class,'id_year');
    }
}

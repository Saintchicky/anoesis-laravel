<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
     protected $guarded =['_token'];
   

     protected $fillable = ['title','description_pict','photo_pict','is_main_photo','order','id_year'];

     public function Year()
    {
        return $this->belongsTo(Year::class,'id_year');
    }
}

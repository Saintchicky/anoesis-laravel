<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $guarded =['_token'];
   
    protected $table = 'videos';

    public function Year()
    {
        return $this->belongsTo(Year::class,'id_year');
    }
}

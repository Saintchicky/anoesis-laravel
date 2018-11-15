<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourDates extends Model
{
    protected $guarded =['_token'];
    protected $fillable = [ 'date', 'city','place','url'];
}

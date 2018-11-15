<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TourDates;
use Illuminate\Support\Facades\Redirect;

class DateTourController extends Controller
{
         public function index(Request $request)
    {
        $datesTour = TourDates::all();
       
        return view('back_front.SiteManage.date',compact('datesTour'));
    }

         public function store(Request $request)
    {
        $dates = new TourDates();
        $dates->fill($request->all());
        $dates->save();

        return Redirect::back();
    }

}

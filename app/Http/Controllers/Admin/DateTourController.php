<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TourDates;
use Illuminate\Support\Facades\Redirect;

class DateTourController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
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

    public function up(Request $request)
    {
        if ($request->isMethod('get')){
            $datesTour= TourDates::all();
        
        }

        return view('back_front.SiteManage.modif_date',compact('datesTour'));   
    }

    public function upStore(Request $request){

        $mode_update = false;
           if(is_numeric($request->id)){
               $mode_update = true;
           }
           if($mode_update){
     
            $datesTour = TourDates::find($request->id);
               
           }else{
            $datesTour = new TourDates();
           }
            $datesTour->fill($request->all());
            $datesTour->save();
   
           return redirect()->route('dates');
       }

       public function delete(Request $request)
       {
           $datesTour = TourDates::find($request->id);
           $datesTour->delete(); 
           return redirect()->route('dates');      
       }


}

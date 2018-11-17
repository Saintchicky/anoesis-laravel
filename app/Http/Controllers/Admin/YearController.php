<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Year;
use App\Gallery;
use Illuminate\Support\Facades\Redirect;

class YearController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
     public function index ()
    {
        $years = Year::all();

     return view ('back_front.SiteManage.year', compact('years'));
    }
     public function store (Request $request)
    {
        $year = new Year();
        $year->year_album = $request->year_album;
        $year->save();

    return Redirect::back();
    }
    public function up (Request $request)
    {
        if ($request->isMethod('get')){
            $years = Year::all();   
        }
    return view ('back_front.SiteManage.table_year',compact('years'));
    }
    public function upStore (Request $request)
    {
        $mode_update = false;
           if(is_numeric($request->id)){
               $mode_update = true;
           }
           if($mode_update){
           
        $year = Year::find($request->id);
               
           }else{
        $year = new Year();
           }
           $year->fill($request->all());
           $year->save();
           return redirect()->route('years');
    }
    public function delete (Request $request)
    {
            $year = Year::find($request->id);
            $year->delete();
            return Redirect::back();
    }

    public function viewByGallery(Request $request) {
        $id_year = $request->id;
        $year = Year::find($id_year);
        $gallery = Gallery::where('id_year',$id_year)->orderBy('order','ASC')->get();
        $years = Year::find($request->id);
       ;
        return view('back_front.SiteManage.see_gallery',compact('gallery','years'));
    }


}

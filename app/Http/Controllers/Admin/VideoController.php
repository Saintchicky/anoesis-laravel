<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Video;
use App\Year;
use Illuminate\Support\Facades\Redirect;

class VideoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function store(Request $request)
    {
        $videos = new Video();
        $videos->url_youtube = $request->url_youtube;
        $videos->id_year = $request->id_year;
        $videos->save();
        return Redirect::back();
    }
    public function up (Request $request)
    {
        if ($request->isMethod('get')){
            $videos = Video::find($request->id);
        
        }

        return view('back_front.note.note_up_video',compact('videos')); 
    }
    public function updateVideo (Request $request){

        $mode_update = false;
           if(is_numeric($request->id)){
               $mode_update = true;
           }
           if($mode_update){
     
            $videos = Video::find($request->id);
               
           }else{
            $videos = new Video();
           }
            $videos->fill($request->all());
            $videos->save();
   
            return Redirect::back();
       }

       public function delete(Request $request)
       {
           $videos = Video::find($request->id);
           $videos->delete(); 
           return Redirect::back();    
       }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Music;
use Illuminate\Support\Facades\Redirect;


class MusicController extends Controller
{
    public function index(Request $request)
    {
        $musics = Music::all();
       
        return view('back_front.SiteManage.music',compact('musics'));
    }

         public function store(Request $request)
    {
        $music = new Music();
        $music->fill($request->all());
        $music->save();

        return Redirect::back();
    }

    public function up(Request $request)
    {
        if ($request->isMethod('get')){
            $musics = Music::all();
        
        }

        return view('back_front.SiteManage.modif_music',compact('musics'));   
    }

    public function upStore(Request $request){

        $mode_update = false;
           if(is_numeric($request->id)){
               $mode_update = true;
           }
           if($mode_update){
     
            $music = Music::find($request->id);
               
           }else{
            $music = new Music();
           }
            $music->fill($request->all());
            $music->save();
   
           return redirect()->route('musics');
       }

       public function delete(Request $request)
       {
           $music = Music::find($request->id);
           $music->delete(); 
           return redirect()->route('musics');      
       }
}

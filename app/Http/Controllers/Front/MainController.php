<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
use App\TourDates;
use App\Music;
use App\Year;
use App\Gallery;
use App\Video;

class MainController extends Controller
{
    public function home ()
    {
        $profile_p = Profile::all();
        $datesTour = TourDates::all();
        $musics = Music::all();
        $gallery = Gallery::all();
        $video = Video::all();
        return view('home',compact('profile_p','datesTour','musics','gallery','video'));
    }

    public function gallery (Request $request)
    {
        $id_year = $request->id;
        $year = Year::find($id_year);
        $galleries = Gallery::where('id_year',$id_year)->orderBy('order','ASC')->get();
        $videos = Video::where('id_year',$id_year)->get();
    
        return view('gallery',compact('galleries','videos','year'));
    }
}

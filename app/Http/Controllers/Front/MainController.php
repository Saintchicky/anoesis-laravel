<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Profile;
use App\TourDates;
use App\Music;
use App\Year;
use App\Gallery;
use App\Video;
use App\NewsLetter;
use App\ContactForm;
use Validator;
use Illuminate\Support\Facades\Mail;



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
    public function storeNl (Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:news_letters,email',
        ]);

        if ($validator->fails()) {
            return redirect('/')->withErrors($validator)->withInput();
        }

        $News_l = new NewsLetter;
        $News_l->email = $request->email; 
        $News_l->save();
        
        return Redirect::back()->with('success_NL','Merci à toi, On se voit bientôt à nos concerts :-)');  

    }
    public function storeMessage(Request $request)
    {   
        $validator = Validator::make($request->all(), [
            'name' => 'required|between:2,20|regex:/(^[A-Za-z- ]+$)+/',
            'email' => 'required|email|unique:contact_forms',
            'message' => 'required|max:300'
        ]);

        if ($validator->fails()) {
            return redirect('/#contact')->withErrors($validator)->withInput();
        }


        $formContact = new ContactForm;
        $formContact->name = $request->input('name');
        $formContact->email = $request->input('email');
        $formContact->message = $request->input('message');
        $formContact->save();

          //Envoi d'un email 
          $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'bodyMessage' => $request->message,
        );
        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('leopoldmaltret@gmail.com');
            $message->subject("Quelqu'un vous envoie un message depuis le site !");

        });
        
        return redirect('/#contact')->with('success_m','Merci à toi, On a bien reçu ton message');

    }
}

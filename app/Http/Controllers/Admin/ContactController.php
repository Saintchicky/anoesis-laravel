<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\ContactForm;
use Mail;
use Session;
use Validator;
use App\NewsLetter;

class ContactController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

     public function index()
    {
        $bdd_NL= NewsLetter::all();
        $bdd_m = ContactForm::all();

        return view('back_front.MessagesNewLetters.messages', compact('bdd_NL','bdd_m'));
    }
    public function delete_NL(Request $request)
    {
        $bdd_NL=NewsLetter::find($request->id);
        $bdd_NL->delete();

        return Redirect::back()->with('success_NL','Email Supprimé');     
    }
      public function delete_m(Request $request)
    {
        $bdd_m=ContactForm::find($request->id);
        $bdd_m->delete();

        return Redirect::back()->with('success_m','Message Supprimé');     
    }
}

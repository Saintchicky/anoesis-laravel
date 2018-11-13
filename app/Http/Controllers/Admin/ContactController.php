<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ContactForm;
use Mail;
use Session;
use Validator;
use App\NewsLetter;

class ContactController extends Controller
{
     public function index()
    {
        $bdd_NL= NewsLetter::all();
        $bdd_m = ContactForm::all();

        return view('back_front.MessagesNewLetters.messages', compact('bdd_NL','bdd_m'));
    }
}

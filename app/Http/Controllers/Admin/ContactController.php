<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ContactForm;
use Mail;
use Session;
use Validator;

class ContactController extends Controller
{
     public function index()
    {
        $bdd = ContactForm::where('email_NL')->get();
  
        return view('back_front.MessagesNewLetters.messages', compact('bdd'));
    }
}

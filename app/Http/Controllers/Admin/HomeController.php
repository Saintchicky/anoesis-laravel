<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NewsLetter;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $newsl = NewsLetter::orderByDesc('created_at')->take(5)->get(); //orderByDesc by descending (décroissant)
        return view('back_front.home_view',compact('newsl'));
    }
}

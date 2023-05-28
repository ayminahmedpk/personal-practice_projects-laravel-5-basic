<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller

{
    function index() {
        return view('pages.index');
    }
    
    function about() {
        return view('pages.about');
    }

    function services() {
        return view('pages.services');
    }
}

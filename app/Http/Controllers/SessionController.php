<?php

namespace App\Http\Controllers;

use App\Models\Session;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index(){
        $sessions = Session::latest()->get();

        return view('sessions',compact('sessions'));
    }
}

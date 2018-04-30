<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $title = "Example App Middleware/Policies";
        $message = "Welcome";

        return view('front.home', compact('title', 'message'));

    }
}

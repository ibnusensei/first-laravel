<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $data = 'This is about page';
        return view('about', compact('data'));
    }
}

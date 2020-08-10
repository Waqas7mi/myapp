<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){

        return view('blog.index');

    }

    public  function pdf(){

        return response()->file('C:\laragon\www\portfolio\public\storage\cv\cv.pdf');
    }
}

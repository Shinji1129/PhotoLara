<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function list()
    {
        return view('pages.list');
    }

    public function detail()
    {
        return view('pages.detail');
    }

    public function post()
    {
        return view('pages.post');
    }
}

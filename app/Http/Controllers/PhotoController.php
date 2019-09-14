<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

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

    public function post(Request $request)
    {
        $post = new Photo();

        $post->filename = $request->filename->store('public/post_images');


        $post->save();


    }
}

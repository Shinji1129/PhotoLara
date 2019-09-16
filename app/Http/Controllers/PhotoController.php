<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use Illuminate\Support\Facades\Auth;

class PhotoController extends Controller
{

    public function list()
    {
        $photos = Photo::all();

        return view('pages.list', [
            'photos' => $photos,
        ]);
    }


    public function detail()
    {
        return view('pages.detail');
    }

    public function post(Request $request)
    {
        $post = new Photo();
        $post->title = $request->title;
        $post->file = $request->file->store('public');
        $post->file = str_replace('public/', '', $post->file);
        $post->user_id = Auth::user()->id;
        $post->save();

        return redirect('/');

    }
}

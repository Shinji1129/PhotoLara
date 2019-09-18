<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use Illuminate\Support\Facades\Auth;

class PhotoController extends Controller
{

    public function list()
    {
        $photos = Photo::with(['owner'])
           ->orderBy(Photo::CREATED_AT, 'desc')->paginate();

        return view('pages.list', [
            'photos' => $photos,
        ]);
    }


    //**写真詳細 */
    public function detail($id)
    {
        $photo = Photo::where('id', $id)->with(['owner'])->get();

        return view('pages.detail', [
            'photos' => $photo,
        ]);
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

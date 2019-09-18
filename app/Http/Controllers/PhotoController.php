<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{

    /**
     * 写真一覧
     * @return
     */
    public function list()
    {
        $photos = Photo::with(['owner'])
           ->orderBy(Photo::CREATED_AT, 'desc')->paginate();

        return view('pages.list', [
            'photos' => $photos,
        ]);
    }


    /**
     * 写真詳細
     * @return
     */
    public function detail($id)
    {
        $photo = Photo::where('id', $id)->with(['owner'])->get();

        return view('pages.detail', [
            'photos' => $photo,
        ]);
    }

    /**
     * 写真投稿
     * @return
     */
    public function post(Request $request)
    {
        $photo = new Photo;

        $photo->user_id = Auth::user()->id;
        $photo->title = $request->title;
        $photo->file = $request->file('file');
        $path = Storage::disk('s3')->putFile('images', $photo->file, 'public');
        $photo->file = Storage::disk('s3')->url($path);

        $photo->save();

        return redirect('/');

    }
}

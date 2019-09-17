<?php

// 写真一覧
Route::get('/', 'PhotoController@list')->name('list');

Route::group(['middleware' => 'auth'], function() {
// 写真投稿
Route::post('/', 'PhotoController@post')->name('post');
});

// 写真詳細
Route::get('/photo', 'PhotoController@detail')->name('detail');

//ログイン認証
Auth::routes();




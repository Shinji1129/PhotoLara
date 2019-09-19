<?php

// 写真一覧
Route::get('/', 'PhotoController@list')->name('list');
// 写真詳細
Route::get('/photo/{id}/', 'PhotoController@detail')->name('detail');


Route::group(['middleware' => 'auth'], function() {
// 写真投稿
Route::post('/', 'PhotoController@post')->name('post');

});

//ログイン認証
Auth::routes();




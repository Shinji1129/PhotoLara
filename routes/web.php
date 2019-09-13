<?php

//ログイン認証
// Auth::routes();
// 会員登録
// Route::post('/register', 'PhotoController@register')->name('register');
// ログイン
// Route::get('/login', 'PhotoController@register')->name('login');
// ログアウト
// Route::get('/logout', 'PhotoController@register')->name('logout');

// 写真一覧
Route::get('/list', 'PhotoController@list')->name('list');
// 写真投稿
Route::get('/post', 'PhotoController@post')->name('post');
// 写真詳細
Route::get('/photo', 'PhotoController@detail')->name('detail');




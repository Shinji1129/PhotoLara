@extends('layouts.layout')
@section('content')
<div class="post">
  <form method="post">
    @csrf
    <div class="form">
      <input type="file" name="photo" />
      <button class="button" type="submit">投稿</button>
    </div>
</div>
@endsection
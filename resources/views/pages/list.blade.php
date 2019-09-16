@extends('layouts.layout')
@section('content')
<div class="list">
  @foreach($photos as $photo)
  <h1>Photo List</h1>
  <p>{{ $photo->title }}</p>
  @if ($photo->file)
<img src="{{ asset('/storage/'.$photo->file) }}" alt="">
@endif
  @endforeach
</div>
@endsection
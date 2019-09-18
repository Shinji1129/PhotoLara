@extends('layouts.layout')
@section('content')
<div class="list">
@foreach($photos as $photo)
  <div class="list--wrap">
    <div class="list--item">
    <a href="{{ action('PhotoController@detail',[$photo->id]) }}" class="list--over-ray"></a>
        <p class="list--title">{{ $photo->owner->name }}</p>
        <img src="{{ asset('/storage/'.$photo->file) }}" class="list--image">
        <p class="list--like list--icon"><i class="bg fas fa-heart"></i>10</p>
        <a class="list--download list--icon" href="/download"><i class="bg fas fa-cloud-download-alt"></i>download</a>
    </div>
  </div>
  @endforeach
</div>
{{ $photos->links() }}
@endsection
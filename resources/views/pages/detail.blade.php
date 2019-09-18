@extends('layouts.layout')
@section('content')
@foreach($photos as $photo)
  <div class="detail--wrap">
    <div class="detail--item">
        <p class="detail--title">{{ $photo->owner->name }}</p>
        <img src="{{ asset('/storage/'.$photo->file) }}" class="detail--image">
        <p class="detail--like detail--icon"><i class="bg fas fa-heart"></i>10</p>
        <a class="detail--download detail--icon" href="{{ '/download/'.$photo->id }}"><i class="bg fas fa-cloud-download-alt"></i>download</a>
    </div>
  </div>
  @endforeach
@endsection
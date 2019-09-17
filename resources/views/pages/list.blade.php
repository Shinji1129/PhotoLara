@extends('layouts.layout')
@section('content')
<div class="list">
@foreach($photos as $photo)
  <div class="list--wrap">
    <div class="list--item">
      <div class="list--over-ray"></div>
        <p class="list--title">{{ $photo->owner->name }}</p>
        <img src="{{ asset('/storage/'.$photo->file) }}" class="list--image">
        <p class="list--like list--icon"><i class="bg fas fa-heart"></i>10</p>
        <p class="list--download list--icon"><i class="bg fas fa-cloud-download-alt"></i>download</p>
    </div>
  </div>
  @endforeach
</div>
{{ $photos->links() }}
@endsection
@extends('layouts.layout')
@section('content')
<div class="detail">
@foreach($photos as $photo)
  <div class="detail--contents">
  <a class="detail--back" href="#" onclick="history.back(); return false;"><i class="fas fa-arrow-circle-left"></i> 一覧へ戻る</a>
  <p class="detail--title detail--owner">Post By {{ $photo->owner->name }}</p>
  <div class="detail--icons">
        <p class="detail--icon detail--like"><i class="bg fas fa-heart"></i>10</p>
        <a class="detail--icon detail--download" href="{{ '/download/'.$photo->id }}"><i class="bg fas fa-cloud-download-alt"></i>download</a>
       </div>
  <div id="detail--zoom">
    <div class="detail--item"
         @click="onzoom = ! onzoom"
         v-bind:class="{ 'detail--zoom': onzoom }">
        <img src="{{ $photo->file }}" class="detail--image">
</div>
        <div class="detail--comment">
        <div class="detail--title">Title : {{ $photo->title }}</div>
          <div class="detail--post">
            <p class="detail--post-item">testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttest</p>
          </div>
        </div>
    </div>
  </div>
  @endforeach
</div>


<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script>
  new Vue({
    el: '#detail--zoom',
    data: {
      onzoom:false
    }
  })
</script>
@endsection
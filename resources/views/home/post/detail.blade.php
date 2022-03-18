{{-- @dd($post) --}}
<?php 

?>
<div class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h3><strong>{{$post->title}}</strong></h3>
        <img src="/{{$post->image}}" width="100%"alt="">
        <p class="text-mute">{!!$post->body!!}</p>
        <a href="/home">&leftarrow; Kembali ke beranda</a>
      </div>

      <div class="col-md-4">
        @include('home/post/kategori')
      </div>
    </div>
  </div>
</div>
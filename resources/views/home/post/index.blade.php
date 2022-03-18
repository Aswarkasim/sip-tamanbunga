<div class="container   my-5">

 
  <div class="row">
    @if (count($post) > 0)
        
    
    <div class="col-md-8">
       <div class="text-center">
          <h4><strong>Berita</strong></h4>
        </div>
        {{-- @dd($post) --}}
        @foreach ($post as $item)   
        <div class="shadow-sm rounded mt-2">
          <div class="row">
            <div class="col-md-4">
               <div style="width:100%; max-height:200px; overflow:hidden">
                  <img src="/{{$item->image}}" width="250px" alt="">
              </div>
            </div>
            <div class="col-md-8">
              <div class="py-4">
                <a href="/home/post/show/{{$item->slug}}"><h5><b>{{$item->title}}</b></h5></a>
                <p>{!!$item->excerpt!!}<a href="/home/post/show/{{$item->slug}}">Selengakapnya &rightarrow;</a></p>
              </div>
            </div>
          </div>
        </div>
        @endforeach

    </div>

    @else
    <p class="alert alert-warning"><i class="fas fa-info"></i> Tidak ada berita</p>    
    @endif

    <div class="col-md-4">
        @include('home/post/kategori')
    </div>
  </div>
</div>



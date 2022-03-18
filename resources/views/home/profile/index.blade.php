<div class="container   my-5">

  <div class="row">
    <div class="col-4">
      <div class="shadow-sm py-2">
        <div class="d-flex  justify-content-center">
          <div class="rounded-circle text-center" style="max-height: 100px; max-width: 100px; overflow: hidden; ">
            <img src="/img/thumb.jpg" class="text-center" width="150px" alt="">
          </div>
        </div>
        <h5 class="text-center my-3"><strong>Aswar Kasim</strong></h5>
        
      </div>

      <div class="my-3">
        <h5>Peserta</h5>
      </div>
          {{-- <a href="/profile?add=create" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Peserta</a> --}}

          <div class="list-group mt-2">
            @foreach ($peserta as $item)
              <a href="/profile?peserta_id={{$item->id}}" class="list-group-item list-group-item-action {{request('peserta_id') == $item->id ? 'active' : ''}}">{{$item->nama}}</a>
            @endforeach
          </div>
           <a href="/admin/logout" class="btn btn-danger btn-sm my-4">
              <i class="fas fa-sign-out-alt"></i> Logout
            </a>
    </div>

    <div class="col-8 shadow-sm">
     @if (request('add') == true)
         @include('/home/profile/add')
        @else
         @include('/home/profile/data')
     @endif
    </div>
  </div>
</div>



<div class="row">
  <div class="col-md-6">
    <div class="p-3  card">
      <div class="card-body">

        @if (Request::is('admin/imunisasi/create'))
          <form action="/admin/imunisasi" method="POST">  
        @else
          <form action="/admin/imunisasi/{{$imunisasi->id}}" method="POST">  
            @method('PUT')
        @endif
          @csrf
          <div class="form-group">
            <label for="">Nama</label>
            <input type="text" class="form-control  @error('nama') is-invalid @enderror"  name="nama"  value="{{isset($imunisasi) ? $imunisasi->nama : old('nama')}}" placeholder="Nama">
             @error('nama')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
             @enderror
          </div>


          <div class="form-group">
            <label for="">Tanggal</label>
            <input type="date" class="form-control  @error('tanggal') is-invalid @enderror"  name="tanggal"  value="{{isset($imunisasi) ? $imunisasi->tanggal : old('tanggal')}}" placeholder="Tanggal">
             @error('tanggal')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
             @enderror
          </div>

     
          <a href="/admin/imunisasi" class="btn btn-info "><i class="fa fa-arrow-left"></i> Kembali</a>
         <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
        
        </form>
      </div>
    </div>
  </div>
</div>


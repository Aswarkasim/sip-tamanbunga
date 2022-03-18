<div class="row">
  <div class="col-md-6">
      <div class="card">
<div class="card-body">
  <a href="/admin/imunisasi" class="btn btn-warning  mb-3"><i class="fa fa-arrow-left"></i> Kembali</a>



  <h4><strong>Belum Absen</strong></h4>
<table id="example1" class="table table-striped">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Action</th>
    </tr>
  </thead>

  <tbody>
     <?php $no_0 =1; ?>
    @foreach ($absensi as $row)
        @if ($row->is_kehadiran == 0)
            
        <tr>
          <td width="50px">{{$no_0++}}</td>
          <td><b>{{$row->peserta->nama}}</a> </td>
          <td>
            <a href="/admin/absensi/kehadiran?id={{$row->id}}&is_kehadiran=1" class="btn btn-primary btn-sm">Hadir <i class="fa fa-sign-out-alt"></i></a>
          </td>
        </tr>
        @endif

    @endforeach

  </tbody>
  </table>

    <div class="float-right">
      {{$absensi->links()}}
    </div>
  </div>
  </div>
  </div>
  <div class="col-md-6">
     <div class="card">
        <div class="card-body">
          {{-- <a href="/admin/absensi/create" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah</a> --}}

          {{-- <div class="float-right">
            <form action="" method="get">
            <div class="input-group input-group-sm">
                <input type="text" name="cari" class="form-control" placeholder="Cari..">
                <span class="input-group-append">
                  <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-search"></i></button>
                  <a href="/admin/absensi" class="btn btn-info btn-flat tombol-hapus"><i class="fa fa-sync-alt"></i></a>
                </span>
              </div>
              </form>
          </div> --}}

          <h4><strong>Hadir</strong></h4>
        <table id="example1" class="table table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
           <?php $no_1 = 1 ?>
            @foreach ($absensi as $row)
                 @if ($row->is_kehadiran == 1)
                  <tr>
                    <td width="50px">{{$no_1++}}</td>
                    <td><b>{{$row->peserta->nama}}</b> </td>
                    <td>
                      {{-- <div class="btn-group">
                          <button type="button" class="btn btn-primary"><i class="fa fa-file"></i> Input Data</button>
                          <button type="button" class="btn btn-primary dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="true">
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <div class="dropdown-menu" role="menu" x-placement="bottom-start">
                            <a class="dropdown-item" href="/admin/imunisasi/{{$row->id}}/edit"><i class="fa fa-edit"></i> Pemeriksaan</a>
                            <a class="dropdown-item" href="/admin/imunisasi/{{$row->id}}/edit"><i class="fa fa-exchange-alt"></i> Penimbangan</a>
                        </div> --}}

                       {{-- <a href="/admin/absensi?peserta_id={{$row->peserta_id}}&imunisasi_id={{$row->imunisasi_id}}" target="_blank" class="btn btn-success btn-sm"><i class="fas fa-tachometer-alt"></i> Input Data</a> --}}
                       <a href="/admin/absensi?id={{$row->id}}"  class="btn btn-success btn-sm"><i class="fas fa-tachometer-alt"></i> Input Data</a>
                       <a href="/admin/absensi/kehadiran?id={{$row->id}}&is_kehadiran=0" class="btn btn-warning btn-sm"><i class="fa fa-times"></i> Batal</a>
                    </td>
                  </tr>
                  @endif
            @endforeach

          </tbody>
          </table>

            <div class="float-right">
              {{$absensi->links()}}
            </div>
          </div>
          </div>
  </div>
</div>

<!-- /.card-body -->



<div class="row">
  <div class="col-md-6">
    <div class="p-3  card">
      <div class="card-body">

        <h4><b>Data Peserta</b></h4>

        @if (Request::is('admin/peserta/create'))
          <form action="/admin/peserta" method="POST">  
        @else
          <form action="/admin/peserta/{{$peserta->id}}" method="POST">  
            @method('PUT')
        @endif
          @csrf
          
          <table class="table">
            <tr>
              <td>Nama</td>
              <td>: {{$peserta->nama}}</td>
            </tr>

             <tr>
              <td>Tempat Tanggal Lahir</td>
              <td>: {{$peserta->tempat_lahir.', '.$peserta->tanggal_lahir}}</td>
            </tr>

             <tr>
              <td>Jenis Kelamin</td>
              <td>: {{$peserta->jenis_kelamin}}</td>
            </tr>

             <tr>
              <td>Jenis Peserta</td>
              <td>: {{$peserta->jenis}}</td>
            </tr>

             <tr>
              <td>Status</td>
              <td>: {{$peserta->status}}</td>
            </tr>


          </table>

     
          <a href="/admin/peserta" class="btn btn-info "><i class="fa fa-arrow-left"></i> Kembali</a>
         <a href="/admin/peserta/print?peserta_id={{$peserta->id}}" class="btn btn-primary" target="blank"><i class="fa fa-print"></i> Cetak Riwayat Pemeriksaan</a>
        
        </form>
      </div>
    </div>
  </div>
</div>


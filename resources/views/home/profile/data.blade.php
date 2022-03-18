 @if ($data_peserta != '')
      <h4><b> Data {{$data_peserta->nama}}</b></h4>
      <a href="/profile?add=edit&peserta_id={{$data_peserta->id}}"> Ubah data</a> |
      <a href="/profile/history?peserta_id={{$data_peserta->id}}"> Lihat riwayat</a>
      <hr>

        
        <table class="table">
          <tr>
            <td width="200px">Nama</td>
            <td>: {{$data_peserta->nama}}</td>
          </tr>

          <tr>
            <td width="200px">Tanggal Lahir</td>
            <td>: {{$data_peserta->tanggal_lahir}}</td>
          </tr>

          <tr>
            <td width="200px">Jenis Kelamin</td>
            <td>: {{$data_peserta->jenis_kelamin}}</td>
          </tr>

          <tr>
            <td width="200px">Umur</td>
            <td>: {{$data_peserta->umur}}</td>
          </tr>

          <tr>
            <td width="200px">Jenis</td>
            <td>: {{$data_peserta->jenis}}</td>
          </tr>

          <tr>
            <td width="200px">Status</td>
            <td>: {{$data_peserta->status}}</td>
          </tr>

        </table>
          @else
            
          <p class="alert alert-danger"><i class="fas fa-info"></i> Data peserta tidak ditemukan</p>
        @endif
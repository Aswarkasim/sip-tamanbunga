
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h5><b>Pemeriksaan</b></h5>
            <a href="/admin/imunisasi/{{$pemeriksaan->imunisasi_id}}" class="btn btn-info "><i class="fa fa-arrow-left"></i> Kembali</a>
         @include('/admin/imunisasi/pemeriksaan_modal')


          <table class="table table-striped mt-2">
            <tr>
              <th width="20px">No</th>
              <th>Data</th>
              <th>Nilai</th>
            </tr>
            
            <tr>
              <td>1</td>
              <td>Jenis Imunisasi</td>
              <td>{{$pemeriksaan->jenis}}</td>
            </tr>

             <tr>
              <td>2</td>
              <td>Vitamin</td>
              <td>{{$pemeriksaan->vitamin}}</td>
            </tr>

             <tr>
              <td>3</td>
              <td>Tekanan Darah</td>
              <td>{{$pemeriksaan->tekanan_darah}}</td>
            </tr>

           <tr>
              <td>4</td>
              <td>Suhu</td>
              <td>{{$pemeriksaan->suhu}}</td>
            </tr>

            <tr>
              <td>5</td>
              <td>Tinggi Badan</td>
              <td>{{$pemeriksaan->tinggi_badan}}</td>
            </tr>

            <tr>
              <td>6</td>
              <td>Lingkar Kepala</td>
              <td>{{$pemeriksaan->lingkar_kepala}}</td>
            </tr>

            <tr>
              <td>7</td>
              <td>Lingkar Perut</td>
              <td>{{$pemeriksaan->lingkar_perut}}</td>
            </tr>

            <tr>
              <td>8</td>
              <td>Berat</td>
              <td>{{$pemeriksaan->berat}}</td>
            </tr>

          </table>
        </div>
      </div>
    </div>

    
  </div>


  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h5><b>Pemeriksaan</b></h5>
            <a href="/admin/peserta" class="btn btn-info "><i class="fa fa-arrow-left"></i> Kembali</a>

            <table class="table table-striped table-bordered mt-2">
              
              <tr>
                <td width="20px">No</td>
                <td>Imunisasi</td>
                <td>Tanggal</td>
                <td>Action</td>
              </tr>

              @foreach ($peserta->pemeriksaan as $item)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->imunisasi->nama}}</td>
                    <td>{{$item->imunisasi->tanggal}}</td>
                    <td>
                      <a href="history?id={{$peserta->id}}&imunisasi_id={{$item->imunisasi_id}}" class="btn btn-primary btn-sm"><i class="fa fa-sign-out-alt" ></i></a>
                    </td>
                  </tr>
              @endforeach
            </table>
        </div>
      </div>
    </div>

@if ($pemeriksaan != '')
    
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h5><b>Data Pemeriksaan</b></h5>

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

@endif
    
  </div>

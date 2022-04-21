<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cetak</title>
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">

  <style type="text/css">
    body {
      font-size: 12px;
            /* font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; */
        }

    @page {
      size: landscape;
      margin-left: 50px;
      margin-right: 50px;
      margin-top: 50px;
      margin-bottom: 50px;
    }

  </style>

</head>
<body>

<div class="text-center"><h4><b>Cetak Data Pemeriksaan {{$peserta->nama}}</b></h4></div>

  <h5><b>Data Peserta</b></h5>

  <div style="display: flex">
   <table class="table" style="width: 400px"> 
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

  </table>

     <table class="table" style="width: 400px"> 

     

        <tr>
        <td>Jenis Peserta</td>
        <td>: {{$peserta->jenis}}</td>
      </tr>

        <tr>
        <td>Status</td>
        <td>: {{$peserta->status}}</td>
      </tr>

       <tr>
        <td>-</td>
        <td>-</td>
      </tr>
  </table>

  </div>

  <h5><b>Riwayat Pemeriksaan</b></h5>

  <table class="table">
    <tr>
      <th>No</th>
      <th>Bulan</th>
      <th>Jenis Imunisasi</th>
      <th>Vitamin</th>
      <th>Tekanan Darah</th>
      <th>Suhu</th>
      <th>Tinggi Badan</th>
      <th>Lingkar Kepala</th>
      <th>Lingkar Perut</th>
      <th>Berat</th>
    </tr>
    @foreach ($pemeriksaan as $item)
        
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$item->imunisasi->nama}}</td>
      <td>{{$item->jenis}}</td>
      <td>{{$item->Vitamin}}</td>
      <td>{{$item->tekanan_darah}}</td>
      <td>{{$item->suhu}}</td>
      <td>{{$item->tinggi_badan}}</td>
      <td>{{$item->lingkar_kepala}}</td>
      <td>{{$item->lingkar_perut}}</td>
      <td>{{$item->berat}}</td>
    </tr>
    @endforeach
  </table>


  <script>
    window.print();
  </script>
</body>
</html>
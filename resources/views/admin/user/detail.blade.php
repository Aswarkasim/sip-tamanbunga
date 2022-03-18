<div class="row">
  <div class="col-md-6">
    <div class="p-3  card">
      <div class="card-body">
        <h4><b>Peserta</b></h4>
        <a href="/admin/peserta/create?user_id={{Request::segment('3')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Peserta</a>

        <table class="table table-striped mt-2">
          @foreach ($user->peserta as $peserta)
          <tr>
            <td>
              <a href="#"><b>{{$peserta->nama}}</b></a>
            </td>
            <td>{{$peserta->jenis}}</td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
</div>


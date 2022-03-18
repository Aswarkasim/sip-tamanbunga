
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
  <i class="fa fa-edit"></i> Ubah data
</button>

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Data Pemeriksaan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/admin/pemeriksaan/update/{{$pemeriksaan->id}}" method="post">
          @method('PUT')
          @csrf
            <div class="form-group">
              <label for="">Jenis Imunisasi</label>
              <input type="text" class="form-control" name="jenis" value="{{isset($pemeriksaan) ? $pemeriksaan->jenis:'';}}" placeholder="Jenis Imunisasi">
            </div>

            <div class="form-group">
              <label for="">Vitamin</label>
              <input type="text" class="form-control" name="vitamin" value="{{isset($pemeriksaan) ? $pemeriksaan->vitamin:'';}}" placeholder="Vitamin">
            </div>

            <div class="form-group">
              <label for="">Tekanan Darah</label>
              <input type="text" class="form-control" name="tekanan_darah" value="{{isset($pemeriksaan) ? $pemeriksaan->tekanan_darah:'';}}" placeholder="Tekanan Darah">
            </div>

              <div class="form-group">
              <label for="">Suhu</label>
              <input type="text" class="form-control" name="suhu" value="{{isset($pemeriksaan) ? $pemeriksaan->suhu:'';}}" placeholder="Suhu">
              </div>

              <div class="form-group">
              <label for="">Tinggi Badan</label>
              <input type="text" class="form-control" name="tinggi_badan" value="{{isset($pemeriksaan) ? $pemeriksaan->tinggi_badan:'';}}" placeholder="Tinggi Badan">
              </div>

              <div class="form-group">
              <label for="">Lingkar Kepala</label>
              <input type="text" class="form-control" name="lingkar_kepala" value="{{isset($pemeriksaan) ? $pemeriksaan->lingkar_kepala:'';}}" placeholder="Lingkar Kepala">
              </div>

              <div class="form-group">
              <label for="">Lingkar Perut</label>
              <input type="text" class="form-control" name="lingkar_perut" value="{{isset($pemeriksaan) ? $pemeriksaan->lingkar_perut:'';}}" placeholder="Lingkar Perut">
              </div>

              <div class="form-group">
              <label for="">Berat</label>
              <input type="text" class="form-control" name="berat" value="{{isset($pemeriksaan) ? $pemeriksaan->berat:'';}}" placeholder="Berat">
              </div>

              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
              </div>
          </form>
      </div>
      
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
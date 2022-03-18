<div class="row">
  <div class="col-md-12">
    <div class="p-3  card">
      <div class="card-body">
         @if (Request::is('admin/peserta/create'))
          <form action="/admin/peserta" method="POST">  
        @else
          <form action="/admin/peserta/{{$peserta->id}}" method="POST">  
            @method('PUT')
        @endif
          @csrf
            <div class="row">
              <div class="col-md-6">
                <input type="hidden" name="user_id" value="{{request('user_id')}}">
                 <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control  @error('nama') is-invalid @enderror"  name="nama"  value="{{isset($peserta) ? $peserta->nama : old('nama')}}" placeholder="Nama">
                    @error('nama')
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                    @enderror
                  </div>



                  <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror" id="">
                      <option value="">-- Jenis Kelamin --</option>
                      <option value="Laki-laki"
                      <?php 
                      if(isset($peserta)) {
                        if($peserta->jenis_kelamin == 'Laki-laki') {
                          echo 'selected';
                          }
                      }else{
                        if(old('jenis_kelamin') == 'Laki-laki') {
                          echo 'selected';
                        }
                      } ?> >Laki-laki</option>
                      <option value="Perempuan"
                      <?php 
                      if(isset($peserta)) {
                        if($peserta->jenis_kelamin == 'Perempuan') {
                          echo 'selected';
                          }
                      }else{
                        if(old('jenis_kelamin') == 'Perempuan') {
                          echo 'selected';
                        }
                      } ?>
                      >Perempuan</option>
                    </select>
                    @error('jenis_kelamin')
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                    @enderror
                  </div>
                  
                  <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" class="form-control  @error('tanggal_lahir') is-invalid @enderror"  name="tanggal_lahir"  value="{{isset($peserta) ? $peserta->tanggal_lahir : old('tanggal_lahir')}}" placeholder="Tanggal Lahir">
                    @error('tanggal_lahir')
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                    @enderror
                  </div>

                <div class="form-group">
                  <label for="">Tempat Lahir</label>
                  <input type="text" class="form-control  @error('tempat_lahir') is-invalid @enderror"  name="tempat_lahir"  value="{{isset($peserta) ? $peserta->tempat_lahir : old('tempat_lahir')}}" placeholder="Tempat Lahir">
                  @error('tempat_lahir')
                      <div class="invalid-feedback">
                        {{$message}}
                      </div>
                  @enderror
                </div>

              </div>
              <div class="col-md-6">
                 <div class="form-group">
                    <label for="">Umur</label>
                    <input type="text" class="form-control  @error('umur') is-invalid @enderror"  name="umur"  value="{{isset($peserta) ? $peserta->umur : old('umur')}}" placeholder="Umur">
                    @error('umur')
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                    @enderror
                </div>



                <div class="form-group">
                    <label for="">Jenis</label>
                    <select name="jenis" class="form-control @error('jenis') is-invalid @enderror" id="">
                      <option value="">-- Jenis --</option>
                      <option value="Balita"<?php if(isset($peserta)) {if($peserta->jenis == 'Balita') {echo 'selected';}}else{if(old('jenis') == 'Balita') {echo 'selected';}} ?> >Balita</option>

                      <option value="Busui"<?php if(isset($peserta)) {if($peserta->jenis == 'Busui') {echo 'selected';}}else{if(old('jenis') == 'Busui') {echo 'selected';}} ?>>Busui</option>

                      <option value="Bumil"<?php if(isset($peserta)) {if($peserta->jenis == 'Bumil') {echo 'selected';}}else{if(old('jenis') == 'Bumil') {echo 'selected';}} ?>>Bumil</option>

                       <option value="Wus"<?php if(isset($peserta)) {if($peserta->jenis == 'Wus') {echo 'selected';}}else{if(old('jenis') == 'Wus') {echo 'selected';}} ?>>Wus</option>

                    </select>
                    @error('jenis')
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="">Status</label>
                    <select name="status" class="form-control @error('status') is-invalid @enderror" id="">
                      <option value="">-- Status --</option>
                      <option value="Hidup"<?php if(isset($peserta)) {if($peserta->status == 'Hidup') {echo 'selected';}}else{if(old('status') == 'Hidup') {echo 'selected';}} ?> >Hidup</option>

                      <option value="Meninggal"<?php if(isset($peserta)) {if($peserta->status == 'Meninggal') {echo 'selected';}}else{if(old('status') == 'Meninggal') {echo 'selected';}} ?>>Meninggal</option>

                    </select>
                    @error('status')
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                    @enderror
                  </div>

                   <div class="form-group">
                    <label for="">Kepesertaan</label>
                    <select name="is_active" class="form-control @error('is_active') is-invalid @enderror" id="">
                      <option value="">-- Kepesertaan --</option>
                      <option value="1"<?php if(isset($peserta)) {if($peserta->is_active == '1') {echo 'selected';}}else{if(old('is_active') == '1') {echo 'selected';}} ?> >Aktif</option>

                      <option value="0"<?php if(isset($peserta)) {if($peserta->is_active == '0') {echo 'selected';}}else{if(old('is_active') == '0') {echo 'selected';}} ?>>Tidak Aktif</option>

                    </select>
                    @error('is_active')
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                    @enderror
                  </div>

              </div>
            </div>
       
         

     
          <a href="/admin/peserta" class="btn btn-info "><i class="fa fa-arrow-left"></i> Kembali</a>
         <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
        
        </form>
      </div>
    </div>
  </div>
</div>


@extends('backend.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <!-- Form Input Data Pengurus -->
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Data Pengurus Masjid</h4>
                <form class="forms-sample">
                  <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="img[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control file-upload-info" disabled placeholder="Unggah Foto">
                      <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Unggah</button>
                      </span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">Nama Lengkap</label>
                    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Masukkan Nama Lengkap">
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Alamat Lengkap</label>
                    <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect2">Jenis Kelamin</label>
                    <select class="form-control" id="exampleFormControlSelect2">
                      <option>Silahkan Pilih</option>
                      <option>Laki - laki</option>
                      <option>Perempuan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword4">Nomor Telepon</label>
                    <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Masukkan Nomor Telepon">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect2">Jabatan Kepengurusan</label>
                    <select class="form-control" id="exampleFormControlSelect2">
                      <option>Silahkan Pilih</option>
                      <option>Ketua DKM</option>
                      <option>Sekertaris</option>
                      <option>Bendahara</option>
                      <option>Pengurus</option>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                  <button class="btn btn-light">Batal</button>
                </form>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection

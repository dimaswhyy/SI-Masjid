@extends('backend.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4>Ubah Profil Masjid</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Identitas Masjid</h4>
                <form class="forms-sample">
                  <div class="form-group">
                    <label>Logo Masjid</label>
                    <input type="file" name="img[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control file-upload-info" disabled placeholder="Unggah Foto">
                      <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Unggah</button>
                      </span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">Nama Masjid</label>
                    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Masukkan Nama Masjid">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword4">Alamat Masjid</label>
                    <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Masukkan Alamat Lengkap Masjid">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword4">Nomor Telepon Masjid</label>
                    <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Masukkan Nomor Telepon Masjid">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputCity1">Email Masjid</label>
                    <input type="text" class="form-control" id="exampleInputCity1" placeholder="Masukkan Email Masjid">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputCity1">Instagram Masjid</label>
                    <input type="text" class="form-control" id="exampleInputCity1" placeholder="Masukkan Akun Instagram Masjid">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputCity1">Facebook Masjid</label>
                    <input type="text" class="form-control" id="exampleInputCity1" placeholder="Masukkan Akun Facebook Masjid">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputCity1">Youtube Masjid</label>
                    <input type="text" class="form-control" id="exampleInputCity1" placeholder="Masukkan Channel Youtube Masjid">
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Sejarah Masjid</label>
                    <textarea class="sejarah" id="sejarah" rows="4"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Visi Masjid</label>
                    <textarea class="visi" id="visi" rows="4"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Misi Masjid</label>
                    <textarea class="misi" id="misi" rows="4"></textarea>
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

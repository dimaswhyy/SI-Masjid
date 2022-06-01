@extends('backend.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4>Tambah Data Kas Masuk</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Pemasukkan Kas Masjid</h4>
                <form class="forms-sample">
                  <div class="form-group">
                    <label for="exampleFormControlSelect2">Jenis Pemasukkan</label>
                    <select class="form-control" id="exampleFormControlSelect2">
                      <option>Silahkan Pilih</option>
                      <option>Pemasukkan Kas Jum'at</option>
                      <option>Infak Kegiatan</option>
                      <option>Infak Akad Bebas</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white">Rp</span>
                      </div>
                      <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Deskripsi Pemasukkan</label>
                    <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
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

@extends('backend.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
      <!-- Form Input Inventaris -->
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Inventaris</h4>
            <form class="forms-sample">
              <div class="form-group">
                <label for="exampleInputEmail3">Nama Barang</label>
                <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Masukkan Nama Barang">
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect2">Jenis Barang</label>
                <select class="form-control" id="exampleFormControlSelect2">
                  <option>Silahkan Pilih</option>
                  <option>Pengeras Suara</option>
                  <option>Perlengkapan Shalat</option>
                  <option>Perlengkapan Kebersihan</option>
                  <option>Perlengkapan Lain / Operational</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Kode Barang</label>
                <input type="email" class="form-control" id="exampleInputEmail3" readonly value="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Jumlah</label>
                <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Masukkan Jumlah">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Satuan</label>
                <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Masukkan Satuan">
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect2">Jenis Barang</label>
                <select class="form-control" id="exampleFormControlSelect2">
                  <option>Silahkan Pilih</option>
                  <option>Baik</option>
                  <option>Rusak</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Keterangan</label>
                <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Masukkan Keterangan">
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

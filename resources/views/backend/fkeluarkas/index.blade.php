@extends('backend.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Pengeluaran Kas Masjid</h4>
                <form class="forms-sample">
                  <div class="form-group">
                    <label for="exampleFormControlSelect2">Jenis Pengeluaran</label>
                    <select class="form-control" id="exampleFormControlSelect2">
                      <option>Silahkan Pilih</option>
                      <option>Biaya Operasional</option>
                      <option>Pembangunan dan Renovasi</option>
                      <option>Honor</option>
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
                    <label for="exampleTextarea1">Deskripsi Pengeluaran</label>
                    <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Bukti Pembelian</label>
                    <input type="file" name="img[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control file-upload-info" disabled placeholder="Unggah Bukti Pembelian">
                      <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Unggah</button>
                      </span>
                    </div>
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

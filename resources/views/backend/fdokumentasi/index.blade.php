@extends('backend.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Dokumentasi Masjid</h4>
                <form class="forms-sample">
                  <div class="form-group">
                    <label for="exampleFormControlSelect2">Tipe Dokumentasi</label>
                    <select class="form-control" id="exampleFormControlSelect2">
                      <option>Silahkan Pilih</option>
                      <option>Pembangunan Masjid</option>
                      <option>Kegiatan Masjid</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Foto Dokumentasi Masjid</label>
                    <input type="file" name="img[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control file-upload-info" disabled placeholder="Unggah Foto">
                      <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Unggah</button>
                      </span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Deskripsi Foto</label>
                    <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Date of Birth</label>
                        <div class="col-sm-9">
                          <input class="form-control" placeholder="dd/mm/yyyy"/>
                        </div>
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

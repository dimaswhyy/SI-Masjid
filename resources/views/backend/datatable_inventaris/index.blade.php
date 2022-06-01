@extends('backend.master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4>Data Inventaris</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <a class="btn btn-primary" href="/inventaris/create">Tambah Data</a>
                        <div class="row">
                            <div class="table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Barang</th>
                                            <th>Jenis Barang</th>
                                            <th>Kode Barang</th>
                                            <th>Jumlah Barang</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Sejadah Masjid</td>
                                            <td>Wakaf</td>
                                            <td>I2203001</td>
                                            <td>3</td>
                                            <td>Baik</td>
                                            <td>
                                                <button class="btn btn-outline-primary btn-sm"><i class="mdi mdi-magnify"></i></button>
                                                <button class="btn btn-outline-primary btn-sm"><i class="mdi mdi-lead-pencil"></i></button>
                                                <button class="btn btn-outline-primary btn-sm"><i class="mdi mdi-eraser"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

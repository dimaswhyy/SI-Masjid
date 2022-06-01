@extends('backend.master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4>Data Dokumentasi</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <a class="btn btn-primary" href="/dokumentasi/create">Tambah Data</a>
                        <div class="row">
                            <div class="table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Jenis</th>
                                            <th>Foto</th>
                                            <th>Tanggal Pelaksanaan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Kegiatan Masjid</td>
                                            <td><img src="{{ asset('assets/backend/images/test.jpg') }}" alt="profile"></td>
                                            <td>17 November 2021</td>
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

@extends('backend.master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4>Data Pengurus</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <a class="btn btn-primary" href="/datapengurus/create">Tambah Data</a>
                        <div class="row">
                            <div class="table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Lengkap</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Nomor Telepon</th>
                                            <th>Jabatan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($penguruses as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->nama_lengkap }}</td>
                                            <td>{{ $item->jenis_kelamin }}</td>
                                            <td>{{ $item->nomor_telepon }}</td>
                                            <td>{{ $item->jabatan_kepengurusan }}</td>
                                            <td>
                                                <a class="btn btn-outline-primary btn-sm"><i class="mdi mdi-magnify"></i></a>
                                                <a class="btn btn-outline-primary btn-sm" href="/datapengurus/edit"><i class="mdi mdi-lead-pencil"></i></a>
                                                <a class="btn btn-outline-primary btn-sm"><i class="mdi mdi-eraser"></i></a>
                                            </td>
                                        </tr>
                                        @empty
                                        <div class="alert alert-danger">
                                            Data Blog belum Tersedia.
                                        </div>
                                        @endforelse
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

@extends('tampilan.master')

@section('title', 'Surat Masuk')

@php
    $hideContent = true;
@endphp

@section('content')
    @include('tampilan.header')

    <div class="container mt-5 pt-5">
        <h2>Daftar Surat Masuk</h2>

        <!-- Button trigger modal -->
        <div class="d-flex justify-content-end" style="width: 100%;">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                + tambah data
            </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Tambah Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('komponen.tambah.surat')}}" method="POST" enctype="multipart/form-data">
                           @csrf
                            <div class="form-group">
                                <label for="kodeSurat">Kode Surat</label>
                                <input type="text" name="kode_surat" class="form-control" id="kode_surat">
                            </div>
                            <div class="form-group">
                                <label for="nomorSurat">Nomor Surat</label>
                                <input type="number" name="nomor_surat" class="form-control" id="nomor_surat">

                                <label for="jenisSurat">Jenis Surat</label>
                                <select name="id_jenis_surat" class="form-control">
    @foreach($jenisSurat as $jenis)
        <option value="{{ $jenis->id }}">{{ $jenis->nama_jenis_surat }}</option>
    @endforeach
</select>

                            </div>
                            <div class="form-group">
                                <label for="judulSurat">Judul Surat</label>
                                <input type="text" name="judul_surat" class="form-control" id="judul_surat">

                                <label for="tanggalSurat">Tanggal Surat</label>
                                <input type="date" name="tanggal_surat" class="form-control" id="tanggal_surat">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control" id="deskripsi">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table -->
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Kode Surat</th>
                    <th>Nomor Surat</th>
                    <th>Jenis Surat</th>
                    <th>Judul Surat</th>
                    <th>Tanggal Surat</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  
                    <th>1</th>
                    <td>Dinas A</td>
                    <td>Undangan Rapat</td>
                    <td>2025-05-30</td>
                    <td>Judul Surat</td>
                    <td>2025-05-30</td>
                    <td>Deskripsi singkat</td>
                    <td>
                        <!-- Tombol aksi bisa ditambahkan di sini -->
                        <button class="btn btn-sm btn-warning">Edit</button>
                        <button class="btn btn-sm btn-info">Detail</button>
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </td>
                  
                </tr>
            </tbody>
        </table>
    </div>

    @include('tampilan.footer')
@endsection

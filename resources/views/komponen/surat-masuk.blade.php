@extends('tampilan.master')

@section('title', 'Surat Masuk')

@php
    $hideContent = true;
@endphp

@section('content')
    @include('tampilan.header')

    <div class="container mt-5 pt-5">
        <h2>Daftar Surat Masuk</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Pengirim</th>
                    <th>Judul</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <td>Dinas A</td>
                    <td>Undangan Rapat</td>
                    <td>2025-05-30</td>
                </tr>
                <tr>
                    <th>2</th>
                    <td>Instansi B</td>
                    <td>Pemberitahuan</td>
                    <td>2025-05-29</td>
                </tr>
            </tbody>
        </table>
    </div>

    @include('tampilan.footer')
@endsection


@extends('layouts.admin')

@section('content')

@if ($errors->any())

<div class="alert alert-danger">

    <strong>Terjadi kesalahan:</strong>

    <ul class="mb-0 mt-2">

        @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach

    </ul>

</div>

@endif

<h2>Tambah Berita</h2>

<form action="{{ route('berita.store') }}"
        method="POST"
        enctype="multipart/form-data">

    @csrf

    <div class="mb-3">
        <label>Judul</label>

        <input type="text"
                name="judul"
                class="form-control">
    </div>  

    <div class="mb-3">
        <label>Isi Berita</label>

        <textarea name="isi"
                    rows="8"
                    class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label>Gambar</label>

        <input type="file"
                name="gambar"
                class="form-control">
    </div>

    <button class="btn btn-success">
        Simpan
    </button>

</form>

@endsection
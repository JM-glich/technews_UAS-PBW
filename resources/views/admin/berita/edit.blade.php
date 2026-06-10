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

<h2>Edit Berita</h2>

<form action="{{ route('berita.update', $berita) }}"
        method="POST"
        enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Judul</label>

        <input type="text"
                name="judul"
                class="form-control"
                value="{{ $berita->judul }}">
    </div>

    <div class="mb-3">
        <label>Isi Berita</label>

        <textarea name="isi"
                rows="8"
                class="form-control">{{ $berita->isi }}</textarea>
    </div>

    @if($berita->gambar)
        <img src="{{ asset('storage/'.$berita->gambar) }}"
                width="200"
                class="mb-3">
    @endif

    <div class="mb-3">
        <label>Ganti Gambar</label>

        <input type="file"
                name="gambar"
                class="form-control">
    </div>

    <button class="btn btn-primary">
        Update
    </button>

</form>

@endsection
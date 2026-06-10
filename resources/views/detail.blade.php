@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            @if($berita->gambar)

            <img
                src="{{ asset('storage/'.$berita->gambar) }}"
                class="img-fluid rounded shadow mb-4 w-100"
                style="max-height:500px; object-fit:cover;">

            @endif

            <h1 class="fw-bold mb-3">

                {{ $berita->judul }}

            </h1>

            <p class="text-muted mb-4">

                Ditulis oleh

                <strong>{{ $berita->user->name }}</strong>

                •

                {{ $berita->created_at->format('d F Y') }}

            </p>

            <div class="card border-0 shadow-sm">

                <div class="card-body">

                    {!! nl2br(e($berita->isi)) !!}

                </div>

            </div>

            <a href="/"
                class="btn btn-secondary mt-4">

                ← Kembali ke Beranda

            </a>

        </div>

    </div>

</div>

@endsection
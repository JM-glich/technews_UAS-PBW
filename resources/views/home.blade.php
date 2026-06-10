@extends('layouts.app')

@section('content')

@php
use Illuminate\Support\Str;
@endphp

<div class="container">

    <!-- Hero -->
    <div class="hero-section text-white p-5 rounded shadow mb-5">

        <h1 class="display-4 fw-bold">
            TechNews Indonesia
        </h1>

        <p class="lead">
            Portal berita teknologi terbaru seputar AI,
            software, gadget, startup, cyber security,
            dan inovasi digital.
        </p>

        <a href="#berita"
            class="btn btn-primary btn-lg">
            Jelajahi Berita
        </a>

    </div>

    <!-- Search -->
    <form method="GET" action="/" class="mb-4">

        <div class="input-group">

            <input type="text"
                    name="search"
                    class="form-control"
                    placeholder="Cari berita teknologi...">

            <button class="btn btn-dark">
                Cari
            </button>

        </div>

    </form>

    <!-- Statistik -->
    <div class="row text-center mb-5">

        <div class="col-md-4">
            <h3 class="fw-bold">{{ $beritas->total() }}</h3>
            <p class="text-muted">Artikel</p>
        </div>

        <div class="col-md-4">
            <h3 class="fw-bold">AI</h3>
            <p class="text-muted">Topik Utama</p>
        </div>

        <div class="col-md-4">
            <h3 class="fw-bold">{{ date('Y') }}</h3>
            <p class="text-muted">Update Terbaru</p>
        </div>

    </div>

    <h2 id="berita" class="fw-bold mb-4">
        Berita Teknologi Terbaru
    </h2>

    <div class="row">

        @forelse($beritas as $berita)

        <div class="col-lg-4 col-md-6 mb-4">

            <div class="card border-0 shadow-sm h-100 news-card">

                @if($berita->gambar)

                <img
                    src="{{ asset('storage/'.$berita->gambar) }}"
                    class="card-img-top"
                    style="height:220px; object-fit:cover;">

                @endif

                <div class="card-body d-flex flex-column">

                    <h5 class="fw-bold">
                        {{ $berita->judul }}
                    </h5>

                    <p class="text-muted small">

                        {{ $berita->user->name }}

                        •

                        {{ $berita->created_at->format('d M Y') }}

                    </p>

                    <p class="text-muted flex-grow-1">

                        {{ Str::limit(strip_tags($berita->isi), 120) }}

                    </p>

                    <a href="/detail/{{ $berita->slug }}"
                        class="btn btn-dark">

                        Baca Selengkapnya

                    </a>

                </div>

            </div>

        </div>

        @empty

        <div class="col-12">

            <div class="alert alert-info">

                Belum ada berita yang dipublikasikan.

            </div>

        </div>

        @endforelse

    </div>

    <div class="d-flex justify-content-center mt-4">

        {{ $beritas->links() }}

    </div>

</div>

@endsection
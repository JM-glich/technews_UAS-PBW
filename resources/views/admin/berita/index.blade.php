@extends('layouts.admin')

@section('content')

@if(session('success'))

<div class="alert alert-success alert-dismissible fade show" role="alert">

    {{ session('success') }}

    <button type="button"
            class="btn-close"
            data-bs-dismiss="alert">
    </button>

</div>

@endif

<!-- Statistik -->
<div class="card shadow-sm border-0 mb-4">

    <div class="card-body">

        <h6 class="text-muted mb-1">
            Total Berita
        </h6>

        <h2 class="fw-bold mb-0">
            {{ $beritas->total() }}
        </h2>

    </div>

</div>

<!-- Header -->
<div class="d-flex justify-content-between align-items-center mb-4">

    <h2 class="fw-bold">
        Data Berita
    </h2>

    <a href="{{ route('berita.create') }}"
        class="btn btn-primary">
        + Tambah Berita
    </a>

</div>

<!-- Search -->
<div class="card shadow-sm border-0 mb-4">

    <div class="card-body">

        <form action="{{ route('berita.index') }}"
            method="GET">

            <div class="input-group">

                <input
                    type="text"
                    name="keyword"
                    class="form-control"
                    placeholder="Cari judul berita..."
                    value="{{ request('keyword') }}">

                <button class="btn btn-dark">

                    Cari

                </button>

            </div>

        </form>

    </div>

</div>

<!-- Tabel -->
<div class="card shadow-sm border-0">

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-hover align-middle">

                <thead class="table-dark">

                    <tr>

                        <th width="60">No</th>

                        <th width="120">
                            Gambar
                        </th>

                        <th>
                            Judul
                        </th>

                        <th width="150">
                            Penulis
                        </th>

                        <th width="150">
                            Tanggal
                        </th>

                        <th width="180">
                            Aksi
                        </th>

                    </tr>

                </thead>

                <tbody>

                @forelse($beritas as $berita)

                    <tr>

                        <td>

                            {{ $loop->iteration }}

                        </td>

                        <td>

                            @if($berita->gambar)

                                <img
                                    src="{{ asset('storage/'.$berita->gambar) }}"
                                    width="100"
                                    class="rounded">

                            @else

                                <span class="text-muted">

                                    Tidak ada

                                </span>

                            @endif

                        </td>

                        <td>

                            <strong>

                                {{ $berita->judul }}

                            </strong>

                        </td>

                        <td>

                            {{ $berita->user->name }}

                        </td>

                        <td>

                            {{ $berita->created_at->format('d M Y') }}

                        </td>

                        <td>

                            <a href="{{ route('berita.edit', $berita) }}"
                                class="btn btn-warning btn-sm">

                                Edit

                            </a>

                            <form
                                action="{{ route('berita.destroy', $berita) }}"
                                method="POST"
                                class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus berita ini?')">

                                    🗑 Hapus

                                </button>

                            </form>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="6"
                            class="text-center text-muted py-4">

                            Belum ada berita.

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

<!-- Pagination -->
<div class="mt-4 d-flex justify-content-center">

    {{ $beritas->withQueryString()->links() }}

</div>

@endsection
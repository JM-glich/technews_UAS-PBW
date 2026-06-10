<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            Dashboard Admin
        </h2>
    </x-slot>

    <div class="py-5">

        <div class="container">

            <div class="row">

                <div class="col-md-6">

                    <div class="card shadow-sm">

                        <div class="card-body text-center">
                            <h5>Total Berita</h5>
                            <h1>{{ \App\Models\Berita::count() }}</h1>
                        </div>

                    </div>
                </div>

                <div class="col-md-6">

                    <div class="card shadow-sm">

                        <div class="card-body text-center">

                            <h5>Total Penulis</h5>

                            <h1>{{ \App\Models\User::count() }}</h1>

                        </div>

                    </div>

                </div>

            </div>

            <div class="mt-4">

                <a href="{{ route('berita.index') }}"
                    class="btn btn-primary">

                    Kelola Berita

                </a>

            </div>

        </div>

    </div>

</x-app-layout>
<x-guest-layout>

    <h3 class="text-center mb-4">
        Registrasi Administrator
    </h3>

    <form method="POST" action="{{ route('register') }}">

        @csrf

        <div class="mb-3">

            <label class="form-label">
                Nama Lengkap
            </label>

            <input
                type="text"
                name="name"
                value="{{ old('name') }}"
                class="form-control"
                required
                autofocus>

            @error('name')

                <div class="text-danger mt-1">

                    {{ $message }}

                </div>

            @enderror

        </div>

        <div class="mb-3">

            <label class="form-label">
                Email
            </label>

            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                class="form-control"
                required>

            @error('email')

                <div class="text-danger mt-1">

                    {{ $message }}

                </div>

            @enderror

        </div>

        <div class="mb-3">

            <label class="form-label">
                Password
            </label>

            <input
                type="password"
                name="password"
                class="form-control"
                required>

            @error('password')

                <div class="text-danger mt-1">

                    {{ $message }}

                </div>

            @enderror

        </div>

        <div class="mb-3">

            <label class="form-label">
                Konfirmasi Password
            </label>

            <input
                type="password"
                name="password_confirmation"
                class="form-control"
                required>

        </div>

        <button
            type="submit"
            class="btn btn-success w-100">

            Daftar

        </button>

        <div class="text-center mt-3">

            <a href="{{ route('login') }}">

                Sudah punya akun? Login

            </a>

        </div>

        <div class="text-center mt-3">

            <a href="/"
                class="btn btn-outline-secondary">

                ← Kembali ke Beranda

            </a>

        </div>

    </form>

</x-guest-layout>
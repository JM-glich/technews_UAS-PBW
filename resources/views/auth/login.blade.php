<x-guest-layout>

    @if(session('status'))

        <div class="alert alert-success">

            {{ session('status') }}

        </div>

    @endif

    <h3 class="text-center mb-4">
        Login Administrator
    </h3>

    <form method="POST" action="{{ route('login') }}">

        @csrf

        <div class="mb-3">

            <label class="form-label">
                Email
            </label>

            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                class="form-control"
                required
                autofocus>

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

        <div class="form-check mb-3">

            <input
                class="form-check-input"
                type="checkbox"
                name="remember"
                id="remember">

            <label
                class="form-check-label"
                for="remember">

                Remember Me

            </label>

        </div>

        <button
            type="submit"
            class="btn btn-primary w-100">

            Login

        </button>

        @if(Route::has('password.request'))

            <div class="text-center mt-3">

                <a href="{{ route('password.request') }}">

                    Lupa Password?

                </a>

            </div>

        @endif

    </form>

</x-guest-layout>
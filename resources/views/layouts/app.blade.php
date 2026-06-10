<!DOCTYPE html>
<html>
<head>
    <title>TechNews</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet">

    <style>

        body{
            background:#f8f9fa;
        }

        .news-card{
            transition:0.3s;
        }

        .news-card:hover{
            transform:translateY(-5px);
        }

        .hero-section{
            background:linear-gradient(
                135deg,
                #1f2937,
                #111827
            );
        }

    </style>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">

    <div class="container">

        <a class="navbar-brand fw-bold" href="/">
            TechNews
        </a>

        <div class="ms-auto">

            <a href="/"
                class="btn btn-outline-light me-2">
                Home
            </a>

            <a href="/login"
                class="btn btn-primary">
                Login Admin
            </a>

        </div>

    </div>

</nav>

<main class="py-4">

    @yield('content')

</main>

<footer class="bg-dark text-white mt-5">

    <div class="container text-center py-4">

        <h5>TechNews</h5>

        <p class="mb-0">
            Portal berita teknologi berbasis Laravel 10
        </p>

        <small>
            © 2026 TechNews. All Rights Reserved.
        </small>

    </div>

</footer>

</body>
</html>
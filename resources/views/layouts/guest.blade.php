<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TechNews Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <style>

        body{
            background:#f4f6f9;
        }

        .login-card{
            border:none;
            border-radius:15px;
            overflow:hidden;
        }

        .login-header{
            background:linear-gradient(
                135deg,
                #1f2937,
                #111827
            );
            color:white;
            padding:30px;
            text-align:center;
        }

    </style>

</head>

<body>

<div class="container">

    <div class="row justify-content-center align-items-center"
            style="min-height:100vh;">

        <div class="col-md-6 col-lg-5">

            <div class="card shadow login-card">

                <div class="login-header">

                    <h1 class="fw-bold">
                        📰 TechNews
                    </h1>

                    <p class="mb-0">
                        Panel Administrasi TechNews Indonesia
                    </p>
                </div>

                <div class="card-body p-4">

                    {{ $slot }}

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>
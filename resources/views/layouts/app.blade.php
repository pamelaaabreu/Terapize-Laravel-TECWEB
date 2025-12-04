<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Sistema Terapize')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f7fa;
            font-family: "Segoe UI", sans-serif;
        }

        .navbar {
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
        }

        .navbar .nav-link {
            transition: color .2s ease;
        }

        .navbar .nav-link:hover {
            color: #f8f9fa;
            opacity: .8;
        }

        h2,
        h3,
        h4 {
            letter-spacing: .5px;
        }

        .alert {
            animation: fadeInDown .5s ease;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-15px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        footer {
            padding: 20px;
            background: #ffffff;
            border-top: 1px solid #ddd;
            text-align: center;
            font-size: 14px;
            color: #555;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">
                <i class="bi bi-hospital-fill me-1"></i> Terapize
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pessoas.index') }}">
                            <i class="bi bi-people-fill me-1"></i> Pessoas
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pacientes.index') }}">
                            <i class="bi bi-heart-pulse-fill me-1"></i> Pacientes
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @if(session('success'))
        <div class="alert alert-success shadow-sm">
            <i class="bi bi-check-circle-fill me-1"></i>
            {{ session('success') }}
        </div>
        @endif


        @if($errors->any())
        <div class="alert alert-danger shadow-sm">
            <i class="bi bi-exclamation-triangle-fill me-1"></i> Existem erros no formulário:
            <ul class="mb-0 mt-2">
                @foreach($errors->all() as $erro)
                <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @yield('content')
    </div>


    <footer class="mt-auto">
        Sistema Terapize — {{ date('Y') }}
        <br>
        <span class="text-muted">
            Desenvolvido por
            <a href="https://www.linkedin.com/in/pamelavlabreu/" target="_blank" class="text-decoration-none">
                Pamela Abreu
            </a>
        </span>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

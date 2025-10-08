<!doctype html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darslar tizimi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">Darslar App</a>
            <div class="d-flex">
                @auth
                    <span class="navbar-text text-white me-3">{{ auth()->user()->name }}</span>
                    <form action="{{ route('logout') }}" method="POST">@csrf
                        <button class="btn btn-outline-light btn-sm">Chiqish</button>
                    </form>
                @endauth
            </div>
        </div>
    </nav>
    @yield('content')
</body>
</html>

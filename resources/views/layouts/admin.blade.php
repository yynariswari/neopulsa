<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel - NeoPulsa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/admin">NeoPulsa Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="adminNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="/admin" class="nav-link">Admin</a></li>
                    <li class="nav-item">
                      <a class="nav-link" href="/admin/log">Log Activity</a>
                    </li>
                    <a href="/" class="nav-link text-warning">Logout</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container mt-4">
        @yield('content')
    </main>
    <footer class="bg-light text-center py-3 mt-5">
    <small>&copy; {{ date('Y') }} NeoPulsa. All rights reserved.</small>
</footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

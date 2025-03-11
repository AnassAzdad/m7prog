<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mijn Laravel Website</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <!-- Header -->
        <header>
            <h1>Mijn Website</h1>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </nav>
        </header>

        <!-- Content -->
        <main>
            @yield('content')  <!-- Dit wordt vervangen door pagina-inhoud -->
        </main>

        <!-- Footer -->
        <footer>
            <p>&copy; 2025 Mijn Laravel Site. Alle rechten voorbehouden.</p>
        </footer>
    </div>
</body>
</html>

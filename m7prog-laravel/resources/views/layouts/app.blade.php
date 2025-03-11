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
        <header>
            <h1>Mijn Laravel Site</h1>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">Over Ons</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </nav>
        </header>
        
        <main>
            @yield('content')
        </main>
        
        <footer>
            <p>&copy; 2025 Mijn Laravel Site. Alle rechten voorbehouden.</p>
        </footer>
    </div>
</body>
</html>
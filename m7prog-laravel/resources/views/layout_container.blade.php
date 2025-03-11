<x-guest-layout>
    <div class="container">
        <!-- Header -->
        <header class="d-flex justify-content-between align-items-center py-3">
            <h1>Mijn Website</h1>
            <nav>
                <ul class="nav">
                    <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="/about" class="nav-link">Over</a></li>
                    <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
                </ul>
            </nav>
        </header>
        
        <!-- Content -->
        <main>
            @yield('content')
        </main>
        
        <!-- Footer -->
        <footer class="text-center py-3 mt-4">
            <p>&copy; {{ date('Y') }} Mijn Website. Alle rechten voorbehouden.</p>
        </footer>
    </div>
</x-guest-layout>
    
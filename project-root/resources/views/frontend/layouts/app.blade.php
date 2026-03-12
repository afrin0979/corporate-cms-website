<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | My Company</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<header>
    <div class="container">
        <div class="logo">My Company</div>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li><a href="{{ route('products') }}">Products</a></li>
                <li><a href="{{ route('blog.index') }}">Blog</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<main>
    @yield('content')
</main>

<footer>
    <div class="container">
        <p>&copy; {{ date('Y') }} My Company. All rights reserved.</p>
    </div>
</footer>

<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
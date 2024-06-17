<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TripCel App</title>
    <!-- Fonts -->
    @vite('resources/css/app.css')
</head>
<body class="body">
    <div class="page-wrapper">
        <main class="main-wrapper">
            {{ $slot }}
        </main>
    </div>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js" integrity="sha256-huW7yWl7tNfP7lGk46XE+Sp0nCotjzYodhVKlwaNeco=" crossorigin="anonymous"></script>

    @stack('page-scripts')
    @stack('page-scroll')
    @stack('page-benefits')
    @stack('page-reviews')


</body>
</html>

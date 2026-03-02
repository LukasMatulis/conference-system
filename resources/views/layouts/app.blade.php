<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('messages.app_name') }}</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body class="container mt-5">

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container-fluid">
            <span class="navbar-brand">{{ __('messages.app_name') }}</span>
            <div class="d-flex">
                <span class="me-3">{{ __('messages.logged_in_as') }} Lukas Matulis</span>
                <button class="btn btn-secondary" disabled>{{ __('messages.logout') }}</button>
            </div>
        </div>
    </nav>

    @yield('content')

</body>
</html>
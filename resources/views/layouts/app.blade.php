<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conference System</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body class="container mt-5">
    {{-- čia gali būti bendras navbar --}}
    
    @yield('content') {{-- čia bus įterptas kiekvieno puslapio turinys --}}
</body>
</html>
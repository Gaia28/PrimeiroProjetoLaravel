<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Minha Aplicação Laravel')</title>
</head>
<body>
    <script src="https://cdn.tailwindcss.com"></script>
    @yield('content')
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</body>
</html>
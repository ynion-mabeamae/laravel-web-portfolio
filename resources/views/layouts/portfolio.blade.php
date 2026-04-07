<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Ma. Bea Mae Ynion</title>
    <link rel="icon" href="{{ asset('images/bea.png') }}" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white font-[Quicksand] min-h-screen">

    <x-navbar />

    <main>
        @yield('content')
    </main>

    <x-footer />

</body>
</html> 
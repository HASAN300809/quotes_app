<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Quotes App</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <!-- Kalau kamu pakai Tailwind CSS, pastikan sudah di-compile di app.css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">

    <link rel="icon" type="image/png" href="{{ asset('storage/images/logo-quotesapp.png') }}">
    
</head>
<body class="bg-gradient-to-r from-blue-600 to-indigo-700 min-h-screen flex items-center justify-center">
    <div class="text-center text-white px-6 py-12">
        <div class="text-6xl mb-6 w-60 h-60 mx-auto"><img src="{{ asset('storage/images/logo-quotes-app.png') }}" alt=""></div>

        <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Welcome to Quotes App</h1>
        <p class="text-lg md:text-xl mb-6">Discover and share inspiring quotes every day!</p>

        <div class="space-x-4">
            @auth
                <a href="{{ route('dashboard') }}" class="bg-yellow-400 text-black px-6 py-2 rounded-full text-lg font-semibold shadow hover:bg-yellow-300 transition inline-block">
                    🚀 Enter Dashboard
                </a>
            @else
                <a href="{{ route('login') }}" class="bg-white text-blue-600 px-6 py-2 rounded-full text-lg font-semibold shadow hover:bg-gray-100 transition inline-block">
                    🔑 Login
                </a>
                <a href="{{ route('register') }}" class="bg-yellow-400 text-black px-6 py-2 rounded-full text-lg font-semibold shadow hover:bg-yellow-300 transition inline-block">
                    ✍️ Register
                </a>
            @endauth
        </div>
    </div>
</body>
</html>

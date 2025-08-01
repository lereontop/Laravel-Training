<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JOb</title>
    {{-- @vite(['reesources/js/app.js']) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#060606] text-white pb-15">
    <div class="px-10">
        <nav class="flex justify-between  items-center py-4 border-b border-white/10">
            <div>
                <a href="">
                     {{-- <img src="{{ Vite::assert('') }}" alt="">
                      --}}
                      logo
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="">Job</a>
                <a href="">Career</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
            </div>


            @auth

            <div>
                <a href="/jobs/create">Post Job</a>
            </div>

            @endauth

            @guest
            <div class="space-x-6 font-bold">
                <a href="/register">Register</a>
                <a href="/login">Login</a>

            </div>

            @endguest

        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>

</body>
</html>

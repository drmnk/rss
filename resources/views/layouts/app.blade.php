<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
    <title>RSS</title>
</head>

<body class="bg-slate-50">
    <div class="w-2/3 pt-4 flex justify-center mx-auto flex-col">
        <!-- Navbar -->
        <div class="bg-blue-600 w-full py-4 px-6 rounded-xl shadow-xl flex items-center justify-between text-white">
            <a href="/">
                <div class="text-3xl font-bold">&#11088; RSS</div>
            </a>
            <div class="">Login</div>
        </div>

        <!-- Content -->
        <div class="mt-8">
            @yield('content')
        </div>

    </div>

</body>


</html>

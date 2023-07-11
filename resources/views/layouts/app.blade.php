<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ben's Breads</title>
    <style>
        .bg-custom {
            background-image: url('{{ asset('images/bg-purple.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
    @vite('resources/css/app.css')
</head>

<body class="bg-custom">
    <nav class="bg-slate-300 bg-opacity-75 p-4 shadow-lg">
        <h1 class="text-4xl font-bold text-teal-900/75">Ben's Breads!</h1>
    </nav>
    @yield('content')

    <div class="left-0 bottom-0 w-full bg-slate-300 bg-opacity-75 p-4 text-center shadow-lg">
        <div class="flex justify-center space-x-4">
            <a href="https://github.com/ionscion" target="_blank" rel="noreferrer">
                <img src="{{asset('images/github.svg')}}" alt="GitHub" class="w-6 h-6" />
            </a>
            <a href="https://linkedin.com/in/ben-sboto-4b0040276" target="_blank" rel="noreferrer">
                <img src="{{asset('images/linkedin.svg')}}" alt="LinkedIn" class="w-6 h-6" />
            </a>
            <a href="https://stackoverflow.com/users/21884108/ionscion" target="_blank" rel="noreferrer">
                <img src="{{asset('images/stack-overflow.svg')}}" alt="Stack Overflow" class="w-6 h-6" />
            </a>
        </div>
        <h6 class="text-gray-500">&copy; 2023 ionscion</h6>
    </div>
</body>

</html>

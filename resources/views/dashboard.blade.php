<!DOCTYPE html>
<html>

<head>
    <title>Laravel 10.48.0 - CRUD User Example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
</head>

<body>

    <body class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
        <header class="w-full bg-white py-4 border-b">
            <nav class="flex justify-center space-x-4">
                @guest
                <a href="{{ route('login') }}" class="text-black">Home</a>
                <a href="{{ route('login') }}" class="text-black">Đăng nhập</a>
                <a href="{{ route('user.createUser') }}" class="text-black">Đăng ký</a>
                @else
                <a href="{{ route('user.list') }}" class="text-black">Home</a>
                <a href="{{ route('signout') }}" class="text-black">Đăng xuất</a>
                @endguest
            </nav>
        </header>
        @yield('content')
    </body>

</html>
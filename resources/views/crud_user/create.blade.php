@extends('dashboard')

@section('content')
<main class="flex flex-col items-center justify-center flex-grow">
    <div class="bg-white p-8 rounded shadow-md w-96">
        <h2 class="text-center text-xl font-bold mb-6">Màn hình đăng
            ký</h2>
        <form method="POST" action="{{ route('user.postUser') }}">
            @csrf
            <div class="mb-4">
                <label for="username" class="block text-gray-700">Username</label>
                <input type="text" placeholder="Name" id="name" class="w-full px-3 py-2 border rounded" name="name" required
                    autofocus>
                @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="Email" placeholder="Email" id="email" class="w-full px-3 py-2 border rounded" name="email" required
                    autofocus>
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Mật khẩu</label>
                <input type="password" placeholder="Password" id="password" class="w-full px-3 py-2 border rounded" name="password" required>
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="mb-4 text-right">
                <a href="{{ route('login') }}" class="text-blue-500">Đã có tài khoản</a>
            </div>
            <div class="text-center">
                <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded">Đăng
                    ký</button>
            </div>
        </form>
    </div>
</main>

<footer class="w-full bg-white py-4 border-t">
    <div class="text-center text-gray-700">Nhom D</div>
</footer>
@endsection
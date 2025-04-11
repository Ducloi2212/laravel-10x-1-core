@extends('dashboard')

@section('content')
<main class="flex flex-col items-center justify-center flex-grow">
    <div class="bg-white p-8 rounded shadow-md w-96">
        <h2 class="text-center text-xl font-bold mb-6">Màn hình đăng
            nhập</h2>
        <form method="POST" action="{{ route('user.authUser') }}">
            @csrf
            <div class="mb-4">
                <label for="Email" class="block text-gray-700">Email</label>
                <input type="text" placeholder="Email" id="email" class="w-full px-3 py-2 border rounded" name="email" required
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
            <div class="mb-4 flex items-center">
                <input type="checkbox" id="remember" class="mr-2" />
                <label for="remember" class="text-gray-700">Nhớ mật khẩu</label>
            </div>
            <div class="mb-4 text-right">
                <a href="#" class="text-blue-500">Quên mật khẩu</a>
            </div>
            <div class="text-center">
                <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded">Đăng
                    nhập</button>
            </div>
        </form>
    </div>
</main>

<footer class="w-full bg-white py-4 border-t">
    <div class="text-center text-gray-700">Nhom D</div>
</footer>
@endsection
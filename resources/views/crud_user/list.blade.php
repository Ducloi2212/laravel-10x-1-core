@extends('dashboard')

@section('content')
<main class="flex flex-col items-center justify-center flex-grow">

    <div class="w-full max-w-4xl bg-white shadow-md rounded-lg p-4">
        <h2 class="text-center text-xl font-bold mb-4">Danh sách
            user</h2>
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2">Id</th>
                    <th
                        class="border border-gray-300 px-4 py-2">Username</th>
                    <th
                        class="border border-gray-300 px-4 py-2">Email</th>
                    <th class="border border-gray-300 px-4 py-2">Thao
                        tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td
                        class="border border-gray-300 px-4 py-2 text-center">{{ $user->id }}</td>
                    <td
                        class="border border-gray-300 px-4 py-2 text-center">{{ $user->name }}</td>
                    <td
                        class="border border-gray-300 px-4 py-2 text-center">{{ $user->email }}</td>
                    <td
                        class="border border-gray-300 px-4 py-2 text-center">
                        <a href="{{ route('user.updateUser', ['id' => $user->id]) }}" class="text-blue-500">Edit</a> |
                        <a href="{{ route('user.readUser', ['id' => $user->id]) }}" class="text-blue-500">View</a> |
                        <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}" class="text-blue-500">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>

<footer class="w-full bg-white py-4 border-t">
    <div class="text-center text-gray-700">Nhom D</div>
</footer>

@endsection
@extends('dashboard')

@section('content')
<main class="flex-grow flex items-center justify-center">
        <div class="border p-8 rounded shadow-md">
            <h1 class="text-center mb-4">Màn hình chi tiết Role</h1>
            <div class="mb-2">
                <span class="font-semibold">ID: </span>
                <span class="ml-4">{{$role->id}}</span>
            </div>
            <div class="mb-4">
                <span class="font-semibold">Name: </span>
                <span class="ml-4">{{$role->name}}</span>
            </div>
        </div>
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2">Id</th>
                    <th
                        class="border border-gray-300 px-4 py-2">Username</th>
                    <th
                        class="border border-gray-300 px-4 py-2">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($role->users as $user)
                <tr>
                    <td
                        class="border border-gray-300 px-4 py-2 text-center">{{ $user->id }}</td>
                    <td
                        class="border border-gray-300 px-4 py-2 text-center">{{ $user->name }}</td>
                    <td
                        class="border border-gray-300 px-4 py-2 text-center">{{ $user->email }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>

    <div class="w-full border-t">
        <div class="flex justify-center py-2">
            <span>Nhom D</span>
        </div>
    </div>
@endsection
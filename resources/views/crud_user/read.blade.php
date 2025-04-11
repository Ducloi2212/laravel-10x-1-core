@extends('dashboard')

@section('content')
<main class="flex-grow flex items-center justify-center">
        <div class="border p-8 rounded shadow-md">
            <h1 class="text-center mb-4">Màn hình chi tiết</h1>
            <div class="mb-2">
                <span class="font-semibold">Username: </span>
                <span class="ml-4">{{$messi->name}}</span>
            </div>
            <div class="mb-4">
                <span class="font-semibold">Email: </span>
                <span class="ml-4">{{$messi->email}}</span>
            </div>
        </div>
    </main>

    <div class="w-full border-t">
        <div class="flex justify-center py-2">
            <span>Nhom D</span>
        </div>
    </div>
@endsection
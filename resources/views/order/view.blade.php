@extends('dashboard')

@section('content')
<main class="flex-grow flex items-center justify-center">
    <div class="border p-8 rounded shadow-md">
        <h1 class="text-center mb-4">Màn hình chi tiết Order</h1>
        <div class="mb-2">
            <span class="font-semibold">ID: </span>
            <span class="ml-4">{{$order->id}}</span>
        </div>
        <div class="mb-4">
            <span class="font-semibold">Tổng tiền: </span>
            <span class="ml-4">{{$order->total_amount}}</span>
        </div>
        <div class="mb-4">
            <span class="font-semibold">Địa chỉ: </span>
            <span class="ml-4">{{$order->address}}</span>
        </div>
    </div>
    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr>
                <th class="border border-gray-300 px-4 py-2">Id</th>
                <th
                    class="border border-gray-300 px-4 py-2">Name</th>
                <th
                    class="border border-gray-300 px-4 py-2">Image</th>
                <th
                    class="border border-gray-300 px-4 py-2">Price</th>
                <th
                    class="border border-gray-300 px-4 py-2">Quantity</th>
                <th
                    class="border border-gray-300 px-4 py-2">description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order->products as $product)
            <tr>
                <td
                    class="border border-gray-300 px-4 py-2 text-center">{{ $product->id }}</td>
                <td
                    class="border border-gray-300 px-4 py-2 text-center">{{ $product->name }}</td>
                <td
                    class="border border-gray-300 px-4 py-2 text-center">{{ $product->image }}</td>
                <td
                    class="border border-gray-300 px-4 py-2 text-center">{{ $product->price }}</td>
                <td
                    class="border border-gray-300 px-4 py-2 text-center">{{ $product->quantity }}</td>
                <td
                    class="border border-gray-300 px-4 py-2 text-center">{{ $product->description }}</td>
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
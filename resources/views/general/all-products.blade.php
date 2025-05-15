@extends('layouts.app')
@section('app-title', 'Favour Online: All Produces')

@section('app-content')

    <div class="bg-gray-100 p-6 mt-10 lg:mt-20">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-3xl font-bold mb-6">All Products</h1>

            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($products as $product)
                    <div class="bg-white p-4 rounded shadow">
                        <img src="{{ $product['thumbnail_url'] }}" alt="{{ $product['name'] }}"
                            class="w-full h-48 object-cover rounded mb-4">

                        <h2 class="text-lg font-semibold">{{ $product['name'] }}</h2>
                        <div class="flex items-center justify-between">

                            @if (isset($product['sync_variants'][0]['retail_price']))
                                <p class="text-gray-700 mt-2">Price: ${{ $product['sync_variants'][0]['retail_price'] }}</p>
                            @else
                                <p class="text-gray-700 mt-2">Price: N/A</p>
                            @endif

                            <form method="POST" class="mt-4">
                                {{-- action="{{ route('order.now') }}" --}}
                                @csrf
                                <input type="hidden" name="variant_id">
                                {{-- value="{{ $product['sync_variants'][0]['variant_id'] }}" --}}
                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                                    Order Now
                                </button>
                            </form>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection

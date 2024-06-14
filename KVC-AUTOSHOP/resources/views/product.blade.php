@extends('layouts.main')

@section('content')
<section class="flex-col flex py-20 px-10">
    <div class="flex justify-center">
        <h1 class="text-4xl font-oswald font-bold text-white">Paint</h1>
    </div>
    <div class="flex md:flex-row flex-col flex-wrap">
        @php
            $products = [
                ['name' => 'Easicoat', 'image' => './cat/cat1.png', 'price' => '2,720K'],
                ['name' => 'Kardiac', 'image' => './cat/cat2.png', 'price' => '2,720K'],
                ['name' => 'danagloss', 'image' => './cat/cat3.png', 'price' => '2,720K'],
                ['name' => 'AeroPak', 'image' => './cat/cat4.png', 'price' => '1,890k'],
                ['name' => 'Rust Oleum', 'image' => './cat/cat5.png', 'price' => '1,890k'],
                ['name' => 'Duplicolor', 'image' => './cat/cat6.png', 'price' => '225K']
            ];
        @endphp

        @foreach ($products as $product)
        <div class="relative m-10 flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md">
            <a class="relative mt-3 flex h-60 overflow-hidden rounded-xl" href="#">
                <img class="object-cover" src="{{ $product['image'] }}" alt="product image" />
            </a>
            <div class="mt-4 flex flex-col h-full justify-between px-5 pb-5">
                <div>
                    <a href="#">
                        <h5 class="text-xl tracking-tight text-slate-900">{{ $product['name'] }}</h5>
                    </a>
                    <div class="mt-2 mb-5 flex items-center justify-between">
                        <p>
                            <span class="text-3xl font-bold text-slate-900">Rp. {{ $product['price'] }}</span>
                        </p>
                    </div>
                </div>
                <div>
                    @if(auth()->check())
                        <form method="POST" action="{{ route('cart.add') }}">
                            @csrf
                            <input type="hidden" name="name" value="{{ $product['name'] }}">
                            <input type="hidden" name="image" value="{{ $product['image'] }}">
                            <input type="hidden" name="price" value="{{ $product['price'] }}">
                            <button type="submit" class="flex items-center justify-center w-full rounded-md dark:bg-slate-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                Add to cart
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="flex items-center justify-center w-full rounded-md dark:bg-slate-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            Login to buy
                        </a>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="flex justify-center">
        <h1 class="text-4xl font-oswald font-bold text-white">Oil</h1>
    </div>
    <div class="flex md:flex-row flex-col flex-wrap">
        @php
            $oils = [
                ['name' => 'Rimura R4', 'image' => './oli/oli1.jpg', 'price' => '689k'],
                ['name' => 'Titan Fuch', 'image' => './oli/oli2.jpg', 'price' => '299k'],
                ['name' => 'Pertamina Fastron', 'image' => './oli/oli3.jpg', 'price' => '216K'],
                ['name' => 'Pertamina Fastron gold', 'image' => './oli/oli4.jpg', 'price' => '571,5K'],
                ['name' => 'Rust Oleum', 'image' => './oli/oli5.png', 'price' => '1,890k'],
                ['name' => 'Duplicolor', 'image' => './oli/oli6.png', 'price' => '332K']
            ];
        @endphp

        @foreach ($oils as $oil)
        <div class="relative m-10 flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md">
            <a class="relative mt-3 flex h-60 overflow-hidden rounded-xl " href="#">
                <img class="object-cover" src="{{ $oil['image'] }}" alt="product image" />
            </a>
            <div class="mt-4 flex flex-col h-full justify-between px-5 pb-5">
                <div>
                    <a href="#">
                        <h5 class="text-xl tracking-tight text-slate-900">{{ $oil['name'] }}</h5>
                    </a>
                    <div class="mt-2 mb-5 flex items-center justify-between">
                        <p>
                            <span class="text-3xl font-bold text-slate-900">Rp. {{ $oil['price'] }}</span>
                        </p>
                    </div>
                </div>
                <div>
                    @if(auth()->check())
                        <form method="POST" action="{{ route('cart.add') }}">
                            @csrf
                            <input type="hidden" name="name" value="{{ $oil['name'] }}">
                            <input type="hidden" name="image" value="{{ $oil['image'] }}">
                            <input type="hidden" name="price" value="{{ $oil['price'] }}">
                            <button type="submit" class="flex items-center justify-center w-full rounded-md dark:bg-slate-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                Add to cart
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="flex items-center justify-center w-full rounded-md dark:bg-slate-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            Login to buy
                        </a>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection

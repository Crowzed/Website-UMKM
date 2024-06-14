@extends('layouts.main')

@section('content')
<section class="flex-col flex py-20 px-10 h-screen">
    <div class="flex justify-center mb-10">
        <h1 class="text-4xl font-oswald font-bold text-white">Shopping Cart</h1>
    </div>
    <div class="flex flex-col items-center">
        @if(Session::has('cart') && count(Session::get('cart')) > 0)
            @foreach(Session::get('cart') as $product)
                <div class="flex md:flex-row flex-col items-center justify-between w-full max-w-4xl mb-5 border-b border-gray-200 pb-5">
                    <div class="flex items-center">
                        <img src="{{ $product['image'] }}" alt="product image" class="object-cover h-20 w-20 rounded-xl" />
                        <div class="ml-4 text-slate-900 dark:text-gray-300">
                            <h5 class="text-xl font-bold ">{{ $product['name'] }}</h5>
                            <p class="">{{ $product['price'] }}</p>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('remove_from_cart') }}">
                        @csrf
                        <input type="hidden" name="name" value="{{ $product['name'] }}">
                        <button type="submit" class="ml-4 rounded-md outline bg-red-500 px-5 py-2.5 text-sm font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-4 focus:ring-red-300">
                            Remove
                        </button>
                    </form>
                </div>
            @endforeach
            <div class="mt-10">
                <a href="" class="rounded-md bg-slate-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                    Proceed to Checkout
                </a>
            </div>
        @else
            <p class="text-xl text-slate-900">Your cart is empty.</p>
        @endif
    </div>
</section>
@endsection

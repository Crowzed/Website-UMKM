@extends('layouts.main')
@section('content')
<section id="form" class="flex justify-center items-center py-12 z-10 h-screen">
    <div class="max-w-3xl w-full backdrop-blur p-8 rounded-lg shadow-lg">
        <h2 class="text-3xl font-semibold mb-6 text-center">Get in Touch</h2>
        <p class="text-center mb-8">We're here to help. Fill out the form below and we'll get back to you as soon as possible.</p>
        @auth
        <form action="/contact" method="POST" class="space-y-6">
            <div class="flex flex-col">
                <label for="name" class="mb-2 font-semibold">Name</label>
                <input type="text" id="name" name="name" class="px-4 py-2 rounded bg-gray-800 border border-gray-700 focus:ring focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div class="flex flex-col">
                <label for="email" class="mb-2 font-semibold">Email</label>
                <input type="email" id="email" name="email" class="px-4 py-2 rounded bg-gray-800 border border-gray-700 focus:ring focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div class="flex flex-col">
                <label for="subject" class="mb-2 font-semibold">Subject</label>
                <input type="text" id="subject" name="subject" class="px-4 py-2 rounded bg-gray-800 border border-gray-700 focus:ring focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div class="flex flex-col">
                <label for="message" class="mb-2 font-semibold">Message</label>
                <textarea id="message" name="message" rows="6" class="px-4 py-2 rounded bg-gray-800 border border-gray-700 focus:ring focus:ring-blue-500 focus:border-blue-500"></textarea>
            </div>
            <div class="flex justify-center">
                <button type="submit" class="px-6 py-2 bg-blue-600 rounded hover:bg-blue-700 transition-colors duration-300 btn-info btn btn-outline">Send Message</button>
            </div>
        </form>
        @else
        <div class="max-w-lg mx-auto bg-gray-800 p-8 rounded-lg shadow-lg drop-shadow-lg drops text-center">
                <p class="text-white">Please <a href="{{ route('login') }}" class="text-blue-500">login</a> to send a message.</p>
        </div>
        @endauth
    </div>
</section>

@endsection
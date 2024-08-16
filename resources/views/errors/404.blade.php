@extends('components.layout')

@section('content')
    <section class="py-16 text-center">
        <div class="container mx-auto max-w-screen-lg">
            <!-- Main Title -->
            <h1 class="text-5xl font-bold mb-8 text-brass">Page Not Found</h1>

            <!-- Content Wrapper with White Background -->
            <div class="bg-white p-8 rounded-lg shadow-xl border border-gray-300 mx-auto max-w-2xl">
                <!-- Description -->
                <p class="text-lg text-dark-gray leading-relaxed mb-8">
                    Sorry, the page you are looking for does not exist. It might have been moved or deleted.
                </p>

                <!-- Back to Home Button -->
                <a href="{{ url('/') }}"
                    class="inline-block bg-brass text-navy py-3 px-6 rounded shadow-lg hover:bg-yellow-400 transition duration-300">
                    Go Back Home
                </a>
            </div>
        </div>
    </section>
@endsection

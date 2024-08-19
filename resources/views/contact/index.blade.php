@extends('components.layout')

@section('content')
    <!-- Contact Header Section -->
    <section class="py-12 px-4 sm:px-6 text-center bg-beige">
        <div class="container mx-auto max-w-screen-lg">
            <div class="flex flex-col items-center justify-center">
                <!-- Decorative Icon -->
                <div class="w-12 h-12 mb-4 text-warm-gold" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-full h-full">
                        <path d="M2 4v16h20V4H2zm18 2l-8 5-8-5h16zm-16 12V8.494l8 4.992 8-4.992V18H4z" />
                    </svg>
                </div>
                <h1 class="text-3xl font-bold text-dark-gray mb-2">Contact Me</h1>
                <p class="text-md text-dark-gray mb-6">I'm here to help and answer any questions you might have. Feel free
                    to reach out!</p>
                <p class="text-lg font-semibold text-warm-gold">miriamaraujoweb@gmail.com</p>
            </div>
        </div>
    </section>


    <!-- Contact Form Section -->
    <section class="py-12" id="form-section">
        <div class="container mx-auto max-w-screen-lg">
            <div class="bg-beige p-8 rounded-lg shadow-xl border border-gray-300">
                <!-- Decorative Line -->
                <div class="w-12 h-1 bg-brass mx-auto mb-6 rounded"></div>
                <h2 class="text-3xl font-bold text-dark-gray mb-8 text-center">Get in Touch</h2>

                <!-- Success Message -->
                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6" role="alert"
                        aria-live="polite">
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif

                <!-- Error Messages -->
                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6" role="alert"
                        aria-live="polite">
                        <ul class="list-disc pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Contact Form -->
                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-lg font-semibold text-dark-gray">Name</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                aria-required="true"
                                class="w-full mt-2 p-3 rounded-lg border border-gray-300 focus:border-brass focus:ring-brass text-dark-gray bg-white">
                        </div>
                        <div>
                            <label for="email" class="block text-lg font-semibold text-dark-gray">Email</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                aria-required="true"
                                class="w-full mt-2 p-3 rounded-lg border border-gray-300 focus:border-brass focus:ring-brass text-dark-gray bg-white">
                        </div>
                    </div>
                    <div>
                        <label for="message" class="block text-lg font-semibold text-dark-gray">Message</label>
                        <textarea id="message" name="message" rows="6" required aria-required="true"
                            class="w-full mt-2 p-3 rounded-lg border border-gray-300 focus:border-brass focus:ring-brass text-dark-gray bg-white">{{ old('message') }}</textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit"
                            class="bg-brass text-navy py-3 px-6 rounded shadow-lg hover:bg-yellow-400 transition duration-300">Send
                            Message</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

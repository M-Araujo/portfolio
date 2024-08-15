@extends('components.layout')

@section('content')
    <!-- Contact Header Section -->
    <section class="py-16 bg-beige text-center">
        <div class="container mx-auto max-w-screen-lg">
            <div class="flex flex-col items-center justify-center">
                <!-- Decorative Icon -->
                <div class="w-16 h-16 mb-4 text-warm-gold">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-full h-full">
                        <path d="M2 4v16h20V4H2zm18 2l-8 5-8-5h16zm-16 12V8.494l8 4.992 8-4.992V18H4z" />
                    </svg>
                </div>
                <h1 class="text-4xl font-bold text-dark-gray mb-2">Contact Me</h1>
                <p class="text-lg text-dark-gray mb-6">I'm here to help and answer any questions you might have. Feel free to
                    reach out!</p>
                <p class="text-2xl font-semibold text-warm-gold">info@example.com</p>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-16" id="form-section">
        <div class="container mx-auto max-w-screen-lg">
            <div class="bg-beige p-8 rounded-lg shadow-xl border border-gray-300">
                <!-- Decorative Line -->
                <div class="w-12 h-1 bg-brass mx-auto mb-6 rounded"></div>
                <h2 class="text-4xl font-bold text-dark-gray mb-8 text-center">Get in Touch</h2>

                <!-- Contact Form -->
                <form action="" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-lg font-semibold text-dark-gray">Name</label>
                            <input type="text" id="name" name="name" required
                                class="w-full mt-2 p-3 rounded-lg border border-gray-300 focus:border-brass focus:ring-brass">
                        </div>
                        <div>
                            <label for="email" class="block text-lg font-semibold text-dark-gray">Email</label>
                            <input type="email" id="email" name="email" required
                                class="w-full mt-2 p-3 rounded-lg border border-gray-300 focus:border-brass focus:ring-brass">
                        </div>
                    </div>
                    <div>
                        <label for="message" class="block text-lg font-semibold text-dark-gray">Message</label>
                        <textarea id="message" name="message" rows="6" required
                            class="w-full mt-2 p-3 rounded-lg border border-gray-300 focus:border-brass focus:ring-brass"></textarea>
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

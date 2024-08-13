@extends('components.layout')

@section('content')
    <section class="py-16 text-center">
        <div class="container mx-auto max-w-screen-lg">
            <div class="bg-beige p-8 rounded-lg shadow-xl border border-gray-300 mx-auto">
                <!-- Title at the Top -->
                <h2 class="text-4xl font-bold mb-8 text-dark-gray">{{ $project['title'] }}</h2>

                <div class="flex flex-col md:flex-row">
                    <!-- Main Image -->
                    <div class="w-full md:w-2/3 mb-4 md:mb-0 md:pr-4">
                        <a href="{{ url($project['image']) }}" data-fancybox="gallery" class="block">
                            <img src="{{ url($project['image']) }}" alt="{{ $project['title'] }}"
                                class="rounded-lg shadow-lg w-full h-auto object-cover transition duration-300 transform hover:scale-105 hover:shadow-xl">
                        </a>
                    </div>
                    <!-- Mosaic Gallery -->
                    <div class="w-full md:w-1/3 grid grid-cols-2 gap-4">
                        @foreach ($project['details']['images'] as $image)
                            <a href="{{ url($image) }}" data-fancybox="gallery" class="block">
                                <img src="{{ url($image) }}" alt="Gallery Image"
                                    class="rounded-lg shadow-lg w-full object-cover transition duration-300 transform hover:scale-105 hover:shadow-xl">
                            </a>
                        @endforeach
                    </div>
                </div>

                <!-- Description Section -->
                <div class="mt-8 text-left">
                    <h3 class="text-2xl font-semibold text-dark-gray mb-4">Project Description</h3>
                    <p class="text-lg text-dark-gray leading-relaxed mb-4">
                        {{ $project['description'] }}
                    </p>
                    <p class="text-lg text-dark-gray leading-relaxed">
                        This project was developed to demonstrate the capabilities of creating a dynamic and responsive web
                        application. The main focus was on delivering a seamless user experience while maintaining high
                        performance and accessibility standards.
                    </p>
                </div>

                <!-- Video Section -->
                @if (isset($project['details']['video']))
                    <div class="mt-8">
                        <h3 class="text-2xl font-semibold text-dark-gray mb-4">Project Video</h3>
                        <iframe class="w-full h-96 rounded-lg shadow-lg border border-gray-300"
                            src="{{ $project['details']['video'] }}" frameborder="0" allowfullscreen
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            sandbox="allow-scripts allow-same-origin allow-presentation">
                        </iframe>
                    </div>
                @endif

                <!-- Case Study Section -->
                <div class="mt-12 text-left">
                    <h3 class="text-2xl font-semibold text-dark-gray mb-4">Case Study</h3>
                    <div class="case-study-content bg-white p-6 rounded-lg shadow-md border border-gray-200">
                        <p class="text-lg text-dark-gray leading-relaxed mb-4">
                            {{ $project['details']['case_study']['text'] }}
                        </p>
                        <ul class="list-disc pl-6 text-lg text-dark-gray leading-relaxed mb-4">
                            @foreach ($project['details']['case_study']['key_points'] as $point)
                                <li><strong>{{ $point['title'] }}:</strong> {{ $point['content'] }}</li>
                            @endforeach
                        </ul>
                        <blockquote class="border-l-4 border-brass pl-4 text-lg text-dark-gray italic mb-4">
                            "{{ $project['details']['case_study']['quote'] }}"
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

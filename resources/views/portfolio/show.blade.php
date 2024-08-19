@extends('components.layout')

@section('content')
    <!-- Section -->
    <section class="py-16 text-center">
        <div class="container mx-auto max-w-screen-lg">

            <!-- Title Outside the Main Card -->
            <h1 class="text-4xl font-bold text-warm-gold mb-8" aria-label="Project Title">{{ $project['title'] }}</h1>

            <!-- Main Content Card -->
            <main role="main" class="p-8 rounded-lg mx-auto">
                <!-- Project Images -->
                <div class="flex flex-col md:flex-row">
                    <!-- Main Image -->
                    <div class="w-full md:w-2/3 mb-4 md:mb-0 md:pr-4">
                        <a href="{{ url($project['image']) }}" data-fancybox="gallery" class="block">
                            <img src="{{ url($project['image']) }}" alt="{{ $project['title'] }} main project image"
                                class="rounded-lg shadow-lg w-full h-auto object-cover transition duration-300 transform hover:scale-105 hover:shadow-xl">
                        </a>
                    </div>
                    <!-- Mosaic Gallery -->
                    <div class="w-full md:w-1/3 grid grid-cols-2 gap-2">
                        @foreach ($project['details']['images'] as $image)
                            <a href="{{ url($image) }}" data-fancybox="gallery" class="block">
                                <img src="{{ url($image) }}" alt="Gallery image of {{ $project['title'] }}"
                                    class="rounded-lg shadow-lg w-full h-32 object-cover object-center transition duration-300 transform hover:scale-105 hover:shadow-xl">
                            </a>
                        @endforeach
                    </div>
                </div>

                <!-- Description Section with Clearer Background -->
                <div class="mt-8 text-left bg-light-cream p-6 rounded-lg shadow-xl" role="region"
                    aria-labelledby="project-description">
                    <!-- Decorative Golden Line -->
                    <div class="w-12 h-1 bg-warm-gold mb-4 rounded mx-auto"></div>
                    <h3 id="project-description" class="text-2xl font-semibold text-dark-gray mb-4 text-center">Project
                        Description</h3>
                    <p class="text-lg text-dark-gray leading-relaxed mb-4">
                        {{ $project['description'] }}
                    </p>

                </div>

                <!-- Video Section -->
                @if (isset($project['details']['video']))
                    <div class="mt-12 text-left bg-light-cream p-6 rounded-lg shadow-xl" role="region"
                        aria-labelledby="project-video">
                        <!-- Decorative Golden Line -->
                        <div class="w-12 h-1 bg-warm-gold mb-4 rounded mx-auto"></div>
                        <h3 id="project-video" class="text-2xl font-semibold text-dark-gray mb-4 text-center">Project Video
                        </h3>
                        <iframe class="w-full h-96 rounded-lg shadow-lg" src="{{ $project['details']['video'] }}"
                            frameborder="0" allowfullscreen
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            sandbox="allow-scripts allow-same-origin allow-presentation">
                        </iframe>
                    </div>
                @endif

                <!-- Case Study Section with Clearer Background -->
                <div class="mt-12 text-left bg-light-cream p-6 rounded-lg shadow-xl" role="region"
                    aria-labelledby="case-study">
                    <!-- Decorative Golden Line -->
                    <div class="w-12 h-1 bg-warm-gold mb-4 rounded mx-auto"></div>
                    <h3 id="case-study" class="text-2xl font-semibold text-dark-gray mb-4 text-center">Case Study</h3>
                    <div class="case-study-content">
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
            </main>
        </div>
    </section>
@endsection

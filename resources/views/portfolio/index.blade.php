@extends('components.layout')

@section('content')
    <!-- Hero Section -->
    <section class="portfolio-hero container mx-auto max-w-screen-lg text-center py-12">
        <h1 class="text-5xl font-bold text-brass mb-6">My Portfolio</h1>
        <p class="text-lg text-dark-gray leading-relaxed">Explore my work showcasing various projects in web development,
            including HTML, CSS, JavaScript, PHP, and more.</p>
    </section>

    <!-- Project Showcase -->
    <section class="portfolio-grid container mx-auto max-w-screen-lg py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            @if ($projects)
                @foreach ($projects as $project)
                    <div
                        class="portfolio-item bg-beige rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                        <div
                            class="portfolio-item bg-beige rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                            <img src="{{ url($project['details']['images'][0]) }}" alt="restaurant landing page"
                                class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h2 class="text-2xl font-bold text-navy mb-2">{{ $project['title'] }}</h2>
                                <p class="text-dark-gray leading-relaxed mb-4">{{ $project['description'] }}</p>
                                <a href="{{ url('portfolio/' . $project['id']) }}"
                                    class="inline-block bg-brass text-navy py-2 px-4 rounded shadow hover:bg-yellow-400 transition duration-300">View
                                    Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif




    </section>

    <!-- Call to Action -->
    <section
        class="cta-section container mx-auto max-w-screen-lg text-center py-12 bg-brass text-navy rounded-lg shadow-lg">
        <h2 class="text-4xl font-bold mb-4">Interested in Working Together?</h2>
        <p class="text-lg leading-relaxed mb-6">Contact me to discuss how we can collaborate on your next project.</p>
        <a href="#contact"
            class="inline-block bg-navy text-brass py-3 px-6 rounded shadow-lg hover:bg-dark-gray hover:text-beige transition duration-300">Get
            in Touch</a>
    </section>
@endsection

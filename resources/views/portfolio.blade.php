@extends('components.layout')

@section('content')
    <!-- Portfolio Introduction Section -->
    <section id="portfolio-intro" class="py-16 text-center">
        <div class="container mx-auto max-w-screen-lg">
            <h2 class="text-4xl font-bold mb-4 text-brass">My Portfolio</h2>
            <p class="text-lg text-dark-gray">Here are some case studies of projects I’ve worked on locally, showcasing
                my skills in frontend and backend development.</p>
        </div>
    </section>

    <!-- Portfolio Case Studies -->
    <section id="portfolio" class="py-16 px-4 md:px-8">
        <div class="container mx-auto max-w-screen-lg">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="portfolio-card bg-beige p-6 rounded-lg shadow-xl text-center border border-slate">
                    <img src="path-to-thumbnail.jpg" alt="Project Thumbnail" class="rounded-lg mb-4 mx-auto">
                    <h3 class="text-2xl font-semibold mb-4 text-navy">Project Title 1</h3>
                    <p class="text-navy mb-4">A brief description of the project, highlighting key features or
                        challenges overcome.</p>
                    <a href="#!"
                        class="inline-block bg-brass text-navy py-2 px-4 rounded shadow hover:bg-yellow-400">View
                        More</a>
                </div>
                <!-- Project 2 -->
                <div class="portfolio-card bg-beige p-6 rounded-lg shadow-xl text-center border border-slate">
                    <img src="path-to-thumbnail.jpg" alt="Project Thumbnail" class="rounded-lg mb-4 mx-auto">
                    <h3 class="text-2xl font-semibold mb-4 text-navy">Project Title 2</h3>
                    <p class="text-navy mb-4">A brief description of the project, highlighting key features or
                        challenges overcome.</p>
                    <a href="#!"
                        class="inline-block bg-brass text-navy py-2 px-4 rounded shadow hover:bg-yellow-400">View
                        More</a>
                </div>
                <!-- Project 3 -->
                <div class="portfolio-card bg-beige p-6 rounded-lg shadow-xl text-center border border-slate">
                    <img src="path-to-thumbnail.jpg" alt="Project Thumbnail" class="rounded-lg mb-4 mx-auto">
                    <h3 class="text-2xl font-semibold mb-4 text-navy">Project Title 3</h3>
                    <p class="text-navy mb-4">A brief description of the project, highlighting key features or
                        challenges overcome.</p>
                    <a href="#!"
                        class="inline-block bg-brass text-navy py-2 px-4 rounded shadow hover:bg-yellow-400">View
                        More</a>
                </div>
                <!-- Repeat as needed for more projects -->
            </div>
        </div>
    </section>
@endsection

@extends('components.layout')

@section('content')
    <section class="py-16 text-center">
        <div class="container mx-auto max-w-screen-lg">
            <!-- Title -->
            <h1 class="text-5xl font-bold mb-8 text-brass">About Me</h1>

            <!-- Timeline -->
            <div class="relative">
                <!-- Timeline Line -->
                <div class="border-l-4 border-brass absolute h-full top-0 left-1/2 transform -translate-x-1/2"></div>

                <!-- Timeline Item 1 -->
                <div class="mb-8 flex justify-between items-center w-full right-timeline fade-in-on-scroll"
                    style="transition-delay: 0.2s;">
                    <div class="order-1 w-5/12"></div>
                    <div class="order-1 w-5/12 px-1 py-4 text-left">
                        <div class="bg-beige p-6 rounded-lg shadow-xl border border-gray-300">
                            <div class="flex items-center">
                                <i class="fas fa-graduation-cap text-brass text-4xl mr-4"></i> <!-- Icon -->
                                <h3 class="text-2xl font-semibold text-dark-gray">Started my Web Development Journey at FLAG
                                </h3>
                            </div>
                            <p class="mt-4 text-lg text-dark-gray leading-relaxed">In 2016, I began my journey by taking a
                                full-stack course at FLAG where I learned the principles of HTML, CSS, JavaScript, and PHP.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Timeline Item 2 -->
                <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline fade-in-on-scroll"
                    style="transition-delay: 0.4s;">
                    <div class="order-1 w-5/12"></div>
                    <div class="order-1 w-5/12 px-1 py-4 text-right">
                        <div class="bg-beige p-6 rounded-lg shadow-xl border border-gray-300">
                            <div class="flex items-center justify-end">
                                <h3 class="text-2xl font-semibold text-dark-gray">Worked in Consulting Business</h3>
                                <i class="fas fa-briefcase text-brass text-4xl ml-4"></i> <!-- Icon -->
                            </div>
                            <p class="mt-4 text-lg text-dark-gray leading-relaxed">I spent a couple of years in the
                                consulting business, further honing my skills through diverse projects and real-world
                                challenges.</p>
                        </div>
                    </div>
                </div>

                <!-- Timeline Item 3 -->
                <div class="mb-8 flex justify-between items-center w-full right-timeline fade-in-on-scroll"
                    style="transition-delay: 0.6s;">
                    <div class="order-1 w-5/12"></div>
                    <div class="order-1 w-5/12 px-1 py-4 text-left">
                        <div class="bg-beige p-6 rounded-lg shadow-xl border border-gray-300">
                            <div class="flex items-center">
                                <i class="fas fa-laptop-code text-brass text-4xl mr-4"></i> <!-- Icon -->
                                <h3 class="text-2xl font-semibold text-dark-gray">Worked at a Digital Agency</h3>
                            </div>
                            <p class="mt-4 text-lg text-dark-gray leading-relaxed">For about four years, I contributed to a
                                variety of web projects at a digital agency, continuing to develop my skills.</p>
                        </div>
                    </div>
                </div>

                <!-- Timeline Item 4 -->
                <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline fade-in-on-scroll"
                    style="transition-delay: 0.8s;">
                    <div class="order-1 w-5/12"></div>
                    <div class="order-1 w-5/12 px-1 py-4 text-right">
                        <div class="bg-beige p-6 rounded-lg shadow-xl border border-gray-300">
                            <div class="flex items-center justify-end">
                                <h3 class="text-2xl font-semibold text-dark-gray">Forging My Own Path</h3>
                                <i class="fas fa-road text-brass text-4xl ml-4"></i> <!-- Icon -->
                            </div>
                            <p class="mt-4 text-lg text-dark-gray leading-relaxed">I am now hopeful to forge my own path in
                                web development, bringing my experience and dedication to new opportunities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Passion and Goals Section -->
    <section class="py-16 text-center">
        <div class="container mx-auto max-w-screen-lg">
            <div class="bg-beige p-8 rounded-lg shadow-xl border border-gray-300">

                <h2 class="text-4xl font-bold text-navy mb-6">My Vision & Goals</h2>
                <p class="text-xl text-dark-gray leading-relaxed tracking-wide">
                    My journey in web development is guided by a strong vision for creating seamless and functional digital
                    experiences. I'm motivated by the limitless possibilities that technology offers and the constant
                    evolution of this field. Every project I take on is an opportunity to learn, grow, and make a tangible
                    impact.

                    As I look to the future, I’m particularly interested in furthering my skills in areas like improving
                    website accessibility, refining responsive design, and exploring more about full-stack development. My
                    goal is to keep refining my skills, exploring practical solutions, and collaborating on projects that
                    are meaningful and align with my values. Whether it's developing a user-friendly app or creating a
                    simple, effective website, I'm committed to helping clients achieve their vision and succeed in the
                    digital world.
                </p>



            </div>
        </div>
    </section>

    <!-- Outside of Work Section -->
    <section class="py-16 text-center">
        <div class="container mx-auto max-w-screen-lg">
            <div class="bg-beige p-8 rounded-lg shadow-xl border border-gray-300">
                <div class="flex items-center justify-center">
                    <img src="{{ url('images/about/meditation.webp') }}" alt="Meditation"
                        class="w-24 h-24 mr-6 rounded-lg shadow-lg object-cover"> <!-- Image -->
                    <div class="text-left">
                        <h2 class="text-3xl font-bold text-navy mb-6">Outside of Work</h2>
                        <p class="text-xl text-dark-gray leading-relaxed tracking-wide">
                            When I’m not coding, I enjoy being a gym lover, which helps me stay physically active and
                            energized. I also have a passion for meditation and energy healing (Reiki), which keeps me
                            balanced and grounded, allowing me to maintain stability in both my work and personal life.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Add the fade-in animation using Tailwind CSS or custom CSS -->
    <style>
        .fade-in-on-scroll {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .fade-in-on-scroll.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>

    <!-- Intersection Observer Script for Scroll Trigger -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, {
                threshold: 0.1
            });

            document.querySelectorAll('.fade-in-on-scroll').forEach(item => {
                observer.observe(item);
            });
        });
    </script>
@endsection

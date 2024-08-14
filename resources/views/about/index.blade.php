@extends('components.layout')

@section('content')
    <section class="py-16 text-center">
        <div class="container mx-auto max-w-screen-lg">
            <!-- Main Title -->
            <h1 class="text-5xl font-bold mb-8 text-brass">About Me</h1>

            <!-- Timeline -->
            <div class="relative">
                <!-- Timeline Line -->
                <div class="border-l-4 border-brass absolute h-full top-0 left-1/2 transform -translate-x-1/2"></div>

                <!-- Timeline Items -->
                <article class="mb-8 flex justify-between items-center w-full right-timeline fade-in-on-scroll"
                    style="transition-delay: 0.2s;">
                    <div class="order-1 w-5/12"></div>
                    <div class="order-1 w-5/12 px-1 py-4 text-left" aria-labelledby="timeline-item-1">
                        <div class="bg-beige p-6 rounded-lg shadow-xl border border-gray-300">
                            <div class="flex items-center">
                                <i class="fas fa-graduation-cap text-brass text-4xl mr-4"></i>
                                <h3 id="timeline-item-1" class="text-2xl font-semibold text-dark-gray">Started my Web
                                    Development Journey at FLAG</h3>
                            </div>
                            <p class="mt-4 text-lg text-dark-gray leading-relaxed">In 2016, I began my journey by taking a
                                full-stack course at FLAG where I learned the principles of HTML, CSS, JavaScript, and PHP.
                            </p>
                        </div>
                    </div>
                </article>

                <article
                    class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline fade-in-on-scroll"
                    style="transition-delay: 0.4s;">
                    <div class="order-1 w-5/12"></div>
                    <div class="order-1 w-5/12 px-1 py-4 text-right" aria-labelledby="timeline-item-2">
                        <div class="bg-beige p-6 rounded-lg shadow-xl border border-gray-300">
                            <div class="flex items-center justify-end">
                                <h3 id="timeline-item-2" class="text-2xl font-semibold text-dark-gray">Worked in Consulting
                                    Business</h3>
                                <i class="fas fa-briefcase text-brass text-4xl ml-4"></i>
                            </div>
                            <p class="mt-4 text-lg text-dark-gray leading-relaxed">I spent a couple of years in the
                                consulting business, further honing my skills through diverse projects and real-world
                                challenges.</p>
                        </div>
                    </div>
                </article>

                <article class="mb-8 flex justify-between items-center w-full right-timeline fade-in-on-scroll"
                    style="transition-delay: 0.6s;">
                    <div class="order-1 w-5/12"></div>
                    <div class="order-1 w-5/12 px-1 py-4 text-left" aria-labelledby="timeline-item-3">
                        <div class="bg-beige p-6 rounded-lg shadow-xl border border-gray-300">
                            <div class="flex items-center">
                                <i class="fas fa-laptop-code text-brass text-4xl mr-4"></i>
                                <h3 id="timeline-item-3" class="text-2xl font-semibold text-dark-gray">Worked at a Digital
                                    Agency</h3>
                            </div>
                            <p class="mt-4 text-lg text-dark-gray leading-relaxed">For about four years, I contributed to a
                                variety of web projects at a digital agency, continuing to develop my skills.</p>
                        </div>
                    </div>
                </article>

                <article
                    class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline fade-in-on-scroll"
                    style="transition-delay: 0.8s;">
                    <div class="order-1 w-5/12"></div>
                    <div class="order-1 w-5/12 px-1 py-4 text-right" aria-labelledby="timeline-item-4">
                        <div class="bg-beige p-6 rounded-lg shadow-xl border border-gray-300">
                            <div class="flex items-center justify-end">
                                <h3 id="timeline-item-4" class="text-2xl font-semibold text-dark-gray">Forging My Own Path
                                </h3>
                                <i class="fas fa-road text-brass text-4xl ml-4"></i>
                            </div>
                            <p class="mt-4 text-lg text-dark-gray leading-relaxed">I am now hopeful to forge my own path in
                                web development, bringing my experience and dedication to new opportunities.</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Skills & Expertise Section -->
    <section class="py-16 text-center" aria-labelledby="skills-title">
        <div class="container mx-auto max-w-screen-lg">
            <div class="bg-beige p-8 rounded-lg shadow-xl border border-gray-300">
                <!-- Decorative Element -->
                <div class="w-12 h-1 bg-brass mx-auto mb-6 rounded"></div>
                <h1 id="skills-title" class="text-4xl font-bold mb-8 text-dark-gray">Skills & Expertise</h1>
                <!-- Reduced Font Size -->
                <p class="text-xl text-dark-gray leading-relaxed tracking-wide">
                    My web development journey has been centered on building websites that are clean, responsive, and easy
                    to use. I have a solid understanding of HTML, CSS, JavaScript, and PHP, and I’m dedicated to improving
                    my skills with each project I work on. While I’m continuously learning, I focus on making digital
                    experiences that are both functional and visually pleasing.
                </p>

                <p class="text-xl text-dark-gray leading-relaxed tracking-wide mt-4">
                    I pay special attention to responsive design and web accessibility, ensuring that the websites I create
                    are accessible to all users and adapt well to different devices. I enjoy taking on new challenges and
                    expanding my knowledge in web development.
                </p>

                <p class="text-xl text-dark-gray leading-relaxed tracking-wide mt-4">
                    Currently, I’m particularly interested in improving my skills in website performance, enhancing user
                    experience, and exploring more about full-stack development. My goal is to take on projects that help me
                    grow as a developer.
                </p>
            </div>



            <section class="py-12 mt-8 bg-light-cream p-8 rounded-lg shadow-xl border border-gray-300"
                aria-labelledby="skills-badges">
                <!-- Decorative Element -->
                <div class="w-12 h-1 bg-brass mx-auto mb-6 rounded"></div>
                <h2 id="skills-badges" class="text-3xl font-bold text-dark-gray mb-6">Languages & Frameworks</h2>
                <!-- Consistent title color -->
                <div class="flex flex-wrap justify-center space-x-4">
                    <span class="badge">HTML</span>
                    <span class="badge">CSS</span>
                    <span class="badge">JavaScript</span>
                    <span class="badge">PHP</span>
                    <span class="badge">Laravel</span>
                    <span class="badge">Bootstrap</span>
                    <span class="badge">Tailwind</span>
                    <span class="badge">jQuery</span>
                </div>
            </section>



            <!-- Specialties Section -->
            <div class="py-12 mt-8 bg-beige p-8 rounded-lg shadow-xl border border-gray-300"
                aria-labelledby="specialties-title">
                <!-- Decorative Element -->
                <div class="w-12 h-1 bg-brass mx-auto mb-6 rounded"></div>
                <h2 id="specialties-title" class="text-3xl font-bold text-dark-gray mb-6">Specialties</h2>
                <div>
                    <article class="mb-6">
                        <h3 class="text-2xl font-bold text-dark-gray">Responsive Design</h3>
                        <p class="text-lg text-dark-gray leading-relaxed mt-2">
                            I focus on making sure that websites look and function well on all devices. I use modern CSS
                            techniques and frameworks like Bootstrap and Tailwind to achieve this.
                        </p>
                    </article>

                    <article class="mb-6">
                        <h3 class="text-2xl font-bold text-dark-gray">Accessibility</h3>
                        <p class="text-lg text-dark-gray leading-relaxed mt-2">
                            Making the web accessible to everyone is important to me. I use best practices for web
                            accessibility, including proper use of ARIA attributes, semantic HTML, and testing with
                            assistive technologies.
                        </p>
                    </article>

                    <article>
                        <h3 class="text-2xl font-bold text-dark-gray">Performance Optimization</h3>
                        <p class="text-lg text-dark-gray leading-relaxed mt-2">
                            I work on optimizing website performance, making sure pages load quickly and efficiently by
                            optimizing images, minimizing CSS and JavaScript, and leveraging browser caching.
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Outside of Work Section -->
    <section class="py-16 text-center" aria-labelledby="outside-work-title">
        <div class="container mx-auto max-w-screen-lg">
            <div class="bg-beige p-8 rounded-lg shadow-xl border border-gray-300">
                <!-- Decorative Element -->
                <div class="w-12 h-1 bg-brass mx-auto mb-6 rounded"></div>
                <!-- Center Align Title -->
                <h2 id="outside-work-title" class="text-3xl font-bold text-dark-gray mb-6">Outside of Work</h2>
                <div class="flex items-center justify-center">
                    <img src="{{ url('images/about/meditation.webp') }}" alt="Meditation"
                        class="w-24 h-24 mr-6 rounded-lg shadow-lg object-cover">
                    <div class="text-left">
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

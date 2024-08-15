@extends('components.layout')

@section('content')
    <!-- Hero Section -->
    <header id="home"
        class="hero-bg text-beige text-center py-20 px-4 md:px-8 mx-auto max-w-screen-lg rounded-2xl shadow-lg mt-8 flex flex-col md:flex-row items-center justify-between">
        <!-- Animated Circles -->
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>

        <div class="hero-content w-full md:w-1/2">
            <img src="{{ url('/images/self.jpg') }}" alt="Miriam Araújo"
                class="rounded-full shadow-lg w-64 h-64 mx-auto md:mx-0">
        </div>
        <div class="hero-content w-full md:w-1/2 text-left mt-8 md:mt-0">
            <p class="text-xl font-light mb-4 text-dark-gray">Hi, I'm Miriam Araújo, a web developer dedicated to
                creating clean, efficient, and accessible code.</p>
            <h1 class="text-5xl font-bold text-dark-gray">Building Reliable and Responsive Websites</h1>
            <p class="text-lg mt-2 text-dark-gray">Delivering seamless digital experiences with a focus on quality, user
                engagement, and inclusivity.</p>
            <a href="/portfolio"
                class="inline-block mt-8 bg-brass text-navy py-3 px-6 rounded shadow hover:bg-yellow-400">View My
                Work</a>
        </div>
    </header>

    <hr class="border-t border-brass my-8">

    <!-- Competencies Section -->
    <section id="competencies" class="py-16 px-4 md:px-8">
        <div class="container mx-auto max-w-screen-lg">
            <h2 class="text-4xl font-bold text-center mb-12 text-brass">My Competencies</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div
                    class="competency-card bg-beige p-6 rounded-lg shadow-xl text-center border border-slate transition-transform duration-300 ease-in-out hover:bg-brass hover:text-white hover:scale-105">
                    <i class="devicon-html5-plain-wordmark colored w-24 h-24 text-6xl mx-auto"></i>
                    <h3 class="text-2xl font-semibold mb-4 text-navy">Frontend Development</h3>
                    <p class="text-navy">Comfortable working with HTML, CSS, and JavaScript to create responsive and
                        interactive UIs.</p>
                </div>

                <div
                    class="competency-card bg-beige p-6 rounded-lg shadow-xl text-center border border-slate transition-transform duration-300 ease-in-out hover:bg-brass hover:text-white hover:scale-105">
                    <i class="devicon-php-plain w-24 h-24 text-6xl text-purple-600 mx-auto"></i>
                    <h3 class="text-2xl font-semibold mb-4 text-navy">Backend Development</h3>
                    <p class="text-navy">With experience in PHP, MySQL, and Laravel, I focus on creating robust
                        server-side logic.</p>
                </div>

                <div
                    class="competency-card bg-beige p-6 rounded-lg shadow-xl text-center border border-slate transition-transform duration-300 ease-in-out hover:bg-brass hover:text-white hover:scale-105">
                    <i class="devicon-css3-plain w-24 h-24 text-6xl text-blue-600 mx-auto"></i>
                    <h3 class="text-2xl font-semibold mb-4 text-navy">Responsive Design</h3>
                    <p class="text-navy">Ensuring websites look great on all devices with modern design practices.</p>
                </div>

                <div
                    class="competency-card bg-beige p-6 rounded-lg shadow-xl text-center border border-slate transition-transform duration-300 ease-in-out hover:bg-brass hover:text-white hover:scale-105">
                    <i class="devicon-laravel-plain w-24 h-24 text-6xl text-red-600 mx-auto"></i>
                    <h3 class="text-2xl font-semibold mb-4 text-navy">API Integration</h3>
                    <p class="text-navy">Experience in integrating third-party APIs for seamless functionality.</p>
                </div>

                <div
                    class="competency-card bg-beige p-6 rounded-lg shadow-xl text-center border border-slate transition-transform duration-300 ease-in-out hover:bg-brass hover:text-white hover:scale-105">
                    <i class="fas fa-search w-24 h-24 text-6xl text-green-800 mx-auto mb-0"></i>
                    <h3 class="text-2xl font-semibold -mt-8 mb-4 text-navy">Search Engine Optimization (SEO)</h3>
                    <p class="text-navy">Focused on the optimization of websites for better visibility and ranking on
                        search engines.</p>
                </div>

                <div
                    class="competency-card bg-beige p-6 rounded-lg shadow-xl text-center border border-slate transition-transform duration-300 ease-in-out hover:bg-brass hover:text-white">
                    <i class="fas fa-universal-access text-6xl text-navy mx-auto"></i>
                    <h3 class="text-2xl font-semibold mt-2 text-navy">Web Accessibility (a11y)</h3>
                    <p class="text-navy">Ensuring websites are accessible to all users, including those with
                        disabilities.</p>
                </div>

            </div>
        </div>
    </section>

    <hr class="border-t border-brass my-8">

    <!-- Technologies Section -->
    <section id="technologies" class="py-16 px-4 md:px-8">
        <div class="container mx-auto max-w-screen-lg">
            <h2 class="text-4xl font-bold text-center mb-12 text-brass">Technologies</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div
                    class="competency-card bg-beige p-6 rounded-lg shadow-xl text-center border border-slate transition-transform duration-300 ease-in-out hover:bg-brass hover:text-white hover:scale-105">
                    <i class="devicon-html5-plain-wordmark colored w-28 h-28 text-7xl mx-auto"></i>
                    <h3 class="text-2xl font-semibold mt-6 text-navy">HTML5</h3>
                </div>
                <div
                    class="competency-card bg-beige p-6 rounded-lg shadow-xl text-center border border-slate transition-transform duration-300 ease-in-out hover:bg-brass hover:text-white hover:scale-105">
                    <i class="devicon-css3-plain-wordmark colored w-28 h-28 text-7xl mx-auto"></i>
                    <h3 class="text-2xl font-semibold mt-6 text-navy">CSS3</h3>
                </div>
                <div
                    class="competency-card bg-beige p-6 rounded-lg shadow-xl text-center border border-slate transition-transform duration-300 ease-in-out hover:bg-brass hover:text-white hover:scale-105">
                    <i class="devicon-javascript-plain colored w-28 h-28 text-7xl mx-auto"></i>
                    <h3 class="text-2xl font-semibold mt-6 text-navy">JavaScript</h3>
                </div>
                <div
                    class="competency-card bg-beige p-6 rounded-lg shadow-xl text-center border border-slate transition-transform duration-300 ease-in-out hover:bg-brass hover:text-white hover:scale-105">
                    <i class="devicon-php-plain colored w-28 h-28 text-7xl mx-auto"></i>
                    <h3 class="text-2xl font-semibold mt-6 text-navy">PHP</h3>
                </div>
                <div
                    class="competency-card bg-beige p-6 rounded-lg shadow-xl text-center border border-slate transition-transform duration-300 ease-in-out hover:bg-brass hover:text-white hover:scale-105">
                    <i class="devicon-laravel-plain-wordmark colored w-32 h-32 text-8xl mx-auto"></i>
                    <h3 class="text-2xl font-semibold -mt-0 text-navy">Laravel</h3>
                </div>
                <div
                    class="competency-card bg-beige p-6 rounded-lg shadow-xl text-center border border-slate transition-transform duration-300 ease-in-out hover:bg-brass hover:text-white hover:scale-105">
                    <i class="devicon-mysql-plain-wordmark colored w-28 h-28 text-7xl mx-auto"></i>
                    <h3 class="text-2xl font-semibold mt-6 text-navy">MySQL</h3>
                </div>
            </div>
        </div>
    </section>

    <hr class="border-t border-brass my-8">

    <!-- About Me Section -->
    <section id="about" class="py-16 text-center">
        <div class="container mx-auto max-w-screen-lg">
            <div class="bg-beige p-8 rounded-lg shadow-xl border border-gray-300 mx-auto max-w-3xl">
                <!-- Decorative Element -->
                <div class="w-12 h-1 bg-brass mx-auto mb-6 rounded"></div>
                <h2 class="text-4xl font-bold mb-4 text-dark-gray">About Me</h2>
                <!-- Divider Line -->
                <hr class="w-24 border-brass mx-auto mb-8">
                <p class="text-lg max-w-2xl mx-auto text-dark-gray leading-relaxed">
                    I’m a web developer with 8 years of experience in building modern, responsive websites. My skills
                    cover
                    both frontend and backend technologies, with a focus on creating seamless, user-friendly, and
                    accessible
                    web experiences.
                </p>
                <a href="#contact"
                    class="inline-block mt-8 bg-brass text-navy py-3 px-6 rounded shadow-lg hover:bg-yellow-400 font-semibold transition duration-300">
                    Learn More
                </a>
            </div>
        </div>
    </section>

    <hr class="border-t border-brass my-8">

    <!-- Contact Section -->
    <section id="contact" class="py-16 text-center">
        <div class="container mx-auto max-w-screen-lg">
            <div
                class="bg-beige p-8 rounded-lg shadow-xl border border-gray-300 mx-auto max-w-3xl flex flex-col md:flex-row items-center">
                <!-- Image Section -->
                <div class="w-full md:w-2/5 mb-8 md:mb-0">
                    <img src="{{ url('/images/collaboration.webp') }}" alt="Contact Me"
                        class="rounded-lg shadow-lg mx-auto md:mx-0 w-full md:w-3/4">
                </div>
                <!-- Contact Info Section -->
                <div class="md:ml-8 w-full md:w-3/5 text-left">
                    <!-- Decorative Element -->
                    <div class="w-12 h-1 bg-brass mx-auto md:mx-0 mb-6 rounded"></div>
                    <h2 class="text-4xl font-bold mb-4 text-dark-gray">Let's Work Together</h2>
                    <!-- Divider Line -->
                    <hr class="w-24 border-brass mx-auto md:mx-0 mb-8">
                    <p class="text-lg text-dark-gray leading-relaxed">If you'd like to collaborate or have any
                        questions, feel free to reach out to me.</p>
                    <a href="mailto:email@example.com"
                        class="inline-block mt-8 bg-brass text-navy py-3 px-6 rounded shadow-lg hover:bg-yellow-400 font-semibold transition duration-300">
                        Get in Touch
                    </a>
                    <div class="mt-8 space-x-4 contact-icons">
                        <a href="https://www.linkedin.com/in/miriam-ara%C3%BAjo-05a6a8186" class="text-brass"><i
                                class="fab fa-linkedin"></i></a>
                        <a href="https://github.com/M-Araujo/M-Araujo" class="text-brass"><i
                                class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

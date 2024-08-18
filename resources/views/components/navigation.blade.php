<!-- Navigation Bar -->
<nav class="bg-navy text-beige p-4">
    <div class="container mx-auto max-w-screen-lg px-4 md:px-8 flex justify-between items-center">
        <!-- Logotype and Description -->
        <div class="flex flex-col md:flex-row items-center space-x-0 md:space-x-4">
            <a href="/" class="no-hover flex items-center space-x-2">
                <img src="{{ url('/images/logo.png') }}" alt="Miriam Araújo Logo" class="h-10 w-auto">
                <span class="text-lg font-light text-beige md:hidden">Miriam Araújo's Portfolio</span>
            </a>
            <span class="text-lg font-light text-beige hidden md:block">Miriam Araújo's Portfolio</span>
        </div>


        <!-- Hamburger Menu for Mobile -->
        <div class="md:hidden">
            <button id="nav-toggle" class="focus:outline-none">
                <svg class="w-6 h-6 text-beige" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>

        <!-- Navigation Links -->
        <ul id="nav-menu" class="hidden md:flex space-x-4">
            <li>
                <a href="/"
                    class="py-2 px-3 rounded nav-link {{ Request::is('/') ? 'bg-brass text-navy active' : '' }}">
                    Home
                </a>
            </li>
            <li>
                <a href="/about"
                    class="py-2 px-3 rounded nav-link {{ Request::is('about') ? 'bg-brass text-navy active' : '' }}">
                    About
                </a>
            </li>
            <li>
                <a href="/portfolio"
                    class="py-2 px-3 rounded nav-link {{ Request::is('portfolio*') ? 'bg-brass text-navy active' : '' }}">
                    Portfolio
                </a>
            </li>
            <li>
                <a href="/#competencies"
                    class="py-2 px-3 rounded nav-link {{ Request::is('#competencies') ? 'bg-brass text-navy active' : '' }}">
                    Competencies
                </a>
            </li>
            <li>
                <a href="/#technologies"
                    class="py-2 px-3 rounded nav-link {{ Request::is('#technologies') ? 'bg-brass text-navy active' : '' }}">
                    Technologies
                </a>
            </li>
            <li>
                <a href="/contact"
                    class="py-2 px-3 rounded nav-link {{ Request::is('contact') ? 'bg-brass text-navy active' : '' }}">
                    Contact
                </a>
            </li>
        </ul>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-nav" class="md:hidden bg-navy text-beige p-4 hidden">
        <ul class="space-y-2">
            <li>
                <a href="/"
                    class="block py-2 px-3 rounded nav-link {{ Request::is('/') ? 'bg-brass text-navy active' : '' }}">
                    Home
                </a>
            </li>
            <li>
                <a href="/about"
                    class="block py-2 px-3 rounded nav-link {{ Request::is('about') ? 'bg-brass text-navy active' : '' }}">
                    About
                </a>
            </li>
            <li>
                <a href="/portfolio"
                    class="block py-2 px-3 rounded nav-link {{ Request::is('portfolio*') ? 'bg-brass text-navy active' : '' }}">
                    Portfolio
                </a>
            </li>
            <li>
                <a href="/#competencies"
                    class="block py-2 px-3 rounded nav-link {{ Request::is('#competencies') ? 'bg-brass text-navy active' : '' }}">
                    Competencies
                </a>
            </li>
            <li>
                <a href="/#technologies"
                    class="block py-2 px-3 rounded nav-link {{ Request::is('#technologies') ? 'bg-brass text-navy active' : '' }}">
                    Technologies
                </a>
            </li>
            <li>
                <a href="/contact"
                    class="block py-2 px-3 rounded nav-link {{ Request::is('contact') ? 'bg-brass text-navy active' : '' }}">
                    Contact
                </a>
            </li>
        </ul>
    </div>
</nav>

<script>
    const navToggle = document.getElementById('nav-toggle');
    const navMenu = document.getElementById('nav-menu');
    const mobileNav = document.getElementById('mobile-nav');

    navToggle.addEventListener('click', () => {
        navMenu.classList.add('hidden'); // Ensure the desktop menu is hidden on mobile toggle
        mobileNav.classList.toggle('hidden'); // Toggle the mobile menu visibility
    });
</script>

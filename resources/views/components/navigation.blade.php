<!-- Navigation Bar -->
<nav class="bg-navy text-beige p-4">
    <div class="container mx-auto max-w-screen-lg px-4 md:px-8 flex justify-between items-center">
        <!-- Logotype and Description -->
        <div class="flex items-center space-x-4">
            <a href="/" class="no-hover">
                <img src="{{ url('/images/logo.png') }}" alt="Miriam Araújo Logo" class="h-10 w-auto">
            </a>
            <span class="text-lg font-light text-beige hidden md:block">Miriam Araújo's Portfolio</span>
        </div>
        <ul class="flex space-x-4">
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
</nav>

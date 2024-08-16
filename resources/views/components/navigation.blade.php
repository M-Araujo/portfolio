<!-- Navigation Bar -->
<nav class="bg-navy text-beige p-4">
    <div class="container mx-auto max-w-screen-lg px-4 md:px-8 flex justify-between items-center">
        <a href="/" class="text-2xl font-bold">Miriam Araújo</a>
        <ul class="flex space-x-4">
            <li>
                <a href="/" class="py-2 px-3 rounded {{ Request::is('/') ? 'bg-brass text-navy' : '' }}">
                    Home
                </a>
            </li>
            <li>
                <a href="/about" class="py-2 px-3 rounded {{ Request::is('about') ? 'bg-brass text-navy' : '' }}">
                    About
                </a>
            </li>
            <li>
                <a href="/portfolio"
                    class="py-2 px-3 rounded {{ Request::is('portfolio*') ? 'bg-brass text-navy' : '' }}">
                    Portfolio
                </a>
            </li>
            <li>
                <a href="/#competencies"
                    class="py-2 px-3 rounded {{ Request::is('#competencies') ? 'bg-brass text-navy' : '' }}">
                    Competencies
                </a>
            </li>
            <li>
                <a href="/#technologies"
                    class="py-2 px-3 rounded {{ Request::is('#technologies') ? 'bg-brass text-navy' : '' }}">
                    Technologies
                </a>
            </li>
            <li>
                <a href="/contact" class="py-2 px-3 rounded {{ Request::is('contact') ? 'bg-brass text-navy' : '' }}">
                    Contact
                </a>
            </li>
        </ul>
    </div>
</nav>

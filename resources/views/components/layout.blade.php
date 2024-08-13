<!DOCTYPE html>
<html lang="en">

@include('components.header')


<body class="font-sans text-beige bg-navy">

    @include('components.navigation')

    <div class="container mx-auto max-w-screen-lg">
        @yield('content')
    </div>
    <hr class="border-t border-brass my-8">

    @include('components.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

    <script>
        Fancybox.bind("[data-fancybox='gallery']", {
            Thumbs: {
                autoStart: true,
            },
            Toolbar: {
                display: [
                    "zoom",
                    "close",
                ],
            },
        });

        AOS.init({
            duration: 1000, // Animation duration in milliseconds
            once: true, // Whether animation should happen only once - while scrolling down
        });
    </script>

</body>

</html>

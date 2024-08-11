<!DOCTYPE html>
<html lang="en">

@include('components.header')


<body class="font-sans text-beige bg-navy">

    @include('components.navigation')

    @yield('content')

    <hr class="border-t border-brass my-8">

    @include('components.footer')
</body>

</html>

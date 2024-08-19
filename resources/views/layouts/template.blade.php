<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.partials.head')

<body class="antialiased">
    @include('layouts.partials.navbar')
    {{-- @yield('hero') --}}

    <main style="margin-top: -70px; background-color: white;">
        @yield('content')
    </main>

    @include('layouts.partials.footer')

    @stack('modals')

    @livewire('notifications')
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<x-head/>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
    {{-- <x-loading/> --}}
    <x-navbar/>
    <x-bottom-nav/>
    @yield('banner')
    @yield('content')
    <x-footer/>
    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>
    <x-script/>
    @stack('scripts')
</body>
</html>

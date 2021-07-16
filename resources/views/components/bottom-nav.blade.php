<nav id="bottom-nav" class="navbar fixed-bottom navbar-light theme_bg border-white border-top p-2">
    <div class="d-flex w-100 justify-content-around white_fonts">
        <a href="{{ url('/') }}" style="{{ request()->is('/') ? 'border-bottom: solid 2px #2797db' : '' }}" class="bottom-nav-item" data-toggle="tooltip" data-placement="bottom" title="Beranda">
            <div class="text-center text-color">
                <i class="fa fa-home" style="{{ request()->is('/') ? 'color : #2797db' : '' }}"></i>
                <div class="text-color text-nav-bottom">Home</div>
            </div>
        </a>
        <a href="{{ url('tentang-kami') }}" style="{{ request()->is('tentang-kami') ? 'border-bottom: solid 2px #2797db' : '' }}">
            <div class="text-center text-color">
                <i class="fa fa-building" style="{{ request()->is('tentang-kami') ? 'color : #2797db' : '' }}"></i>
                <div class="text-color text-nav-bottom">Tentang</div>
            </div>
        </a>
        <a href="{{ url('layanan-kami') }}" style="{{ request()->is('layanan-kami') ? 'border-bottom: solid 2px #2797db' : '' }}">
            <div class="text-center text-color">
                <i class="fa fa-paper-plane" style="{{ request()->is('layanan-kami') ? 'color : #2797db' : '' }}"></i>
                <div class="text-color text-nav-bottom">Layanan</div>
            </div>
        </a>
        <a href="{{ url('portfolio') }}" style="{{ request()->is('portfolio') ? 'border-bottom: solid 2px #2797db' : '' }}">
            <div class="text-center text-color">
                <i class="fa fa-briefcase" style="{{ request()->is('portfolio') ? 'color : #2797db' : '' }}"></i>
                <div class="text-color text-nav-bottom">Portfolio</div>
            </div>
        </a>
        <a href="{{ url('harga') }}" style="{{ request()->is('harga') ? 'border-bottom: solid 2px #2797db' : '' }}">
            <div class="text-center text-color">
                <i class="fa fa-dollar" style="{{ request()->is('harga') ? 'color : #2797db' : '' }}"></i>
                <div class="text-color text-nav-bottom">Harga</div>
            </div>
        </a>
        <a href="{{ url('kontak') }}" style="{{ request()->is('kontak') ? 'border-bottom: solid 2px #2797db' : '' }}">
            <div class="text-center text-color">
                <i class="fa fa-address-book" style="{{ request()->is('kontak') ? 'color : #2797db' : '' }}"></i>
                <div class="text-color text-nav-bottom">Kontak</div>
            </div>
        </a>
    </div>
  </nav>

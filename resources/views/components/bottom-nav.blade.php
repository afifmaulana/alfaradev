<nav id="bottom-nav" class="navbar fixed-bottom navbar-light theme_bg border-white border-top p-2">
    <div class="d-flex w-100 justify-content-around white_fonts">
        <a href="{{ url('/') }}" class="bottom-nav-item" data-toggle="tooltip" data-placement="bottom" title="Beranda">
            <div class="text-center text-color">
                <i class="fa fa-home"></i>
                <div class="text-color text-nav-bottom">Home</div>
            </div>
        </a>
        <a href="{{ url('tentang-kami') }}">
            <div class="text-center text-color">
                <i class="fa fa-building"></i>
                <div class="text-color text-nav-bottom">Tentang</div>
            </div>
        </a>
        <a href="{{ url('layanan-kami') }}">
            <div class="text-center text-color">
                <i class="fa fa-paper-plane"></i>
                <div class="text-color text-nav-bottom">Layanan</div>
            </div>
        </a>
        <a href="{{ url('portfolio') }}">
            <div class="text-center text-color">
                <i class="fa fa-briefcase"></i>
                <div class="text-color text-nav-bottom">Portfolio</div>
            </div>
        </a>
        <a href="{{ url('harga') }}">
            <div class="text-center text-color">
                <i class="fas fa-dollar"></i>
                <div class="text-color text-nav-bottom">Harga</div>
            </div>
        </a>
        <a href="{{ url('kontak') }}">
            <div class="text-center text-color">
                <i class="fa fa-address-book"></i>
                <div class="text-color text-nav-bottom">Kontak</div>
            </div>
        </a>
    </div>
  </nav>

<header class="top-header">
    <nav class="navbar header-nav navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('assets/images/alfaradev.png') }}" width="250" height="70">
            </a>
            {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button> --}}
            <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                <ul class="navbar-nav">
                    <li><a class="nav-link text-color active" href="{{ url('/') }}">Home</a></li>
                    <li><a class="nav-link text-color" href="{{ url('tentang-kami') }}">Tentang</a></li>
                    <li><a class="nav-link text-color" href="{{ url('layanan-kami') }}">Layanan</a></li>
                    <li><a class="nav-link text-color" href="{{ url('portfolio') }}">Portfolio</a></li>
                    <li><a class="nav-link text-color" href="{{ url('harga') }}">Harga</a></li>
                    <li><a class="nav-link text-color" href="{{ url('kontak') }}">Kontak</a></li>
                </ul>
            </div>
            <div class="search-box">
                <i id="icon-light" class="fas fa-lightbulb"></i>
                <label class="switch mx-1">
                    <input type="checkbox" id="dark-switch">
                    <span class="slider round"></span>
                  </label>
                  <i id="icon-dark" class="fas fa-moon"></i>
            </div>
        </div>
    </nav>
</header>


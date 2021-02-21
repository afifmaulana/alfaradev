@extends('layout.app')
@section('content')

  <div class="section layout_padding">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="full center">
                      <div class="heading_main text_align_center">
                          <h2><span class="theme_color">Tentang </span>Kami</h2>
                          <p class="large">Sedikit tentang kami</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- section -->
  <div class="section layout_padding theme_bg">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 text_align_center">
                  <div class="full">
                      <img class="img-responsive" src="{{ asset('assets/images/alfaradev.png') }}" alt="#" />
                  </div>
              </div>

              <div class="col-lg-6 col-md-6 col-sm-12 white_fonts">
                  <h3 class="small_heading">Tentang <span class="theme_color">ALFARA</span> DEV</h3>
                  <p class="text-justify">AlfaraDev merupakan perusahan yang bergerak dalam jasa pembuatan website yang bertempat di kota tegal.
                      Kami memiliki tim yang profesional dalam pembuatan software, kami selalu memberikan yang terbaik
                      kepada client2 kami. Sudah tidak diragukan  kemampuannya dalam menyelesaikan project2.
                      Dan sudah banyak project2 yang sudah kami selesaikan.
                      Terima kasih sudah mempercayakan kami dalam menyesaikan masalah dalam kebutuhan bisnis anda.
                      Kami akan selalu memberikan yang terbaik kepada client kami.</p>
                  <a href="#" class="hvr-radial-out button-theme">Contact Us ></a>
              </div>
          </div>
      </div>
  </div>
  <!-- end section -->
  <!-- section -->
  <div class="section layout_padding">
      <div class="container">

          <div class="row">
              <div class="col-md-12">
                  <div class="full center margin-bottom_30">
                      <div class="heading_main text_align_center">
                          <h2><span class="theme_color">Alur</span> Kerja Kami</h2>
                          <p class="large">Berikut merupakan alur sistem kerja kami</p>
                      </div>
                  </div>
              </div>
          </div>

          <div class="row">

              <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                  <div class="full">
                      <div class="center">
                          <img src="{{ asset('assets/images/icon1.png') }}" alt="#" />
                      </div>
                      <div class="center">
                          <h4>Analisa dan Perancangan</h4>
                      </div>
                      <div class="center text-center">
                          <h5>Setelah menerima project, kami akan melakukan analisa terhadap masalah Anda dan kebutuhan sistem Anda,
                              kemudian kami akan melakukan perancangan untuk sistem Anda.</h5>
                      </div>
                  </div>
              </div>

              <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                  <div class="full">
                      <div class="center">
                          <img src="{{ asset('assets/images/icon2.png') }}" alt="#" />
                      </div>
                      <div class="center">
                          <h4>Programming</h4>
                      </div>
                      <div class="center text-center">
                          <h5>Setelah analisa dan perancangan sistem telah selesai, maka kita akan memulai programming
                               dengan memulai dengan membuat tampilan hingga sistem selesai dibuat.
                          </h5>
                      </div>
                  </div>
              </div>

          </div>

          <div class="row">

              <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                  <div class="full">
                      <div class="center">
                          <img src="{{ asset('assets/images/icon3.png') }}" alt="#" />
                      </div>
                      <div class="center">
                          <h4>Testing</h4>
                      </div>
                      <div class="center text-center">
                          <h5>Jika sistem telah selesai dibuat kami akan mengujinya terlebih dahulu sebelum diberikan
                              kepada Anda, agar jika terdapat kesalahan/kekurangan dapat kami perbaiki lagi.
                          </h5>
                      </div>
                  </div>
              </div>

              <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                  <div class="full">
                      <div class="center">
                          <img src="{{ asset('assets/images/icon3.png') }}" alt="#" />
                      </div>
                      <div class="center">
                          <h4>Implementasi</h4>
                      </div>
                      <div class="center text-center">
                          <h5>Setelah sudah selesai semua, aplikasi/sistem siap untuk diberikan kepada Anda dan
                              diimplementasikan untuk perusahaan/bisnis Anda.
                          </h5>
                      </div>
                  </div>
              </div>

          </div>
      </div>
  </div>
@endsection

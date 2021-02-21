@extends('layout.app')
@section('content')

  <div class="section layout_padding light_bg">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="full center">
                      <div class="heading_main text_align_center">
                          <h2 class="text-color"><span class="theme_color">Tentang </span>Kami</h2>
                          <p class="large text-color">Sedikit tentang kami</p>
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
                  <h3 class="small_heading text-color">Tentang ALFARA DEV</h3>
                  <p class="text-justify text-color">AlfaraDev perusahan yang bergerak dalam jasa pembuatan website yang bertempat di kota tegal.
                      Kami memiliki tim yang profesional dalam pembuatan software, kami selalu memberikan yang terbaik
                      kepada client2 kami. Sudah tidak diragukan  kemampuannya dalam menyelesaikan project2.
                      Dan sudah banyak project2 yang sudah kami selesaikan.
                      Terima kasih sudah mempercayakan kami dalam menyesaikan masalah dalam kebutuhan bisnis anda.
                      Kami akan selalu memberikan yang terbaik kepada client kami.</p>
                  <a href="#" class="hvr-radial-out button-theme text-color">Contact Us ></a>
              </div>
          </div>
      </div>
  </div>
  <!-- end section -->
  <!-- section -->
  <div class="section layout_padding light_bg">
      <div class="container">

          <div class="row">
              <div class="col-md-12">
                  <div class="full center margin-bottom_30">
                      <div class="heading_main text_align_center">
                          <h2 class="text-color"><span class="theme_color">Mengapa</span> Harus Alfara Dev?</h2>
                          <p class="large text-color">Karena</p>
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
                          <h4 class="text-color">Pelayanan Ramah</h4>
                      </div>
                      <div class="center text-center">
                          <h5 class="text-color">Kami akan memberikan pelayanan dengan ramah dan sabar kepada client kami,
                              serta akan memberikan solusi2 yang terbaik dari masalah yang di hadapi.
                              Dan kami pun akan cepat dan tanggap untuk melayani anda.</h5>
                      </div>
                  </div>
              </div>

              <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                  <div class="full">
                      <div class="center">
                          <img src="{{ asset('assets/images/icon2.png') }}" alt="#" />
                      </div>
                      <div class="center">
                          <h4 class="text-color">Berpengalaman</h4>
                      </div>
                      <div class="center text-center">
                          <h5 class="text-color">AlfaraDev sudah berpengalaman dalam pengembangan Aplikasi dan Website sejak 2019,
                              maka tepat sekali jika anda memilih kami untuk berkerjasama. </h5>
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
                          <h4 class="text-color">Kualitas</h4>
                      </div>
                      <div class="center text-center">
                          <h5 class="text-color">Kami akan memberikan service yang terbaik untuk para client kami,
                              kualitas yang kami berikan juga pasti akan baik, tidak perlu di ragukan lagi.</h5>
                      </div>
                  </div>
              </div>

              <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                  <div class="full">
                      <div class="center">
                          <img src="{{ asset('assets/images/icon3.png') }}" alt="#" />
                      </div>
                      <div class="center">
                          <h4 class="text-color">Kualitas</h4>
                      </div>
                      <div class="center text-center">
                          <h5 class="text-color">Kami akan memberikan service yang terbaik untuk para client kami,
                              kualitas yang kami berikan juga pasti akan baik, tidak perlu di ragukan lagi.</h5>
                      </div>
                  </div>
              </div>

          </div>
      </div>
  </div>
@endsection
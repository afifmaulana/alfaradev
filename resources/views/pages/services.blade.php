@extends('layout.app')

@push('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endpush

@section('content')

  <div class="section layout_padding">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="full center">
                      <div class="heading_main text_align_center">
                          <h2><span class="theme_color">Layanan </span>Kami</h2>
                          <p class="large">Website dan Aplikasi Android</p>
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
                  <h3 class="small_heading">Tentang ALFARA DEV</h3>
                  <p class="text-justify">AlfaraDev perusahan yang bergerak dalam jasa pembuatan website yang bertempat di kota tegal.
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
                          <h2><span class="theme_color">Layanan</span> Kami</h2>
                          <p class="large">Website dan Aplikasi Android</p>
                      </div>
                  </div>
              </div>
          </div>

          <ul class="nav nav-tabs center" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="web-tab" data-toggle="tab" href="#web" role="tab" aria-controls="web" aria-selected="false">Website</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="apps-tab" data-toggle="tab" href="#apps" role="tab" aria-controls="contact" aria-selected="false">Apps</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="web" role="tabpanel" aria-labelledby="web-tab">
                <div class="row">
                    <div class="col-12 center">
                        <h4>Jasa Pembuatan Website</h4>
                    </div>
                    <div class="col-12 center">
                        <p>Kami Melayani jasa pembuatan berbagai jenis Website, seperti di bawah ini :</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                        <div class="card shadow p-3">
                            <img class="card-img-top" src="{{ asset('assets/images/icon1.png') }}" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                        <div class="card shadow p-3">
                            <img class="card-img-top" src="{{ asset('assets/images/icon2.png') }}" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                        <div class="card shadow p-3">
                            <img class="card-img-top" src="{{ asset('assets/images/icon3.png') }}" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                        <div class="card shadow p-3">
                            <img class="card-img-top" src="{{ asset('assets/images/icon3.png') }}" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="tab-pane fade" id="apps" role="tabpanel" aria-labelledby="apps-tab">
                <div class="row">
                    <div class="col-12 center">
                        <h4>Jasa Pembuatan Aplikasi Android</h4>
                    </div>
                    <div class="col-12 center">
                    <p>Selain membuat website, kami juga menerima jasa pembuatan aplikasi Android</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                        <div class="card shadow p-3">
                            <img class="card-img-top" src="{{ asset('assets/images/icon1.png') }}" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                        <div class="card shadow p-3">
                            <img class="card-img-top" src="{{ asset('assets/images/icon2.png') }}" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                        <div class="card shadow p-3">
                            <img class="card-img-top" src="{{ asset('assets/images/icon3.png') }}" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                        <div class="card shadow p-3">
                            <img class="card-img-top" src="{{ asset('assets/images/icon3.png') }}" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
          </div>


      </div>
  </div>
@endsection

@push('script')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endpush

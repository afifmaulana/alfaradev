@extends('layout.app')
@section('content')

  <div class="section layout_padding light_bg">
      <div class="container">

          <div class="row">
              <div class="col-md-12">
                  <div class="full center margin-bottom_30">
                      <div class="heading_main text_align_center">
                          <h2 class="text-color"><span class="theme_color">Daftar Harga</span> Layanan Kami</h2>
                          <p class="large text-color">Website dan Aplikasi Android</p>
                      </div>
                  </div>
              </div>
          </div>

          <section class="pricing py-5">
            <div class="container">

                <ul class="nav nav-tabs center" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active text-color" id="company-tab" data-toggle="tab" href="#company" role="tab" aria-controls="company" aria-selected="false">Company Profile</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-color" id="admin-tab" data-toggle="tab" href="#admin" role="tab" aria-controls="admin" aria-selected="false">Admin Panel</a>
                    </li>
                  </ul>

                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="company" role="tabpanel" aria-labelledby="company-tab">
                        <div class="row">
                            <div class="col-12 center">
                                <h4 class="text-color">Company Profile/Landing Page</h4>
                            </div>
                            <div class="col-12 center">
                                <p class="text-color">Berikut daftar harga pembuatan Web Company Profile, Landing Page :</p>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Free Tier -->
                            <div class="col-lg-4">
                              <div class="card mb-5 mb-lg-0 light_bg">
                                <div class="card-body">
                                  <h5 class="card-title text-muted text-uppercase text-center">Basic</h5>
                                  <h2 class="text-center text-color">Rp. 1.000.000,-</h2>
                                  <hr>
                                  <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Custom Design</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>5 Page</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Free Hosting 750MB (1 Tahun)</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Free Domain .com (1 Tahun)</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>2x Revisi</li>
                                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Admin Panel</li>
                                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Maintenance</li>
                                    <li><span class="fa-li"><i class="fas fa-times"></i></span>Akses CPanel</li>
                                    <li><span class="fa-li"><i class="fas fa-times"></i></span>Garansi</li>
                                  </ul>
                                  <a href="https://wa.me/6285156805245?text=Halo,%20Saya%20tertarik%20dengan%20paket%20Basic%20Company%20Profile." class="btn btn-block btn-primary text-uppercase">Pesan</a>
                                </div>
                              </div>
                            </div>
                            <!-- Plus Tier -->
                            <div class="col-lg-4">
                              <div class="card mb-5 mb-lg-0 light_bg">
                                <div class="card-body">
                                  <h5 class="card-title text-muted text-uppercase text-center">Standart</h5>
                                  <h2 class="text-center text-color">Rp. 2.000.000,-</h2>
                                  <hr>
                                  <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Custom Design</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Page</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Free Hosting 750MB (1 Tahun)</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Free Domain .com (1 Tahun)</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>3x Revisi</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Admin Panel</li>
                                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Maintenance</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Akses CPanel</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Garansi 2 Minggu</li>
                                  </ul>
                                  <a href="https://wa.me/6285156805245?text=Halo,%20Saya%20tertarik%20dengan%20paket%20Standart%20Company%20Profile." class="btn btn-block btn-primary text-uppercase">Pesan</a>
                                </div>
                              </div>
                            </div>
                            <!-- Pro Tier -->
                            <div class="col-lg-4">
                              <div class="card light_bg">
                                <div class="card-body">
                                  <h5 class="card-title text-muted text-uppercase text-center">Premium</h5>
                                  <h2 class="text-center text-color">Rp. 3.500.000,-</h2>
                                  <hr>
                                  <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Custom Design</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Page</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Free Hosting 2GB (1 Tahun)</strong></li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Free Domain .com (1 Tahun)</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>5x Revisi</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Admin Panel</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Maintenance (1 Bulan)</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Akses CPanel</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Garansi 1 Bulan</li>

                                  </ul>
                                  <a href="https://wa.me/6285156805245?text=Halo,%20Saya%20tertarik%20dengan%20paket%20Premium%20Company%20Profile." class="btn btn-block btn-primary text-uppercase">Pesan</a>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="tab-pane fade" id="admin" role="tabpanel" aria-labelledby="admin-tab">
                        <div class="row">
                            <div class="col-12 center">
                                <h4 class="text-color">E-Commerce, E-Learning, POS, Semua Admin Panel + Landing Page</h4>
                            </div>
                            <div class="col-12 center">
                            <p class="text-color">Daftar harga pembuatan Semua website yang terdapat Admin panel + Landing Page :</p>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Free Tier -->
                            <div class="col-lg-4">
                              <div class="card mb-5 mb-lg-0 light_bg">
                                <div class="card-body">
                                  <h5 class="card-title text-muted text-uppercase text-center">Basic</h5>
                                  <h2 class="text-center text-color">Rp. 1.500.000,-</h2>
                                  <hr>
                                  <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Custom Design</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>7 Page</li>
                                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Free Hosting 750MB (1 Tahun)</li>
                                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Free Domain .com (1 Tahun)</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>3x Revisi</li>
                                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Landing Page</li>
                                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Maintenance</li>
                                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Akses CPanel</li>
                                    <li><span class="fa-li"><i class="fas fa-times"></i></span>Garansi</li>
                                  </ul>
                                  <a href="https://wa.me/6285156805245?text=Halo,%20Saya%20tertarik%20dengan%20paket%20Basic%20Pembuatan%20Admin%20Panel." class="btn btn-block btn-primary text-uppercase">Pesan</a>
                                </div>
                              </div>
                            </div>
                            <!-- Plus Tier -->
                            <div class="col-lg-4">
                              <div class="card mb-5 mb-lg-0 light_bg">
                                <div class="card-body">
                                  <h5 class="card-title text-muted text-uppercase text-center">Standart</h5>
                                  <h2 class="text-center text-color">Rp. 3.500.000,-</h2>
                                  <hr>
                                  <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Custom Design</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Page</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Free Hosting 750MB (1 Tahun)</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Free Domain .com (1 Tahun)</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>3x Revisi</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Landing Page</li>
                                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Maintenance</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Akses CPanel</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Garansi 3 Minggu</li>
                                  </ul>
                                  <a href="https://wa.me/6285156805245?text=Halo,%20Saya%20tertarik%20dengan%20paket%20Standart%20Pembuatan%20Admin%20Panel." class="btn btn-block btn-primary text-uppercase">Pesan</a>
                                </div>
                              </div>
                            </div>
                            <!-- Pro Tier -->
                            <div class="col-lg-4">
                              <div class="card light_bg">
                                <div class="card-body">
                                  <h5 class="card-title text-muted text-uppercase text-center">Premium</h5>
                                  <h2 class="text-center text-color">Rp. 5.000.000,-</h2>
                                  <hr>
                                  <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Custom Design</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Page</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Free Hosting 2GB (1 Tahun)</strong></li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Free Custom Domain (1 Tahun)</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>5x Revisi</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Landing Page</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Maintenance (1 Bulan)</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Akses CPanel</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Garansi 2 Bulan</li>
                                  </ul>
                                  <a href="https://wa.me/6285156805245?text=Halo,%20Saya%20tertarik%20dengan%20paket%20Premium%20Pembuatan%20Admin%20Panel." class="btn btn-block btn-primary text-uppercase">Pesan</a>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                  </div>


            </div>
          </section>

      </div>
  </div>
@endsection


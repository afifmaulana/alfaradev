@extends('layout.app')
@section('content')

  <div class="section layout_padding light_bg">
      <div class="container">

          <div class="row">
              <div class="col-md-12">
                  <div class="full center margin-bottom_30">
                      <div class="heading_main text_align_center">
                          <h2 class="text-color"><span class="theme_color">Daftar Harga</span> Kami</h2>
                          <p class="large text-color">Website dan Aplikasi Android</p>
                      </div>
                  </div>
              </div>
          </div>

          <section class="pricing py-5">
            <div class="container">
              <div class="row">
                <!-- Free Tier -->
                <div class="col-lg-4">
                  <div class="card mb-5 mb-lg-0 light_bg">
                    <div class="card-body">
                      <h5 class="card-title text-muted text-uppercase text-center">Free</h5>
                      <h6 class="card-price text-center text-color">$0<span class="period">/month</span></h6>
                      <hr>
                      <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Single User</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>5GB Storage</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
                        <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Unlimited Private Projects</li>
                        <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Dedicated Phone Support</li>
                        <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Free Subdomain</li>
                        <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly Status Reports</li>
                      </ul>
                      <a href="#" class="btn btn-block btn-primary text-uppercase">Button</a>
                    </div>
                  </div>
                </div>
                <!-- Plus Tier -->
                <div class="col-lg-4">
                  <div class="card mb-5 mb-lg-0 light_bg">
                    <div class="card-body">
                      <h5 class="card-title text-muted text-uppercase text-center">Plus</h5>
                      <h6 class="card-price text-center text-color">$9<span class="period">/month</span></h6>
                      <hr>
                      <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>5 Users</strong></li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>50GB Storage</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Private Projects</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Dedicated Phone Support</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Free Subdomain</li>
                        <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly Status Reports</li>
                      </ul>
                      <a href="#" class="btn btn-block btn-primary text-uppercase">Button</a>
                    </div>
                  </div>
                </div>
                <!-- Pro Tier -->
                <div class="col-lg-4">
                  <div class="card light_bg">
                    <div class="card-body">
                      <h5 class="card-title text-muted text-uppercase text-center">Pro</h5>
                      <h6 class="card-price text-center text-color">$49<span class="period">/month</span></h6>
                      <hr>
                      <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Unlimited Users</strong></li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>150GB Storage</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Private Projects</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Dedicated Phone Support</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Unlimited</strong> Free Subdomains</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Monthly Status Reports</li>
                      </ul>
                      <a href="#" class="btn btn-block btn-primary text-uppercase">Button</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

      </div>
  </div>
@endsection


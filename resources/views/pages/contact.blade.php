@extends('layout.app')
@section('content')

<!-- section -->
<div class="section layout_padding light_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full center">
                    <div class="heading_main text_align_center">
                        <h2 class="text-color"><span class="theme_color">KONTAK</h2>
                        <p class="large text-color">Terima kasih telah menghubungi kami</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end section -->

<!-- section -->
<div id="contact" class="contact-box light_bg">
  <div class="container">

      <div class="row">

          <div class="col-lg-7 col-sm-7 col-xs-12">
            <div class="contact-block">
              <form id="contactForm">
                <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <input type="text" class="form-control text-color" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
                          <div class="help-block with-errors"></div>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <input type="text" placeholder="Your Email" id="email" class="form-control text-color" name="name" required data-error="Please enter your email">
                          <div class="help-block with-errors"></div>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <input type="text" placeholder="Your number" id="number" class="form-control text-color" name="number" required data-error="Please enter your number">
                          <div class="help-block with-errors"></div>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <textarea class="form-control" id="message" placeholder="Your Message" rows="8" data-error="Write your message" required></textarea>
                          <div class="help-block with-errors"></div>
                      </div>
                      <div class="submit-button text-center">
                          <button class="btn btn-common" id="submit" type="submit">Send Message</button>
                          <div id="msgSubmit" class="h3 text-center hidden"></div>
                          <div class="clearfix"></div>
                      </div>
                  </div>
                </div>
              </form>
            </div>
          </div>


          <div class="col-lg-5 col-sm-5 col-xs-12">
              <div class="left-contact">
                  <div class="media cont-line">
                      <div class="media-left icon-b">
                          <i class="fa fa-location-arrow" aria-hidden="true"></i>
                      </div>
                      <div class="media-body dit-right">
                          <h4 class="text-color">Alamat</h4>
                          <p class="text-color">Desa blablabla Kota Tegal</p>
                      </div>
                  </div>
                  <div class="media cont-line">
                      <div class="media-left icon-b">
                          <i class="fa fa-envelope" aria-hidden="true"></i>
                      </div>
                      <div class="media-body dit-right">
                          <h4 class="text-color">Email</h4>
                          <a href="#" class="text-color">cs@alfara-dev.com</a><br>
                      </div>
                  </div>
                  <div class="media cont-line">
                      <div class="media-left icon-b">
                          <i class="fa fa-phone" aria-hidden="true"></i>
                      </div>
                      <div class="media-body dit-right">
                          <h4 class="text-color">Nomor Telepon</h4>
                          <a href="#" class="text-color">12345 67890</a><br>
                      </div>
                  </div>
              </div>
          </div>


      </div>
  </div>
</div>
<!-- end section -->

@endsection

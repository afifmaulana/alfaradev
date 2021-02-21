@extends('layout.app')
@section('banner')
<div class="ulockd-home-slider">
    <div class="container-fluid">
        <div class="row">
            <div class="pogoSlider" id="js-main-slider">
                <div class="pogoSlider-slide" style="background-image:url({{ asset('assets/images/slider-01.jpg') }});">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slide_text">
                                    <h3><span class="theme_color">ALFARA</span> DEV</h3>
                                    <br>
                                    <h4>Jasa Pembuatan Website<br> dan Aplikasi Android</h4>
                                    <br>
                                    <p><strong>Permudah Pekerjaan/Bisnis Anda
                                            <br>dengan memakai Website dan Aplikasi Android</strong></p>
                                    <a class="contact_bt" href="#">Hubungi Kami</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pogoSlider-slide" style="background-image:url({{ asset('assets/images/slider-01.jpg') }});">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slide_text">
                                    <h3><span class="theme_color">ALFARA</span> DEV</h3>
                                    <br>
                                    <h4>Jasa Pembuatan<br>Website & Aplikasi Android</h4>
                                    <br>
                                    <p><strong>Permudah Pekerjaan/Bisnis Anda
                                            <br>dengan memakai Website dan Aplikasi Android</strong></p>
                                    <a class="contact_bt" href="#">Hubungi Kami</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .pogoSlider -->
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full center">
                    <div class="heading_main text_align_center">
                        <h2><span class="theme_color">WE CAN</span> HELP YOUR CAREER GROW</h2>
                        <p class="large">Get your CV Resume in 4 easy steps</p>
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
                    <img class="img-responsive" src="{{ asset('assets/images/resume_img.png') }}" alt="#" />
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 white_fonts">
                <h3 class="small_heading">EVERYTHING YOU NEED IN ONE SOLUTION</h3>
                <p>HELP YOUR NEXT CAREER MOVE MORE SMOOTHER AND MORE EFFICIENT</p>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                    looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposed to using 'Content here, content here', making it look like
                    readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                    default model text</p>
                <a href="#" class="hvr-radial-out button-theme">Get Started ></a>
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
                        <h2><span class="theme_color">CHOOSE A</span> PROFESSIONAL DESIGN</h2>
                        <p class="large">Resume</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div id="demo" class="carousel slide" data-ride="carousel">

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <img class="img-responsive" src="{{ asset('assets/images/img1.png') }}" alt="#" />
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <img class="img-responsive" src="{{ asset('assets/images/img2.png') }}" alt="#" />
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <img class="img-responsive" src="{{ asset('assets/images/img3.png') }}" alt="#" />
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <img class="img-responsive" src="{{ asset('assets/images/img4.png') }}" alt="#" />
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <img class="img-responsive" src="{{ asset('assets/images/img1.png') }}" alt="#" />
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <img class="img-responsive" src="{{ asset('assets/images/img2.png') }}" alt="#" />
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <img class="img-responsive" src="{{ asset('assets/images/img3.png') }}" alt="#" />
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <img class="img-responsive" src="{{ asset('assets/images/img4.png') }}" alt="#" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>

                </div>
            </div>

            <div class="col-lg-12">
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                    looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposed to using 'Content here, content here', making it look like
                    readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                    default model text, and a search for 'lorem ipsum' will uncover many web sites still in their</p>
            </div>

            <div class="col-lg-12">
                <div class="full center">
                    <a href="about.html" class="hvr-radial-out button-theme">See More ></a>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- end section -->

<!-- section -->
<div class="section layout_padding theme_bg">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-12 white_fonts">
                <h3 class="small_heading">CREATE PERSONALISED CV </h3>
                <p>HELP YOUR NEXT CAREER MOVE MORE SMOOTHER AND MORE EFFICIENT</p>
                <p>ss normal distribution of letters, as opposed to using 'Content here, content here', making it look
                    like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as
                    their default model text, and a search for 'lorem ipsum' will uncover many web sites still in
                    theirss normal distribution of letters, as opposed to using 'Content here, content here', making it
                    look like../p>
                    <p><a href="about.html" class="hvr-radial-out button-theme">Read more ></a></p>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 text_align_center">
                <div class="full">
                    <img class="img-responsive" src="{{ asset('assets/images/resume_img2.png') }}" alt="#" />
                </div>
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
                        <h2><span class="theme_color">Mengapa</span> Harus Alfara Dev?</h2>
                        <p class="large">Karena</p>
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
                        <h4>Pelayanan Ramah</h4>
                    </div>
                    <div class="center text-center">
                        <h5>Kami akan memberikan pelayanan dengan ramah dan sabar kepada client kami, serta akan
                            memberikan solusi2 yang terbaik dari masalah yang di hadapi. Dan kami pun akan cepat dan
                            tanggap untuk melayani anda.</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                <div class="full">
                    <div class="center">
                        <img src="{{ asset('assets/images/icon2.png') }}" alt="#" />
                    </div>
                    <div class="center">
                        <h4>Berpengalaman</h4>
                    </div>
                    <div class="center text-center">
                        <h5>AlfaraDev sudah berpengalaman dalam pengembangan Aplikasi dan Website sejak 2019, maka tepat
                            sekali jika anda memilih kami untuk berkerjasama. </h5>
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
                        <h4>Kualitas</h4>
                    </div>
                    <div class="center text-center">
                        <h5>Kami akan memberikan service yang terbaik untuk para client kami, kualitas yang kami berikan
                            juga pasti akan baik, tidak perlu di ragukan lagi.</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                <div class="full">
                    <div class="center">
                        <img src="{{ asset('assets/images/icon3.png') }}" alt="#" />
                    </div>
                    <div class="center">
                        <h4>Kualitas</h4>
                    </div>
                    <div class="center text-center">
                        <h5>Kami akan memberikan service yang terbaik untuk para client kami, kualitas yang kami berikan
                            juga pasti akan baik, tidak perlu di ragukan lagi.</h5>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- end section -->
@endsection
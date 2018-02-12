<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>GIGCODE Codes Start Here</title>
    <!--mobile device enable-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!--favicon-->
    <link rel="shortcut icon" href="{{ url('/client/images/favicon.ico') }}" type="image/x-icon"/>
    <!-- fontawesome css-->
    <link rel="stylesheet" href="{{ url('/client/css/font-awesome.min.css') }}">
    <!--boostrap css-->
    <link rel="stylesheet" href="{{ url('/client/css/bootstrap.min.css') }}">
    <!--owl-carousel css-->
    <link rel="stylesheet" href="{{ url('/client/css/owl.carousel.min.css') }}">
    <!--video css-->
    <link rel="stylesheet" href="{{ url('/client/css/jquery.mb.YTPlayer.min.css') }}">
    <!--venuboc css-->
    <link rel="stylesheet" href="{{ url('/client/css/venobox.css') }}">
    <!--main css-->
    <link rel="stylesheet" href="{{ url('/client/css/style.css') }}">
    <!--responsive css-->
    <link rel="stylesheet" href="{{ url('/client/css/responsive.css') }}">
</head>
<body data-spy="scroll" data-target=".navigation_area" data-offset="50">

<!--Start Preloader-->
<div class="preloader">
    <div class="preloader-inner-area">
        <div class="loader-overlay">
            <div class="l-preloader">
                <div class="c-preloader"></div>
            </div>
        </div>
    </div>
</div><!--End Preloader-->

<!--Start home page area-->
<div class="header_area" id="home">
    <div id="particles-js"></div>
    <div class="navigation_area">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-2 col-lg-3">
                    <!--site logo area-->
                    <div class="site_logo">
                        <a href="{{ route('home') }}">
                            GigCode
                        </a>
                    </div><!--End site logo area-->
                </div>
                <!--Start menu area-->
                <div class="col-md-10 col-sm-10 col-lg-9">
                    <div class="mobile_menu"><i class="fa fa-bars" aria-hidden="true"></i></div>
                    <div class="main_menu">
                        <ul class="nav">
                            <li><a href="#home">home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#resume">resume</a></li>
                            <li><a href="#portfolio">work</a></li>
                            <li><a href="#blog">blog</a></li>
                            <li><a href="#contact">contact</a></li>
                        </ul>
                    </div>
                </div><!--End menu area-->
            </div>
        </div>
    </div>
</div>
<div class="heading_text txt_center">
    <div class="text_animation">
        <h1 class="typewrite" data-period="2000" data-type='[ "Hi, We are the GIGCODE team.", "We are Developers.", "We are creative." ]'>
            <span class="wrap"></span>
        </h1>
    </div>
</div><!--End home page area -->


<!--Start service area-->
<section class="service_area clas100">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="section_title padd_bott">
                    <h2 class="text-white">our skills</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                <div class="my_service">
                    <div class="single_service">
                        <div class="service_title">
                            <h3 class="text-white">html5, css3, javascript</h3>
                        </div>
                        <div class="service_details">
                            <div id="front"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="my_service">
                    <div class="single_service">
                        <div class="service_title">
                            <h3 class="text-white">php</h3>
                        </div>
                        <div class="service_details">
                            <div id="php"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="my_service">
                    <div class="single_service">
                        <div class="service_title">
                            <h3 class="text-white">c#</h3>
                        </div>
                        <div class="service_details">
                            <div id="c_sharp"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="my_service">
                    <div class="single_service">
                        <div class="service_title">
                            <h3 class="text-white">laravel</h3>
                        </div>
                        <div class="service_details">
                            <div id="laravel"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="my_service">
                    <div class="single_service">
                        <div class="service_title">
                            <h3 class="text-white">seo</h3>
                        </div>
                        <div class="service_details">
                            <div id="seo"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="my_service">
                    <div class="single_service">
                        <div class="service_title">
                            <h3 class="text-white">Web design</h3>
                        </div>
                        <div class="service_details">
                            <div id="design"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!--End service area-->

<!--Start portfolio area-->
<section class="portfolio_area clas100" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section_title padd_bott">
                    <h2>our recent project</h2>
                </div>
            </div>
        </div>
        <div class="portfolio_items">
            <div class="row">

                @foreach($projects as $project)
                    <div class="col-md-4 col-sm-6 mix webdesign text-center mb-20 text-capitalize">

                        <a href="{{ $project->url }}" target="_blank" data-title="{{ $project->name }}" class="d-block">
                            <span class="bg_mac">
                                <span class="portfolio_screen" style="background-image: url('{{ url('/uploads/'.$project->image) }}')"></span>
                            </span>
                        </a>
                        <a href="{{ $project->pro_url }}" target="_blank" class="btn btn_border">{{ $project->name }}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section><!--End portfolio area-->

<!--Start client area-->
<section class="client_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-20">
                <h2 class="text-white">Our Team</h2>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="clients_says owl-carousel client_overlay">
                    @foreach( $teams as $team)
                        <div class="single_client">
                            <div class="client_image_area">
                                <img src="{{ url('/uploads/' . $team->image) }}" alt="{{ $team->name }}">
                            </div>
                            <div class="client_details">
                                <h5>{{ $team->name }}<span>{{ $team->position }}</span></h5>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section><!--End client area-->

<!--Start blog area-->
<!--Start person quote-->
<div class="user_quote  background video-background player " data-property="{videoURL:'https://www.youtube.com/watch?v=EfTUpvxEbqc', containment:'self', showControls:false, ratio:'16/9', quality: 'default', opacity:.8, autoPlay:true, mute:true, startAt:0, realfullscreen: true}">
    <div class="quote_overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="quote_tile">
                        <p> " Success is simple. Do what’s right, the right way, at the right time. " </p>
                        <p class="quote">-Arnold H. Glasgow-</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--End person quote-->
<!--Start contact area-->
<section class="contact_area clas100" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="section_title padd_bott">
                    <h2>Contact</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-5">
                <div class="contact_information">
                    <div class="single_contact_info">
                        <div class="contact_info_icon"> <i class="fa fa-map-marker" aria-hidden="true"></i> </div>
                        <div class="info_details">
                            <h4 class="info_title">Address</h4>
                            <span>
                                        Baku
                                        <br>
                                        Azerbaijan
                                    </span>
                        </div>
                    </div>
                    <div class="single_contact_info">
                        <div class="contact_info_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
                        <div class="info_details">
                            <h4 class="info_title">Phone</h4>
                            <span>
                                (+994 50) 425 66 26
                            </span>
                        </div>
                    </div>
                    <div class="single_contact_info">
                        <div class="contact_info_icon">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="info_details">
                            <h4 class="info_title">Mail</h4>
                            <span>
                                        contact@alberto.com
                                        <br>
                                        name@site.com
                                    </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-7">
                <div class="form_area">
                    @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form action="{{ route('contacts_mail') }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="cap_check" required style="display: none">

                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="single_input">
                                    <input type="text" name="name" placeholder="name" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="single_input">
                                    <input type="text" name="address" placeholder="address" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="single_input">
                                    <input type="email" name="email" placeholder="email address" required="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="single_input">
                                    <input type="text" name="phone_number" placeholder="phone number" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="single_text_area">
                                    <textarea name="message" placeholder="Your Message" required></textarea>
                                </div>
                                <div class="send ">
                                    <input type="submit" value="Send Message" name="submit">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section><!--End contact area-->

<!--Start footer area-->
<footer class="footer_area footer_pb bg_color">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="widget_blok">
                    <div class="widget_title txt_center">
                        <p> &copy; {{ date('Y') }} All Rights Reserved.</p>
                    </div>
                    <div class="widget_social_icon txt_center">
                        <div class="single_icon">
                            <a href="#"> <i class="fa fa-pinterest-p" aria-hidden="true"></i> </a>
                        </div>
                        <div class="single_icon">
                            <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i> </a>
                        </div>
                        <div class="single_icon">
                            <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer> <!--End footer area-->

<!--Scroll to top-->
<div class="scrolltp">
    <i class="fa fa-chevron-up" aria-hidden="true"></i>
</div>

<!--main js-->
<script src="{{ url('/client/js/jquery-1.12.4.min.js') }}"></script>
<!--boostrap js-->
<script src="{{ url('/client/js/bootstrap.min.js') }}"></script>
<!-- owl-carousel js-->
<script src="{{ url('/client/js/owl.carousel.min.js') }}"></script>
<!--particle js-->
<script src="{{ url('/client/js/particles.min.js') }}"></script>
<!--venubox js-->
<script src="{{ url('/client/js/venobox.min.js') }}"></script>
<!--mixitup js-->
<script src="{{ url('/client/js/mixitup.min.js') }}"></script>
<script src="{{ url('/client/js/progressbar.js') }}"></script>
<!--video player js-->
<script src="{{ url('/client/js/jquery.mb.YTPlayer.min.js') }}"></script>
<!--app js-->
<script src="{{ url('/client/js/app.js') }}"></script>
<!-- custom js-->
<script src="{{ url('/client/js/main.js') }}"></script>
</body>

</html>

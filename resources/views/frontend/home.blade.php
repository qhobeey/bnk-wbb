@extends('layouts.front')

@section('content')


<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div>
    <!-- /.sticky-header__content -->
</div>
<!-- /.stricky-header -->

<!--Main Slider Start-->
<section id="home" class="main-slider main-slider-style1">
    <div
        class="swiper-container thm-swiper__slider"
        data-swiper-options='{"slidesPerView": 1, "loop": true,
    "effect": "fade",
    "pagination": {
    "el": "#main-slider-pagination",
    "type": "bullets",
    "clickable": true
    },
    "navigation": {
    "nextEl": "#main-slider__swiper-button-next",
    "prevEl": "#main-slider__swiper-button-prev"
    },
    "autoplay": {
    "delay": 5000
    }}'
    >
        <div class="swiper-wrapper">
            <div class="slider-buttom-box">
                <a class="style2" href="#">Make Payment <span class="icon-play-button"></span></a>
                <a href="#">Make an Enquiry <span class="icon-play-button"></span></a>
            </div>

            <!--Start Single Swiper Slide-->
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(/front/assets/images/slides/slide-v1-1.jpg);"></div>
                <div class="main-slider-style1__shape1" style="background-image: url(/front/assets/images/shapes/slider-1-shape-1.png);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider-content">
                                <div class="main-slider-content__inner">
                                    <div class="big-title">
                                        <h2>
                                            Bank with the<br />
                                            Happiest Customers<br />
                                            in the World
                                        </h2>
                                    </div>
                                    <div class="text">
                                        <p>
                                            On the other hand, we denounce with righteous indignation<br />
                                            and dislike men who are so beguiled.
                                        </p>
                                    </div>
                                    <div class="btns-box">
                                        <a class="btn-one" href="add-property.html">
                                            <span class="txt">
                                                Make an Appointment
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Swiper Slide-->

            <!--Start Single Swiper Slide-->
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(/front/assets/images/slides/slide-v1-2.jpg);"></div>
                <div class="main-slider-style1__shape1" style="background-image: url(/front/assets/images/shapes/slider-1-shape-1.png);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider-content">
                                <div class="main-slider-content__inner">
                                    <div class="big-title">
                                        <h2>
                                            Banking Made<br />
                                            Easy, More Secure &<br />
                                            More Personal
                                        </h2>
                                    </div>
                                    <div class="text">
                                        <p>
                                            Their duty through weakness of will, which is the same as<br />
                                            saying through shrinking from toil.
                                        </p>
                                    </div>
                                    <div class="btns-box">
                                        <a class="btn-one" href="add-property.html">
                                            <span class="txt">
                                                Make an Appointment
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Swiper Slide-->

            <!--Start Single Swiper Slide-->
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(/front/assets/images/slides/slide-v1-3.jpg);"></div>
                <div class="main-slider-style1__shape1" style="background-image: url(/front/assets/images/shapes/slider-1-shape-1.png);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider-content">
                                <div class="main-slider-content__inner">
                                    <div class="big-title">
                                        <h2>
                                            An Innovative<br />
                                            Framework for Your<br />
                                            Financial solutions
                                        </h2>
                                    </div>
                                    <div class="text">
                                        <p>
                                            Their duty through weakness of will, which is the same as<br />
                                            saying through shrinking from toil.
                                        </p>
                                    </div>
                                    <div class="btns-box">
                                        <a class="btn-one" href="add-property.html">
                                            <span class="txt">
                                                Make an Appointment
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Swiper Slide-->
        </div>

        <!-- If we need navigation buttons -->
        <div class="main-slider__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                <i class="icon-chevron left"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                <i class="icon-chevron right"></i>
            </div>
        </div>
    </div>
</section>
<!--Main Slider End-->

<!--Start Intro Style1 Area-->
<section id="about" class="intro-style1-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="intro-style1-video-gallery">
                    <div class="intro-style1-video-gallery-bg" style="background-image: url(/front/assets/images/resources/intro-style1-video-gallery.jpg);"></div>
                    <div class="intro-video-gallery-style1">
                        <div class="icon wow zoomIn animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <a class="video-popup" title="Video Gallery" href="https://www.youtube.com/watch?v=06dV9txztKY">
                                <span class="icon-play-button-1"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="intro-style1-content-box">
                    <div class="sec-title">
                        <h2>
                            Known for Trust,<br />
                            Honesty & Customer<br />
                            Support
                        </h2>
                    </div>
                    <div class="text">
                        <p>Belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish.</p>

                        <p>Choice is untrammelled and when nothing prevents our being able to do what we like best every pleasure is to be welcomed.</p>
                    </div>

                    <div class="row">
                        <!--Start Intro Style1 Single Box-->
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="intro-style1-single-box">
                                <div class="img-box">
                                    <div class="img-box-inner">
                                        <img src="/front/assets/images/resources/intro-style1-1.jpg" alt="" />
                                    </div>
                                    <div class="overlay-text">
                                        <h3>Our Journey</h3>
                                    </div>
                                </div>
                                <div class="title-box">
                                    <h3><a href="#">For Over Four Decades Our Bank</a></h3>
                                </div>
                            </div>
                        </div>
                        <!--End Intro Style1 Single Box-->
                        <!--Start Intro Style1 Single Box-->
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="intro-style1-single-box">
                                <div class="img-box">
                                    <div class="img-box-inner">
                                        <img src="/front/assets/images/resources/intro-style1-2.jpg" alt="" />
                                    </div>
                                    <div class="overlay-text">
                                        <h3>Our Team</h3>
                                    </div>
                                </div>
                                <div class="title-box">
                                    <h3><a href="#">Passion & Professional Management</a></h3>
                                </div>
                            </div>
                        </div>
                        <!--End Intro Style1 Single Box-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Intro Style1 Area-->

<!--Start Features Style1 Area-->
<section class="features-style1-area">
    <div class="container">
        <div class="sec-title text-center">
            <h2>Bank for a Better Tomorrow</h2>
            <div class="sub-title">
                <p>Committed to helping our customers succeed.</p>
            </div>
        </div>
        <div class="features-style1-content">
            <ul class="clearfix">
                <!--Start Single Features Style1 Box-->
                <li>
                    <div class="single-features-style1-box">
                        <div class="shape-left">
                            <img src="/front/assets/images/shapes/shape-1.png" alt="" />
                        </div>
                        <div class="shape-bottom">
                            <img src="/front/assets/images/shapes/shape-2.png" alt="" />
                        </div>
                        <div class="counting-box">
                            <div class="counting-box-bg" style="background-image: url(/front/assets/images/shapes/counting-box-bg.png);"></div>
                            <h3>01</h3>
                        </div>
                        <div class="text-box">
                            <h4>Fixed Depost</h4>
                            <h3>Fixed Returns with Peace of Mind</h3>
                            <p>Must explain to you how work mistaken give you complete guide.</p>
                            <div class="btn-box">
                                <a href="#">
                                    Read More
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <!--End Single Features Style1 Box-->
                <!--Start Single Features Style1 Box-->
                <li>
                    <div class="single-features-style1-box">
                        <div class="shape-left">
                            <img src="/front/assets/images/shapes/shape-1.png" alt="" />
                        </div>
                        <div class="shape-bottom">
                            <img src="/front/assets/images/shapes/shape-2.png" alt="" />
                        </div>
                        <div class="counting-box">
                            <div class="counting-box-bg" style="background-image: url(/front/assets/images/shapes/counting-box-bg.png);"></div>
                            <h3>02</h3>
                        </div>
                        <div class="text-box">
                            <h4>Current Account</h4>
                            <h3>Banking Solutions for a Business</h3>
                            <p>No one rejects dislikes avoids pleasures because it is pleasure trivial.</p>
                            <div class="btn-box">
                                <a href="#">
                                    Read More
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <!--End Single Features Style1 Box-->
                <!--Start Single Features Style1 Box-->
                <li>
                    <div class="single-features-style1-box">
                        <div class="shape-left">
                            <img src="/front/assets/images/shapes/shape-1.png" alt="" />
                        </div>
                        <div class="shape-bottom">
                            <img src="/front/assets/images/shapes/shape-2.png" alt="" />
                        </div>
                        <div class="counting-box">
                            <div class="counting-box-bg" style="background-image: url(/front/assets/images/shapes/counting-box-bg.png);"></div>
                            <h3>03</h3>
                        </div>
                        <div class="text-box">
                            <h4>Mutual Funds</h4>
                            <h3>Our Strategies for Better Returns</h3>
                            <p>Except obtain some advantages from it But who has any right to find enjoy.</p>
                            <div class="btn-box">
                                <a href="#">
                                    Read More
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <!--End Single Features Style1 Box-->
            </ul>
        </div>
    </div>
</section>
<!--End Features Style1 Area-->

<!--Start Service Style1 Area-->
<section id="service" class="service-style1-area">
    <div class="service-style1-bg" style="background-image: url(/front/assets/images/backgrounds/service-style1.jpg);"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="service-style1-title">
                    <div class="sec-title">
                        <h2>Banking For Your Needs</h2>
                        <div class="sub-title">
                            <p>The bank that builds better relationships.</p>
                        </div>
                    </div>
                    <div class="get-assistant-box">
                        <a href="#"><span class="icon-chatting"></span></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="service-style1-tab">
                    <!--Start Service Style1 Tab Button-->
                    <div class="service-style1-tab__button">
                        <ul class="tabs-button-box clearfix">
                            <li data-tab="#individuals" class="tab-btn-item">
                                <div class="inner">
                                    <div class="left">
                                        <h4>Banking for</h4>
                                        <h3>Individuals</h3>
                                    </div>
                                    <div class="right">
                                        <span class="icon-down-arrow"></span>
                                    </div>
                                </div>
                            </li>
                            <li data-tab="#companies" class="tab-btn-item active-btn-item">
                                <div class="inner">
                                    <div class="left">
                                        <h4>Banking for</h4>
                                        <h3>Companies</h3>
                                    </div>
                                    <div class="right">
                                        <span class="icon-down-arrow"></span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--End Service Style1 Tab Button-->

                    <!--Start Tabs Content Box-->
                    <div class="tabs-content-box">
                        <!--Tab-->
                        <div class="tab-content-box-item" id="individuals">
                            <div class="service-style1-tab-content-box-item">
                                <div class="row">
                                    <!--Start Single Service Box Style1-->
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="single-service-box-style1">
                                            <div class="icon">
                                                <span class="icon-safebox"></span>
                                            </div>
                                            <h3><a href="#">Savings & CDs</a></h3>
                                            <div class="border-box"></div>
                                            <p>Take trivial example which of us ever all undertakes laborious.</p>
                                            <h6><span>*</span> Interest rate up to 5% p.a</h6>
                                            <div class="btn-box">
                                                <a href="#"><span class="icon-right-arrow"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Single Service Box Style1-->
                                    <!--Start Single Service Box Style1-->
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="single-service-box-style1">
                                            <div class="icon">
                                                <span class="icon-online"></span>
                                            </div>
                                            <h3><a href="#">Online & Mobile</a></h3>
                                            <div class="border-box"></div>
                                            <p>Equal blame belongs to those who fail their duty through weakness.</p>
                                            <h6><span>*</span> Terms & Conditions</h6>
                                            <div class="btn-box">
                                                <a href="#"><span class="icon-right-arrow"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Single Service Box Style1-->
                                    <!--Start Single Service Box Style1-->
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="single-service-box-style1">
                                            <div class="icon">
                                                <span class="icon-loan"></span>
                                            </div>
                                            <h3><a href="#">Consumer Loans</a></h3>
                                            <div class="border-box"></div>
                                            <p>Duty or the obligations of business will frequently occur repudiated.</p>
                                            <h6><span>*</span> Check today’s Interest Rates</h6>
                                            <div class="btn-box">
                                                <a href="#"><span class="icon-right-arrow"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Single Service Box Style1-->
                                </div>
                            </div>
                        </div>

                        <!--Tab-->
                        <div class="tab-content-box-item tab-content-box-item-active" id="companies">
                            <div class="service-style1-tab-content-box-item">
                                <div class="row">
                                    <!--Start Single Service Box Style1-->
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="single-service-box-style1">
                                            <div class="icon">
                                                <span class="icon-safebox"></span>
                                            </div>
                                            <h3><a href="#">Savings & CDs</a></h3>
                                            <div class="border-box"></div>
                                            <p>Take trivial example which of us ever all undertakes laborious.</p>
                                            <h6><span>*</span> Interest rate up to 5% p.a</h6>
                                            <div class="btn-box">
                                                <a href="#"><span class="icon-right-arrow"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Single Service Box Style1-->
                                    <!--Start Single Service Box Style1-->
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="single-service-box-style1">
                                            <div class="icon">
                                                <span class="icon-online"></span>
                                            </div>
                                            <h3><a href="#">Online & Mobile</a></h3>
                                            <div class="border-box"></div>
                                            <p>Equal blame belongs to those who fail their duty through weakness.</p>
                                            <h6><span>*</span> Terms & Conditions</h6>
                                            <div class="btn-box">
                                                <a href="#"><span class="icon-right-arrow"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Single Service Box Style1-->
                                    <!--Start Single Service Box Style1-->
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="single-service-box-style1">
                                            <div class="icon">
                                                <span class="icon-loan"></span>
                                            </div>
                                            <h3><a href="#">Consumer Loans</a></h3>
                                            <div class="border-box"></div>
                                            <p>Duty or the obligations of business will frequently occur repudiated.</p>
                                            <h6><span>*</span> Check today’s Interest Rates</h6>
                                            <div class="btn-box">
                                                <a href="#"><span class="icon-right-arrow"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Single Service Box Style1-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Tabs Content Box-->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="service-style1__btns-box text-center">
                    <a class="btn-one" href="#">
                        <span class="txt">View All Services</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Service Style1 Area-->

<!--Start Features Style3 Area-->
<section class="features-style3-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="features-style3-img-box">
                    <div class="inner-img">
                        <img class="paroller" src="/front/assets/images/resources/features-style3-img.png" alt="" />
                    </div>
                    <div class="icon-holder float-bob-y">
                        <span class="icon-interest-rate"></span>
                    </div>
                    <div class="icon-holder two">
                        <span class="icon-online-shop"></span>
                    </div>
                    <div class="icon-holder three">
                        <span class="icon-theater"></span>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="features-style3-content">
                    <div class="sec-title">
                        <h2>
                            Personalize Your<br />
                            Card and Stand Out<br />
                            From Crowd
                        </h2>
                        <div class="sub-title">
                            <p>Desire that they cannot foresee the pain & trouble that are bound too ensue equal blame belongs through shrinking.</p>
                        </div>
                    </div>
                    <div class="text-box">
                        <ul>
                            <li>
                                <div class="icon">
                                    <span class="icon-checkbox-mark"></span>
                                </div>
                                <p>Great explorer of the master-builder</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-checkbox-mark"></span>
                                </div>
                                <p>Great explorer of the master-builder</p>
                            </li>
                        </ul>
                        <div class="apply-credit-card">
                            <h3>Apply for Credit Card</h3>
                            <form id="apply-credit-card" name="apply-credit-card" action="#" method="post">
                                <div class="input-box">
                                    <input type="text" name="form_name" value="" placeholder="Name" required="" />
                                </div>
                                <div class="button-box">
                                    <button class="btn-one" type="submit" data-loading-text="Please wait...">
                                        <span class="txt">Apply Now</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Features Style3 Area-->

<!--Start Money Exchange Rates Area-->
<section class="money-exchange-value-area">
    <div class="money-exchange-value-area-bg" style="background-image: url(/front/assets/images/backgrounds/money-exchange-value.jpg);"></div>
    <div class="container">
        <div class="sec-title text-center">
            <h2>Foreign Exchange Rates</h2>
            <div class="sub-title">
                <p>Denouncing pleasure & praising pain was born.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="money-exchange-value-tab">
                    <!--Start Money Exchange Value Tab Button-->
                    <div class="money-exchange-value-tab__button">
                        <ul class="tabs-button-box">
                            <li data-tab="#money-send-receive" class="tab-btn-item active-btn-item">
                                <h3>Money Send & Receive</h3>
                            </li>
                            <li data-tab="#load-redeem-forex-card" class="tab-btn-item">
                                <h3>Load & Redeem Forex Card</h3>
                            </li>
                        </ul>
                        <div class="right">
                            <a href="#"><span class="icon-menu"></span>Click to Get Assistant</a>
                        </div>
                    </div>
                    <!--End Money Exchange Value Tab Button-->

                    <!--Start Tabs Content Box-->
                    <div class="tabs-content-box">
                        <!--Tab-->
                        <div class="tab-content-box-item tab-content-box-item-active" id="money-send-receive">
                            <div class="money-exchange-value-tab-content-box-item">
                                <div class="row">
                                    <!--Start Single Money Exchange Value-->
                                    <div class="col-xl-2 col-lg-4 col-md-4">
                                        <div class="single-money-exchange-value">
                                            <div class="flag-box">
                                                <div class="flag-box-inner">
                                                    <img src="/front/assets/images/resources/flag-1.png" alt="" />
                                                </div>
                                            </div>
                                            <h3>usd</h3>
                                            <ul>
                                                <li>
                                                    <div class="left">
                                                        <p>Send</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>79.89</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="left">
                                                        <p>Receive</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>76.54</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End Single Money Exchange Value-->
                                    <!--Start Single Money Exchange Value-->
                                    <div class="col-xl-2 col-lg-4 col-md-4">
                                        <div class="single-money-exchange-value">
                                            <div class="flag-box">
                                                <div class="flag-box-inner">
                                                    <img src="/front/assets/images/resources/flag-2.png" alt="" />
                                                </div>
                                            </div>
                                            <h3>sek</h3>
                                            <ul>
                                                <li>
                                                    <div class="left">
                                                        <p>Send</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>8.20</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="left">
                                                        <p>Receive</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>7.25</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End Single Money Exchange Value-->
                                    <!--Start Single Money Exchange Value-->
                                    <div class="col-xl-2 col-lg-4 col-md-4">
                                        <div class="single-money-exchange-value">
                                            <div class="flag-box">
                                                <div class="flag-box-inner">
                                                    <img src="/front/assets/images/resources/flag-3.png" alt="" />
                                                </div>
                                            </div>
                                            <h3>gbp</h3>
                                            <ul>
                                                <li>
                                                    <div class="left">
                                                        <p>Send</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>101.88</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="left">
                                                        <p>Receive</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>96.55</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End Single Money Exchange Value-->
                                    <!--Start Single Money Exchange Value-->
                                    <div class="col-xl-2 col-lg-4 col-md-4">
                                        <div class="single-money-exchange-value">
                                            <div class="flag-box">
                                                <div class="flag-box-inner">
                                                    <img src="/front/assets/images/resources/flag-4.png" alt="" />
                                                </div>
                                            </div>
                                            <h3>jpy</h3>
                                            <ul>
                                                <li>
                                                    <div class="left">
                                                        <p>Send</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>62.82</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="left">
                                                        <p>Receive</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>58.46</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End Single Money Exchange Value-->
                                    <!--Start Single Money Exchange Value-->
                                    <div class="col-xl-2 col-lg-4 col-md-4">
                                        <div class="single-money-exchange-value">
                                            <div class="flag-box">
                                                <div class="flag-box-inner">
                                                    <img src="/front/assets/images/resources/flag-5.png" alt="" />
                                                </div>
                                            </div>
                                            <h3>aud</h3>
                                            <ul>
                                                <li>
                                                    <div class="left">
                                                        <p>Send</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>57.52</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="left">
                                                        <p>Receive</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>54.21</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End Single Money Exchange Value-->
                                    <!--Start Single Money Exchange Value-->
                                    <div class="col-xl-2 col-lg-4 col-md-4">
                                        <div class="single-money-exchange-value">
                                            <div class="flag-box">
                                                <div class="flag-box-inner">
                                                    <img src="/front/assets/images/resources/flag-6.png" alt="" />
                                                </div>
                                            </div>
                                            <h3>cad</h3>
                                            <ul>
                                                <li>
                                                    <div class="left">
                                                        <p>Send</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>63.41</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="left">
                                                        <p>Receive</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>59.75</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End Single Money Exchange Value-->
                                </div>
                            </div>
                        </div>

                        <!--Tab-->
                        <div class="tab-content-box-item" id="load-redeem-forex-card">
                            <div class="money-exchange-value-tab-content-box-item">
                                <div class="row">
                                    <!--Start Single Money Exchange Value-->
                                    <div class="col-xl-2 col-lg-4 col-md-4">
                                        <div class="single-money-exchange-value">
                                            <div class="flag-box">
                                                <div class="flag-box-inner">
                                                    <img src="/front/assets/images/resources/flag-4.png" alt="" />
                                                </div>
                                            </div>
                                            <h3>jpy</h3>
                                            <ul>
                                                <li>
                                                    <div class="left">
                                                        <p>Send</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>62.82</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="left">
                                                        <p>Receive</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>58.46</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End Single Money Exchange Value-->
                                    <!--Start Single Money Exchange Value-->
                                    <div class="col-xl-2 col-lg-4 col-md-4">
                                        <div class="single-money-exchange-value">
                                            <div class="flag-box">
                                                <div class="flag-box-inner">
                                                    <img src="/front/assets/images/resources/flag-5.png" alt="" />
                                                </div>
                                            </div>
                                            <h3>aud</h3>
                                            <ul>
                                                <li>
                                                    <div class="left">
                                                        <p>Send</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>57.52</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="left">
                                                        <p>Receive</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>54.21</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End Single Money Exchange Value-->
                                    <!--Start Single Money Exchange Value-->
                                    <div class="col-xl-2 col-lg-4 col-md-4">
                                        <div class="single-money-exchange-value">
                                            <div class="flag-box">
                                                <div class="flag-box-inner">
                                                    <img src="/front/assets/images/resources/flag-6.png" alt="" />
                                                </div>
                                            </div>
                                            <h3>cad</h3>
                                            <ul>
                                                <li>
                                                    <div class="left">
                                                        <p>Send</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>63.41</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="left">
                                                        <p>Receive</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>59.75</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End Single Money Exchange Value-->
                                    <!--Start Single Money Exchange Value-->
                                    <div class="col-xl-2 col-lg-4 col-md-4">
                                        <div class="single-money-exchange-value">
                                            <div class="flag-box">
                                                <div class="flag-box-inner">
                                                    <img src="/front/assets/images/resources/flag-1.png" alt="" />
                                                </div>
                                            </div>
                                            <h3>usd</h3>
                                            <ul>
                                                <li>
                                                    <div class="left">
                                                        <p>Send</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>79.89</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="left">
                                                        <p>Receive</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>76.54</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End Single Money Exchange Value-->
                                    <!--Start Single Money Exchange Value-->
                                    <div class="col-xl-2 col-lg-4 col-md-4">
                                        <div class="single-money-exchange-value">
                                            <div class="flag-box">
                                                <div class="flag-box-inner">
                                                    <img src="/front/assets/images/resources/flag-2.png" alt="" />
                                                </div>
                                            </div>
                                            <h3>sek</h3>
                                            <ul>
                                                <li>
                                                    <div class="left">
                                                        <p>Send</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>8.20</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="left">
                                                        <p>Receive</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>7.25</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End Single Money Exchange Value-->
                                    <!--Start Single Money Exchange Value-->
                                    <div class="col-xl-2 col-lg-4 col-md-4">
                                        <div class="single-money-exchange-value">
                                            <div class="flag-box">
                                                <div class="flag-box-inner">
                                                    <img src="/front/assets/images/resources/flag-3.png" alt="" />
                                                </div>
                                            </div>
                                            <h3>gbp</h3>
                                            <ul>
                                                <li>
                                                    <div class="left">
                                                        <p>Send</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>101.88</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="left">
                                                        <p>Receive</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>96.55</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End Single Money Exchange Value-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Tabs Content Box-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Money Exchange Rates Area-->

<!--Start Blog Style2 Area-->
<section id="news" class="blog-style2-area pdb60">
    <div class="container">
        <div class="sec-title text-center">
            <h2>Latest From News Room</h2>
            <div class="sub-title">
                <p>Our blog post provides you all the updates & guides.</p>
            </div>
        </div>
        <div class="row">
            <!--Start Single blog Style2-->
            <div class="col-xl-6">
                <div class="single-blog-style1 single-blog-style1--style2">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="/front/assets/images/blog/blog-v2-1.jpg" alt="" />
                            <div class="overlay-icon">
                                <a href="blog-single.html">
                                    <span class="icon-right-arrow"></span>
                                </a>
                            </div>
                        </div>
                        <div class="category-date-box">
                            <div class="category">
                                <span class="icon-play-button-1"></span>
                                <h5>Banking</h5>
                            </div>
                            <div class="date">
                                <h5>May 29, 2022</h5>
                            </div>
                            <div class="author">
                                <h5>By <a href="#">Henry Theo</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="text-holder">
                        <h3 class="blog-title">
                            <a href="blog-single.html">
                                How Non-US Citizens can Open<br />
                                a Bank Account
                            </a>
                        </h3>
                        <div class="bottom">
                            <div class="read-more-btn">
                                <a href="blog-single.html"><span class="icon-right-arrow"></span>Read More</a>
                            </div>
                            <div class="meta-box">
                                <ul class="meta-info">
                                    <li><span class="icon-clock"></span> <a href="#">6 Mins Read</a></li>
                                    <li><span class="icon-comment"></span> <a href="#">10 Cmnts</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single blog Style2-->

            <!--Start Single blog Style2-->
            <div class="col-xl-6">
                <div class="single-blog-style1 single-blog-style1--style2">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="/front/assets/images/blog/blog-v2-2.jpg" alt="" />
                            <div class="overlay-icon">
                                <a href="blog-single.html">
                                    <span class="icon-right-arrow"></span>
                                </a>
                            </div>
                        </div>
                        <div class="category-date-box">
                            <div class="category">
                                <span class="icon-play-button-1"></span>
                                <h5>Press Release</h5>
                            </div>
                            <div class="date">
                                <h5>May 25, 2022</h5>
                            </div>
                            <div class="author">
                                <h5>By <a href="#">Roman Frederick</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="text-holder">
                        <h3 class="blog-title">
                            <a href="blog-single.html">
                                Board Approves Capital Raise of<br />
                                Rs. 2000 Crores
                            </a>
                        </h3>
                        <div class="bottom">
                            <div class="read-more-btn">
                                <a href="blog-single.html"><span class="icon-right-arrow"></span>Read More</a>
                            </div>
                            <div class="meta-box">
                                <ul class="meta-info">
                                    <li><span class="icon-clock"></span> <a href="#">6 Mins Read</a></li>
                                    <li><span class="icon-comment"></span> <a href="#">10 Cmnts</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single blog Style2-->
        </div>
    </div>
</section>
<!--End Blog Style2 Area-->

<!--Start Features Style2 Area-->
<section class="features-style2-area">
    <div class="container">
        <div class="sec-title text-center">
            <h2>Emergency Service Requests</h2>
            <div class="sub-title">
                <p>List of banking service requests all in one place.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="features-style2-content">
                    <!--Start Features Style2 Tab-->
                    <div class="features-style2-tab">
                        <!--Start Features Style2 Tab Button-->
                        <div class="features-style2-tab__button">
                            <ul
                                class="owl-carousel owl-theme thm-owl__carousel features-style2-carousel owl-nav-style-one tabs-button-box"
                                data-owl-options='{
                                    "loop": false,
                                    "autoplay": false,
                                    "margin": 0,
                                    "nav": true,
                                    "dots": false,
                                    "smartSpeed": 500,
                                    "autoplayTimeout": 10000,
                                    "navText": ["<span class=\"left icon-right-arrow\"></span>","<span class=\"right icon-right-arrow\"></span>"],
                                    "responsive": {
                                            "0": {
                                                "items": 1
                                            },
                                            "768": {
                                                "items": 2
                                            },
                                            "992": {
                                                "items": 3
                                            },
                                            "1200": {
                                                "items": 4
                                            }
                                        }
                                    }'
                            >
                                <li data-tab="#tabid11" class="tab-btn-item active-btn-item clearfix">
                                    <div class="single-features-box-style2">
                                        <div class="icon">
                                            <span class="icon-credit-card"></span>
                                        </div>
                                        <div class="title">
                                            <h3>
                                                <a href="#">
                                                    Credit / Debit Card<br />
                                                    Related
                                                </a>
                                            </h3>
                                        </div>
                                        <div class="arrow-button">
                                            <a href="#">
                                                <span class="icon-chevron"></span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li data-tab="#tabid22" class="tab-btn-item clearfix">
                                    <div class="single-features-box-style2">
                                        <div class="icon">
                                            <span class="icon-computer"></span>
                                        </div>
                                        <div class="title">
                                            <h3>
                                                <a href="#">
                                                    Mobile / Internet<br />
                                                    Banking
                                                </a>
                                            </h3>
                                        </div>
                                        <div class="arrow-button">
                                            <a href="#">
                                                <span class="icon-chevron"></span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li data-tab="#tabid33" class="tab-btn-item clearfix">
                                    <div class="single-features-box-style2">
                                        <div class="icon">
                                            <span class="icon-book"></span>
                                        </div>
                                        <div class="title">
                                            <h3>
                                                <a href="#">
                                                    Account Details<br />
                                                    Changing
                                                </a>
                                            </h3>
                                        </div>
                                        <div class="arrow-button">
                                            <a href="#">
                                                <span class="icon-chevron"></span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li data-tab="#tabid44" class="tab-btn-item clearfix">
                                    <div class="single-features-box-style2">
                                        <div class="icon">
                                            <span class="icon-check-book"></span>
                                        </div>
                                        <div class="title">
                                            <h3>
                                                <a href="#">
                                                    Cheque Book / DD<br />
                                                    Related
                                                </a>
                                            </h3>
                                        </div>
                                        <div class="arrow-button">
                                            <a href="#">
                                                <span class="icon-chevron"></span>
                                            </a>
                                        </div>
                                    </div>
                                </li>

                                <li data-tab="#tabid55" class="tab-btn-item clearfix">
                                    <div class="single-features-box-style2">
                                        <div class="icon">
                                            <span class="icon-credit-card"></span>
                                        </div>
                                        <div class="title">
                                            <h3>
                                                <a href="#">
                                                    Credit / Debit Card<br />
                                                    Related
                                                </a>
                                            </h3>
                                        </div>
                                        <div class="arrow-button">
                                            <a href="#">
                                                <span class="icon-chevron"></span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li data-tab="#tabid66" class="tab-btn-item clearfix">
                                    <div class="single-features-box-style2">
                                        <div class="icon">
                                            <span class="icon-computer"></span>
                                        </div>
                                        <div class="title">
                                            <h3>
                                                <a href="#">
                                                    Mobile / Internet<br />
                                                    Banking
                                                </a>
                                            </h3>
                                        </div>
                                        <div class="arrow-button">
                                            <a href="#">
                                                <span class="icon-chevron"></span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--End Features Style2 Tab Button-->

                        <!--Start Tabs Content Box-->
                        <div class="tabs-content-box">
                            <!--Tab-->
                            <div class="tab-content-box-item tab-content-box-item-active" id="tabid11">
                                <div class="features-style2-tab-content-box-item">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="features-style2-text-box">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            Block Debit / ATM Card
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Generate Debit Card Pin Number
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Unlock Debit / ATM Card
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Reissue Lost Debit / ATM Card
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="features-style2-banner-box">
                                                <div class="text-box">
                                                    <div
                                                        class="owl-carousel owl-theme thm-owl__carousel features-style2-banner-carousel owl-dot-style2"
                                                        data-owl-options='{
                                                            "loop": true,
                                                            "autoplay": false,
                                                            "margin": 0,
                                                            "nav": false,
                                                            "dots": true,
                                                            "smartSpeed": 500,
                                                            "autoplayTimeout": 10000,
                                                            "navText": ["<span class=\"left icon-right-arrow\"></span>","<span class=\"right icon-right-arrow\"></span>"],
                                                            "responsive": {
                                                                    "0": {
                                                                        "items": 1
                                                                    },
                                                                    "768": {
                                                                        "items": 1
                                                                    },
                                                                    "992": {
                                                                        "items": 1
                                                                    },
                                                                    "1200": {
                                                                        "items": 1
                                                                    }
                                                                }
                                                            }'
                                                    >
                                                        <!--Start Single Item-->
                                                        <div class="single-item">
                                                            <span class="icon-headphones"></span>
                                                            <h4>Call for</h4>
                                                            <h3>Private Banking</h3>
                                                            <h2>
                                                                <a href="tel:2512353256">+8 (222) 123 456 78</a>
                                                            </h2>
                                                        </div>
                                                        <!--End Single Item-->
                                                        <!--Start Single Item-->
                                                        <div class="single-item">
                                                            <span class="icon-headphones"></span>
                                                            <h4>Call for</h4>
                                                            <h3>Private Banking</h3>
                                                            <h2>
                                                                <a href="tel:2512353256">+8 (222) 123 456 78</a>
                                                            </h2>
                                                        </div>
                                                        <!--End Single Item-->
                                                        <!--Start Single Item-->
                                                        <div class="single-item">
                                                            <span class="icon-headphones"></span>
                                                            <h4>Call for</h4>
                                                            <h3>Private Banking</h3>
                                                            <h2>
                                                                <a href="tel:2512353256">+8 (222) 123 456 78</a>
                                                            </h2>
                                                        </div>
                                                        <!--End Single Item-->
                                                    </div>
                                                </div>
                                                <div class="img-box">
                                                    <div class="img-box-bg" style="background-image: url(/front/assets/images/resources/features-style2-banner-1.jpg);"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Tab-->
                            <div class="tab-content-box-item" id="tabid22">
                                <div class="features-style2-tab-content-box-item">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="features-style2-text-box">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            Mobile / Internet Banking
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Generate Debit Card Pin Number
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Unlock Debit / ATM Card
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Reissue Lost Debit / ATM Card
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="features-style2-banner-box">
                                                <div class="text-box">
                                                    <div
                                                        class="owl-carousel owl-theme thm-owl__carousel features-style2-banner-carousel owl-dot-style2"
                                                        data-owl-options='{
                                                            "loop": true,
                                                            "autoplay": false,
                                                            "margin": 0,
                                                            "nav": false,
                                                            "dots": true,
                                                            "smartSpeed": 500,
                                                            "autoplayTimeout": 10000,
                                                            "navText": ["<span class=\"left icon-right-arrow\"></span>","<span class=\"right icon-right-arrow\"></span>"],
                                                            "responsive": {
                                                                    "0": {
                                                                        "items": 1
                                                                    },
                                                                    "768": {
                                                                        "items": 1
                                                                    },
                                                                    "992": {
                                                                        "items": 1
                                                                    },
                                                                    "1200": {
                                                                        "items": 1
                                                                    }
                                                                }
                                                            }'
                                                    >
                                                        <!--Start Single Item-->
                                                        <div class="single-item">
                                                            <span class="icon-headphones"></span>
                                                            <h4>Call for</h4>
                                                            <h3>Private Banking</h3>
                                                            <h2>
                                                                <a href="tel:2512353256">+8 (222) 123 456 78</a>
                                                            </h2>
                                                        </div>
                                                        <!--End Single Item-->
                                                        <!--Start Single Item-->
                                                        <div class="single-item">
                                                            <span class="icon-headphones"></span>
                                                            <h4>Call for</h4>
                                                            <h3>Private Banking</h3>
                                                            <h2>
                                                                <a href="tel:2512353256">+8 (222) 123 456 78</a>
                                                            </h2>
                                                        </div>
                                                        <!--End Single Item-->
                                                        <!--Start Single Item-->
                                                        <div class="single-item">
                                                            <span class="icon-headphones"></span>
                                                            <h4>Call for</h4>
                                                            <h3>Private Banking</h3>
                                                            <h2>
                                                                <a href="tel:2512353256">+8 (222) 123 456 78</a>
                                                            </h2>
                                                        </div>
                                                        <!--End Single Item-->
                                                    </div>
                                                </div>
                                                <div class="img-box">
                                                    <div class="img-box-bg" style="background-image: url(/front/assets/images/resources/features-style2-banner-2.jpg);"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Tab-->
                            <div class="tab-content-box-item" id="tabid33">
                                <div class="features-style2-tab-content-box-item">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="features-style2-text-box">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            Account Details Changing
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Unlock Debit / ATM Card
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Generate Debit Card Pin Number
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Reissue Lost Debit / ATM Card
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="features-style2-banner-box">
                                                <div class="text-box">
                                                    <div
                                                        class="owl-carousel owl-theme thm-owl__carousel features-style2-banner-carousel owl-dot-style2"
                                                        data-owl-options='{
                                                            "loop": true,
                                                            "autoplay": false,
                                                            "margin": 0,
                                                            "nav": false,
                                                            "dots": true,
                                                            "smartSpeed": 500,
                                                            "autoplayTimeout": 10000,
                                                            "navText": ["<span class=\"left icon-right-arrow\"></span>","<span class=\"right icon-right-arrow\"></span>"],
                                                            "responsive": {
                                                                    "0": {
                                                                        "items": 1
                                                                    },
                                                                    "768": {
                                                                        "items": 1
                                                                    },
                                                                    "992": {
                                                                        "items": 1
                                                                    },
                                                                    "1200": {
                                                                        "items": 1
                                                                    }
                                                                }
                                                            }'
                                                    >
                                                        <!--Start Single Item-->
                                                        <div class="single-item">
                                                            <span class="icon-headphones"></span>
                                                            <h4>Call for</h4>
                                                            <h3>Private Banking</h3>
                                                            <h2>
                                                                <a href="tel:2512353256">+8 (222) 123 456 78</a>
                                                            </h2>
                                                        </div>
                                                        <!--End Single Item-->
                                                        <!--Start Single Item-->
                                                        <div class="single-item">
                                                            <span class="icon-headphones"></span>
                                                            <h4>Call for</h4>
                                                            <h3>Private Banking</h3>
                                                            <h2>
                                                                <a href="tel:2512353256">+8 (222) 123 456 78</a>
                                                            </h2>
                                                        </div>
                                                        <!--End Single Item-->
                                                        <!--Start Single Item-->
                                                        <div class="single-item">
                                                            <span class="icon-headphones"></span>
                                                            <h4>Call for</h4>
                                                            <h3>Private Banking</h3>
                                                            <h2>
                                                                <a href="tel:2512353256">+8 (222) 123 456 78</a>
                                                            </h2>
                                                        </div>
                                                        <!--End Single Item-->
                                                    </div>
                                                </div>
                                                <div class="img-box">
                                                    <div class="img-box-bg" style="background-image: url(/front/assets/images/resources/features-style2-banner-3.jpg);"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Tab-->
                            <div class="tab-content-box-item" id="tabid44">
                                <div class="features-style2-tab-content-box-item">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="features-style2-text-box">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            Cheque Book / DD Related
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Reissue Lost Debit / ATM Card
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Unlock Debit / ATM Card
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Generate Debit Card Pin Number
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="features-style2-banner-box">
                                                <div class="text-box">
                                                    <div
                                                        class="owl-carousel owl-theme thm-owl__carousel features-style2-banner-carousel owl-dot-style2"
                                                        data-owl-options='{
                                                            "loop": true,
                                                            "autoplay": false,
                                                            "margin": 0,
                                                            "nav": false,
                                                            "dots": true,
                                                            "smartSpeed": 500,
                                                            "autoplayTimeout": 10000,
                                                            "navText": ["<span class=\"left icon-right-arrow\"></span>","<span class=\"right icon-right-arrow\"></span>"],
                                                            "responsive": {
                                                                    "0": {
                                                                        "items": 1
                                                                    },
                                                                    "768": {
                                                                        "items": 1
                                                                    },
                                                                    "992": {
                                                                        "items": 1
                                                                    },
                                                                    "1200": {
                                                                        "items": 1
                                                                    }
                                                                }
                                                            }'
                                                    >
                                                        <!--Start Single Item-->
                                                        <div class="single-item">
                                                            <span class="icon-headphones"></span>
                                                            <h4>Call for</h4>
                                                            <h3>Private Banking</h3>
                                                            <h2>
                                                                <a href="tel:2512353256">+8 (222) 123 456 78</a>
                                                            </h2>
                                                        </div>
                                                        <!--End Single Item-->
                                                        <!--Start Single Item-->
                                                        <div class="single-item">
                                                            <span class="icon-headphones"></span>
                                                            <h4>Call for</h4>
                                                            <h3>Private Banking</h3>
                                                            <h2>
                                                                <a href="tel:2512353256">+8 (222) 123 456 78</a>
                                                            </h2>
                                                        </div>
                                                        <!--End Single Item-->
                                                        <!--Start Single Item-->
                                                        <div class="single-item">
                                                            <span class="icon-headphones"></span>
                                                            <h4>Call for</h4>
                                                            <h3>Private Banking</h3>
                                                            <h2>
                                                                <a href="tel:2512353256">+8 (222) 123 456 78</a>
                                                            </h2>
                                                        </div>
                                                        <!--End Single Item-->
                                                    </div>
                                                </div>
                                                <div class="img-box">
                                                    <div class="img-box-bg" style="background-image: url(/front/assets/images/resources/features-style2-banner-4.jpg);"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Tab-->
                            <div class="tab-content-box-item" id="tabid55">
                                <div class="features-style2-tab-content-box-item">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="features-style2-text-box">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            Cheque Book / DD Related
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Reissue Lost Debit / ATM Card
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Unlock Debit / ATM Card
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Generate Debit Card Pin Number
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="features-style2-banner-box">
                                                <div class="text-box">
                                                    <div
                                                        class="owl-carousel owl-theme thm-owl__carousel features-style2-banner-carousel owl-dot-style2"
                                                        data-owl-options='{
                                                            "loop": true,
                                                            "autoplay": false,
                                                            "margin": 0,
                                                            "nav": false,
                                                            "dots": true,
                                                            "smartSpeed": 500,
                                                            "autoplayTimeout": 10000,
                                                            "navText": ["<span class=\"left icon-right-arrow\"></span>","<span class=\"right icon-right-arrow\"></span>"],
                                                            "responsive": {
                                                                    "0": {
                                                                        "items": 1
                                                                    },
                                                                    "768": {
                                                                        "items": 1
                                                                    },
                                                                    "992": {
                                                                        "items": 1
                                                                    },
                                                                    "1200": {
                                                                        "items": 1
                                                                    }
                                                                }
                                                            }'
                                                    >
                                                        <!--Start Single Item-->
                                                        <div class="single-item">
                                                            <span class="icon-headphones"></span>
                                                            <h4>Call for</h4>
                                                            <h3>Private Banking</h3>
                                                            <h2>
                                                                <a href="tel:2512353256">+8 (222) 123 456 78</a>
                                                            </h2>
                                                        </div>
                                                        <!--End Single Item-->
                                                        <!--Start Single Item-->
                                                        <div class="single-item">
                                                            <span class="icon-headphones"></span>
                                                            <h4>Call for</h4>
                                                            <h3>Private Banking</h3>
                                                            <h2>
                                                                <a href="tel:2512353256">+8 (222) 123 456 78</a>
                                                            </h2>
                                                        </div>
                                                        <!--End Single Item-->
                                                        <!--Start Single Item-->
                                                        <div class="single-item">
                                                            <span class="icon-headphones"></span>
                                                            <h4>Call for</h4>
                                                            <h3>Private Banking</h3>
                                                            <h2>
                                                                <a href="tel:2512353256">+8 (222) 123 456 78</a>
                                                            </h2>
                                                        </div>
                                                        <!--End Single Item-->
                                                    </div>
                                                </div>
                                                <div class="img-box">
                                                    <div class="img-box-bg" style="background-image: url(/front/assets/images/resources/features-style2-banner-1.jpg);"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Tab-->
                            <div class="tab-content-box-item" id="tabid66">
                                <div class="features-style2-tab-content-box-item">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="features-style2-text-box">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            Cheque Book / DD Related
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Reissue Lost Debit / ATM Card
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Unlock Debit / ATM Card
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Generate Debit Card Pin Number
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="features-style2-banner-box">
                                                <div class="text-box">
                                                    <div
                                                        class="owl-carousel owl-theme thm-owl__carousel features-style2-banner-carousel owl-dot-style2"
                                                        data-owl-options='{
                                                            "loop": true,
                                                            "autoplay": false,
                                                            "margin": 0,
                                                            "nav": false,
                                                            "dots": true,
                                                            "smartSpeed": 500,
                                                            "autoplayTimeout": 10000,
                                                            "navText": ["<span class=\"left icon-right-arrow\"></span>","<span class=\"right icon-right-arrow\"></span>"],
                                                            "responsive": {
                                                                    "0": {
                                                                        "items": 1
                                                                    },
                                                                    "768": {
                                                                        "items": 1
                                                                    },
                                                                    "992": {
                                                                        "items": 1
                                                                    },
                                                                    "1200": {
                                                                        "items": 1
                                                                    }
                                                                }
                                                            }'
                                                    >
                                                        <!--Start Single Item-->
                                                        <div class="single-item">
                                                            <span class="icon-headphones"></span>
                                                            <h4>Call for</h4>
                                                            <h3>Private Banking</h3>
                                                            <h2>
                                                                <a href="tel:2512353256">+8 (222) 123 456 78</a>
                                                            </h2>
                                                        </div>
                                                        <!--End Single Item-->
                                                        <!--Start Single Item-->
                                                        <div class="single-item">
                                                            <span class="icon-headphones"></span>
                                                            <h4>Call for</h4>
                                                            <h3>Private Banking</h3>
                                                            <h2>
                                                                <a href="tel:2512353256">+8 (222) 123 456 78</a>
                                                            </h2>
                                                        </div>
                                                        <!--End Single Item-->
                                                        <!--Start Single Item-->
                                                        <div class="single-item">
                                                            <span class="icon-headphones"></span>
                                                            <h4>Call for</h4>
                                                            <h3>Private Banking</h3>
                                                            <h2>
                                                                <a href="tel:2512353256">+8 (222) 123 456 78</a>
                                                            </h2>
                                                        </div>
                                                        <!--End Single Item-->
                                                    </div>
                                                </div>
                                                <div class="img-box">
                                                    <div class="img-box-bg" style="background-image: url(/front/assets/images/resources/features-style2-banner-1.jpg);"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Tabs Content Box-->
                    </div>
                    <!--End Features Style2 Tab-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Features Style2 Area-->

<!--Start Main Contact Form Area-->
<section id="contact" class="main-contact-form-area pdb100">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="contact-info-box-style1">
                    <div class="box1"></div>
                    <div class="title">
                        <h2>
                            Get Support for<br />
                            any Queries or Complaints
                        </h2>
                        <p>Committed to helping you meet all your banking needs.</p>
                    </div>

                    <ul class="contact-info-1">
                        <li>
                            <div class="icon">
                                <span class="icon-map"></span>
                            </div>
                            <div class="text">
                                <p>Corporate Office</p>
                                <h3>
                                    Königstraße 11 - 15, 70173 ,<br />
                                    Stuttgart, Germany
                                </h3>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-clock"></span>
                            </div>
                            <div class="text">
                                <p>Office Hours</p>
                                <h3>Mon - Fri: 9.00am to 5.00pm</h3>
                                <span>[2nd Sat Holiday]</span>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-phone"></span>
                            </div>
                            <div class="text">
                                <p>Front Desk</p>
                                <h3><a href="tel:+493030715974">+49 30 3071 5974</a></h3>
                                <h3><a href="mailto:support@g-american.com">support@g-american.com</a></h3>
                            </div>
                        </li>
                    </ul>

                    <div class="bottom-box">
                        <div class="btn-box">
                            <a href="#"><i class="fas fa-arrow-down"></i> Customer Care</a>
                        </div>
                        <div class="footer-social-link-style1">
                            <ul class="clearfix">
                                <li>
                                    <a href="#">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="contact-form">
                    <form id="contact-form" name="contact_form" class="default-form2" action="/front/assets/inc/sendmail.php" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <div class="input-box">
                                <input type="text" name="form_name" id="formName" placeholder="xxxxxx" required="" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <div class="input-box">
                                <input type="email" name="form_email" id="formEmail" placeholder="" required="" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Ph. Num</label>
                            <div class="input-box">
                                <input type="text" name="form_phone" value="" id="formPhone" placeholder="" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Subject</label>
                            <div class="input-box">
                                <input type="text" name="form_subject" value="" id="formSubject" placeholder="Subject" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Message</label>
                            <div class="input-box">
                                <textarea name="form_message" id="formMessage" placeholder="" required=""></textarea>
                            </div>
                        </div>

                        <div class="button-box">
                            <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                            <button class="btn-one" type="submit" data-loading-text="Please wait...">
                                <span class="txt">
                                    send a message
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Main Contact Form Area-->

<!--Start slogan area-->
<section class="slogan-area">
    <div class="container">
        <div class="slogan-content-box">
            <div class="slogan-content-box-bg" style="background-image: url(/front/assets/images/backgrounds/slogan-content-box-bg.jpg);"></div>
            <div class="inner-title">
                <h2>Experience a New Digital World.</h2>
                <p>Mobile banking application with new & exciting features.</p>
            </div>
            <div class="get-app-box">
                <ul>
                    <li>
                        <a href="#">
                            <div class="icon">
                                <span class="icon-play-store"></span>
                            </div>
                            <div class="text">
                                <h4>Download</h4>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="style2" href="#">
                            <div class="icon">
                                <span class="icon-apple"></span>
                            </div>
                            <div class="text">
                                <h4>Download</h4>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--End slogan area-->
@endsection
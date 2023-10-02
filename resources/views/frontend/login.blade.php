@extends('layouts.front')

@section('content')
<section class="breadcrumb-area">
    <div class="breadcrumb-area-bg" style="background-image: url(/front/assets/images/backgrounds/breadcrumb-area-bg-4.jpg);"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content">
                    <div class="title aos-init" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="500">
                        <h2>Login</h2>
                    </div>
                    <div class="breadcrumb-menu aos-init" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
                        <ul>
                            <li><a href="{{route('index')}}">Home</a></li>
                            <li class="active">Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="apply-form-area" style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="apply-form-box clearfix">
                    <div class="apply-form-box-bg" style="background-image: url(/front/assets/images/resources/apply-form-box-bg.jpg);"></div>
                    <div class="apply-form-box__content">
                        <div class="sec-title">
                            <h2>
                                Login your account
                            </h2>
                        </div>

                        <form id="apply-form" name="apply_form" class="default-form2" action="{{route('login')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <input type="email" name="email" id="formEmail" placeholder="Email" required="" />
                                            <div class="icon">
                                                <i class="fas fa-envelope-open"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <input type="password" name="password" value="" id="formPhone" placeholder="Password" />
                                            <div class="icon">
                                                <i class="fas fa-lock-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="button-box">
                                        <button class="btn-one" type="submit">
                                            <span class="txt">
                                                Login account
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
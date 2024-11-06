@extends('layouts.app')

@section('content')


<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-content">
                        <h2 class="breadcrumb__title">sign up</h2>
                        <ul class="breadcrumb__list">
                            <li class="active__list-item"><a href="index.html">home</a></li>
                            <li>sign up</li>
                        </ul>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-md-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end breadcrumb-wrap -->
    <div class="bread-svg">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none">
            <path d="M-4.22,89.30 C280.19,26.14 324.21,125.81 511.00,41.94 L500.00,150.00 L0.00,150.00 Z"></path>
        </svg>
    </div><!-- end bread-svg -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
       START FORM AREA
================================= -->
<section class="form-shared">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="contact-form-action">
                    <div class="form-heading text-center">
                        <h3 class="form__title">Create an account!</h3>
                        <p class="form__desc">with your social network.</p>
                    </div>
                    <!--Contact Form-->
                    <form method="post" action="{{route('register')}}">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <button class="theme__btn submit__btn2 btn__google" type="submit">
                                    <i class="fa fa-google"></i> Google
                                </button>
                            </div><!-- end col-md-4 -->
                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <button class="theme__btn submit__btn2 btn__facebook" type="submit">
                                    <i class="fa fa-facebook"></i> Facebook
                                </button>
                            </div><!-- end col-md-4 -->
                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <button class="theme__btn submit__btn2 btn__twitter" type="submit">
                                    <i class="fa fa-twitter"></i> Twitter
                                </button>
                            </div><!-- end col-md-4 -->
                            <div class="col-md-12 col-sm-12 col-xs-12 account-assist text-center">
                                <p class="account__desc account__desc2">or</p>
                            </div><!-- end col-md-12 -->

                          @csrf
                            <div class="col-md-12 col-sm-12 form-group">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><!-- end col-md-12 -->
                            <!-- end col-md-12 -->
                            <div class="col-md-12 col-sm-12 form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><!-- end col-md-12 -->
                            <div class="col-md-12 col-sm-12 form-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><!-- end col-md-12 -->
                            <div class="col-md-12 col-sm-12 form-group">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                            </div><!-- end col-md-12 -->




                            <div class="col-md-12 col-sm-12 col-xs-12 form-condition">
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="chb2"/>
                                    <label for="chb2">I agree to Dirto's <a href="#">Terms of Services</a></label>
                                </div>
                            </div><!-- end col-md-12 -->


                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                <button class="theme__btn" type="submit">
                                    Register Account <span class="la la-angle-right"></span>
                                </button>
                            </div><!-- end col-md-12 -->
                            <div class="col-md-12 col-sm-12 col-xs-12 account-assist">
                                <p class="account__desc">Already have an account?<a href="{{route('login')}}"> Log in</a></p>
                            </div><!-- end col-md-12 -->
                        </div><!-- end row -->
                    </form>
                </div><!-- end contact-form -->
            </div><!-- end col-md-7 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end form-shared -->
<!-- ================================
       START FORM AREA
================================= -->

<!-- ================================
    START CTA AREA
================================= -->
<!-- end cta-area -->
<!-- ================================
    END CTA AREA
================================= -->
@endsection
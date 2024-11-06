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
                            <h2 class="breadcrumb__title">Profile</h2>
                            <ul class="breadcrumb__list">
                                <li class="active__list-item"><a href="index.html">home</a></li>
                                <li class="active__list-item">pages</li>
                                <li>dashboard</li>
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
        START MOST-VISITED AREA
    ================================= -->
    <section class="most-visited-area most-visited-area4">
        <div class="dashboard-tab">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="dashboard-wrap clearfix">
                            <div class="dashboard-nav">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation">
                                        <a href="{{ route('mylist') }}">
                                            <span class="la la-list-alt"></span> Listings
                                        </a>
                                    </li>
                                    <li role="presentation" class="active">
                                        <a href="#tab1">
                                            <span class="la la-user"></span> Profile
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab2">
                                            <span class="la la-bookmark-o"></span> bookmarks
                                        </a>
                                    </li>
                                </ul>
                            </div><!-- end dashboard-nav -->
                            <div class="dashboard-buttons">
                                <a href="{{route('listing')}}" class="theme__btn"><span class="la la-plus-circle"></span> create listing</a>
                                <a href="#" class="theme__btn" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <span class="la la-power-off user-icon"></span> Sign Out
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </div><!-- end dashboard-wrap -->
                    </div><!-- end col-md-12 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end dashboard-tab -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="tab1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="user-profile-action">
                                <div class="user-pro-img">

                                    @if(!auth::user()->image=='')
                                        <img src="{{url('assets/images/profile/'.auth::user()->image)}}" alt="user-image">
                                    @else
                                        <img src="{{url('assets/images/profile/user.png')}}" alt="user-image">
                                    @endif


                                    <div class="dropdown edit-btn-wrap">
                                        <button class="edit-pic-btn" id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="la la-photo"></span> Edit
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dLabel">
                                            <li>
                                                <div class="upload-btn-box">
                                                    <form action="{{route('profilephotoupdate')}}" method="post" enctype="multipart/form-data">
                                                        @csrf<input type="file" name="file" id="filer_input">
                                                        <button class="theme__btn" type="submit" value="submit">
                                                            Save changes
                                                        </button>
                                                    </form>
                                                </div>
                                            </li>
                                            <li>
                                                @if(!auth::user()->image=='')
                                                <div class="delete-btn-box">

                                                    <a href="{{route('profilephotodelete')}}" class="theme__btn delete__btn">Delete Photo</a>

                                                </div>
                                                @endif

                                            </li>
                                        </ul>
                                    </div><!-- end dropdown -->
                                </div>
                                <div class="vcard-area">
                                    <div class="vcard-name">
                                        <h2 class="vcard__title">{{auth::user()->name}}</h2>
                                    </div>

                                    <ul class="vcard-details">
                                        <li><span class="la la-map-marker"></span> {{auth::user()->place}}</li>
                                        <li><span class="la la-phone"></span> {{auth::user()->phone}}</li>
                                        <li><span class="la la-globe"></span> www.techydevs.com</li>
                                    </ul>
                                    <div class="vcard-content">

                                        <div class="vcard-form">
                                            <div class="contact-form-action">
                                                <!--Contact Form-->
                                                <form method="post">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 form-group">
                                                            <label class="label-text">Name</label>
                                                            <input class="form-control" type="text" name="name" placeholder="Enter your name" value="">
                                                        </div><!-- end col-md-12 -->
                                                        <div class="col-md-12 col-sm-12 form-group">
                                                            <label class="label-text">Bio Data</label>
                                                            <textarea class="message-control form-control" name="message" placeholder="Add a bio"></textarea>
                                                        </div><!-- end col-md-12 -->
                                                        <div class="col-md-12 col-sm-12 form-group">
                                                            <div class="vcard-address">
                                                                <span class="la la-map-marker"></span>
                                                                <input class="form-control" type="text" name="location" placeholder="Location">
                                                            </div>
                                                        </div><!-- end col-md-12 -->
                                                        <div class="col-md-12 col-sm-12 form-group">
                                                            <div class="vcard-address">
                                                                <span class="la la-phone"></span>
                                                                <input class="form-control" type="text" name="number" placeholder="Number">
                                                            </div>
                                                        </div><!-- end col-md-12 -->
                                                        <div class="col-md-12 col-sm-12 form-group">
                                                            <div class="vcard-address">
                                                                <span class="la la-envelope-o"></span>
                                                                <input class="form-control" type="email" name="email" placeholder="Email Address">
                                                            </div>
                                                        </div><!-- end col-md-12 -->
                                                        <div class="col-md-12 col-sm-12 form-group">
                                                            <div class="vcard-address">
                                                                <span class="la la-youtube-play"></span>
                                                                <input class="form-control" type="text" name="youtube" placeholder="Youtube URL">
                                                            </div>
                                                        </div><!-- end col-md-12 -->
                                                        <div class="col-md-12 col-sm-12 form-group">
                                                            <div class="vcard-address">
                                                                <span class="la la-globe"></span>
                                                                <input class="form-control" type="text" name="website" placeholder="Website">
                                                            </div>
                                                        </div><!-- end col-md-12 -->
                                                    </div><!-- end row -->
                                                </form>
                                            </div><!-- end contact-form-action -->
                                            <div class="bio-save-btn-box">
                                                <button type="button" class="savechange__btn theme__btn">save changes</button>
                                                <button type="button" class="cancel__btn theme__btn">Cancel</button>
                                            </div><!-- end bio-save-btn-box -->
                                        </div><!-- end vcard-form -->
                                    </div><!-- end vcard-content -->
                                </div><!-- end vcard-area -->
                            </div><!-- end user-profile-action -->
                        </div><!-- end col-md-4 -->
                        <div class="col-md-8">
                            <div class="user-form-action-wrap">
                                <div class="vcard-title-wrap">
                                    <h3>Edit </h3>
                                </div>





                                <div class="user-form-group">
                                    <div class="contact-form-action">


                                        @if(session('error'))
                                            <div class="alert alert-danger">
                                                <strong>
                                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                                    {{ session('error') }}</strong>
                                            </div>
                                        @endif


                                        @if(session('message'))
                                            <div class="alert alert-success">
                                                <strong>
                                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                                    {{ session('message') }}</strong>
                                            </div>
                                    @endif





                                        <!--Contact Form-->
                                        <form method="post" action="{{route('proupdate')}}" id="form1">
                                            @csrf
                                            <div class="row">
                                                <div class="errorMsg"></div>
                                                <div class="col-md-12 col-sm-12 form-group">
                                                    <label class="label-text">Name</label>
                                                    <input class="form-control name" type="text" name="name" placeholder=" Enter your Name" value="{{auth::user()->name}}">
                                                </div><!-- end col-md-12 -->
                                                <div class="col-md-12 col-sm-12 form-group">
                                                    <label class="label-text">Email</label>
                                                    <input class="form-control email" type="text" name="email" placeholder="Enter your email" value="{{auth::user()->email}}">
                                                </div><!-- end col-md-12 -->
                                                <div class="col-md-12 col-sm-12 form-group">
                                                    <label class="label-text"> Phone </label>
                                                    <input class="form-control txtnumber" type="text" name="phone" placeholder="Enter phone number" value="{{auth::user()->phone}}">
                                                </div><!-- end col-md-12 -->
                                                <div class="col-md-12 col-sm-12 form-group">
                                                    <label class="label-text"> Place </label>
                                                    <input class="form-control place" type="text" name="place" placeholder="Enter your place" value="{{auth::user()->place}}">
                                                </div><!-- end col-md-12 -->
                                                <div class="col-md-12 col-sm-12 form-group">
                                                    <button class="theme__btn submitBtn" type="button">Update </button>
                                                </div><!-- end col-md-12 -->
                                            </div><!-- end row -->
                                        </form>
                                    </div><!-- end contact-form-action -->
                                </div><!-- end user-form-group -->
                            </div><!-- end user-form-action-wrap -->
                            <div class="user-form-action-wrap delete-account-wrap">
                                <div class="vcard-title-wrap">
                                    <h3>Delete Account</h3>
                                </div>
                                <div class="delete-account-content">
                                    <p><span>Warning:</span> Once you delete your account, there is no going back. Please be certain.</p>
                                    <button class="theme__btn delete-account-btn">delete my account</button>
                                </div><!-- end delete-account-content -->
                            </div><!-- end user-form-action-wrap -->
                        </div><!-- end col-md-8 -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end tab-pane -->
        </div><!-- end tab-content -->
    </section><!-- end most-visited-area -->
    <!-- ================================
        END MOST-VISITED AREA
    ================================= -->

    <!-- ================================
        START CTA AREA
    ================================= -->
    <!-- ================================
        END CTA AREA
    ================================= -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){


            $(".txtnumber").keydown(function(event) {
                // Allow only backspace and delete
                if( !(event.keyCode == 8                                // backspace
                    || event.keyCode == 46                              // delete
                    || (event.keyCode >= 35 && event.keyCode <= 40)     // arrow keys/home/end
                    || (event.keyCode >= 48 && event.keyCode <= 57)     // numbers on keyboard
                    || (event.keyCode >= 96 && event.keyCode <= 105))   // number on keypad
                ) {
                    event.preventDefault();     // Prevent character input
                }



            });
            function validateEmail($email) {
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                return emailReg.test( $email );
            }

            $(".submitBtn").click(function() {
                var name=$(".name").val();
                var email=$(".email").val();
                var place=$(".place").val();
                if(name=='')
                {
                    $(".errorMsg").html("<div class='alert alert-danger' role='alert'><i class='fa fa-warning'></i> pls enter name</div>");
                }
                else if(email=='')
                {
                    $(".errorMsg").html("<div class='alert alert-danger' role='alert'><i class='fa fa-warning'></i> pls enter email</div>");
                }
                else if(!validateEmail(email))
                {
                    $(".errorMsg").html("<div class='alert alert-danger' role='alert'><i class='fa fa-warning'></i> pls enter valid email</div>");

                }
                else if(place=='')
                {
                    $(".errorMsg").html("<div class='alert alert-danger' role='alert'><i class='fa fa-warning'></i> pls enter place</div>");
                }
                else {
                    $("#form1").submit();
                }

                });
        })
    </script>
@endsection
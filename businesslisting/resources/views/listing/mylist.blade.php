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
                            <h2 class="breadcrumb__title">dashboard</h2>
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
                                    <li role="presentation" class="active">
                                        <a href="#">
                                            <span class="la la-list-alt"></span> Listings
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="{{ route('myprofile') }}">
                                            <span class="la la-user"></span> Profile
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="{{ route('myprofile') }}">
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
            <div role="tabpanel" class="tab-pane fade in active" id="tab">
                <div class="container">
                    <div class="row">
                        <div class="most-visited-wrap2 edit-listing-wrap clearfix">
                            <div class="most-visited-item col-md-4 col-sm-6">
                                <a href="listing-details.html">
                                    <div class="listing-img-box">
                                        <img src="{{url('assets/images/img28.jpg')}}" class="list-img" alt="">
                                    </div>
                                </a>
                                <div class="listing-content">
                                    <div class="listing-row-content">
                                        <a href="listing-details.html">
                                            <h4 class="listing-title">Favorite Place Food Bank</h4>
                                            <p class="listing-location">Bishop Avenue, New York</p>
                                        </a>
                                    </div>
                                    <div class="rating-row">
                                        <div class="rating-rating">
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star-half-full"></span>
                                            <span class="la la-star last-star"></span>
                                            <span class="rating-count">4.5</span>
                                        </div>
                                        <div class="edit-info">
                                            <a href="javascript:void(0)" class="theme__btn"><span class="la la-pencil-square"></span> edit</a>
                                            <a href="javascript:void(0)" class="theme__btn" data-toggle="modal" data-target=".bs-example-modal-sm"><span class="la la-trash"></span> delete</a>
                                        </div>
                                    </div>
                                </div><!-- end listing-content -->
                            </div><!-- end most-visited-item -->
                            <div class="most-visited-item col-md-4 col-sm-6">
                                <a href="listing-details.html">
                                    <div class="listing-img-box">
                                        <img src="{{url('assets/images/img29.jpg')}}" class="list-img" alt="">
                                    </div>
                                </a>
                                <div class="listing-content">
                                    <div class="listing-row-content">
                                        <a href="listing-details.html">
                                            <h4 class="listing-title">beach blue boardwalk</h4>
                                            <p class="listing-location">Bishop Avenue, New York</p>
                                        </a>
                                    </div>
                                    <div class="rating-row">
                                        <div class="rating-rating">
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star-half-full"></span>
                                            <span class="la la-star last-star"></span>
                                            <span class="rating-count">4.6</span>
                                        </div>
                                        <div class="edit-info">
                                            <a href="javascript:void(0)" class="theme__btn"><span class="la la-pencil-square"></span> edit</a>
                                            <a href="javascript:void(0)" class="theme__btn" data-toggle="modal" data-target=".bs-example-modal-sm"><span class="la la-trash"></span> delete</a>
                                        </div>
                                    </div>
                                </div><!-- end listing-content -->
                            </div><!-- end most-visited-item -->
                            <div class="most-visited-item col-md-4 col-sm-6">
                                <a href="listing-details.html">
                                    <div class="listing-img-box">
                                        <img src="{{url('assets/images/img30.jpg')}}" class="list-img" alt="">
                                    </div>
                                </a>
                                <div class="listing-content">
                                    <div class="listing-row-content">
                                        <a href="listing-details.html">
                                            <h4 class="listing-title">hotel govendor</h4>
                                            <p class="listing-location">Bishop Avenue, New York</p>
                                        </a>
                                    </div>
                                    <div class="rating-row">
                                        <div class="rating-rating">
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star-half-full"></span>
                                            <span class="la la-star last-star"></span>
                                            <span class="rating-count">4.7</span>
                                        </div>
                                        <div class="edit-info">
                                            <a href="javascript:void(0)" class="theme__btn"><span class="la la-pencil-square"></span> edit</a>
                                            <a href="javascript:void(0)" class="theme__btn" data-toggle="modal" data-target=".bs-example-modal-sm"><span class="la la-trash"></span> delete</a>
                                        </div>
                                    </div>
                                </div><!-- end listing-content -->
                            </div><!-- end most-visited-item -->
                            <div class="most-visited-item col-md-4 col-sm-6">
                                <a href="listing-details.html">
                                    <div class="listing-img-box">
                                        <img src="{{url('assets/images/img31.jpg')}}" class="list-img" alt="">
                                    </div>
                                </a>
                                <div class="listing-content">
                                    <div class="listing-row-content">
                                        <a href="listing-details.html">
                                            <h4 class="listing-title">sticky band party</h4>
                                            <p class="listing-location">Bishop Avenue, New York</p>
                                        </a>
                                    </div>
                                    <div class="rating-row">
                                        <div class="rating-rating">
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star-half-full"></span>
                                            <span class="la la-star last-star"></span>
                                            <span class="rating-count">4.5</span>
                                        </div>
                                        <div class="edit-info">
                                            <a href="javascript:void(0)" class="theme__btn"><span class="la la-pencil-square"></span> edit</a>
                                            <a href="javascript:void(0)" class="theme__btn" data-toggle="modal" data-target=".bs-example-modal-sm"><span class="la la-trash"></span> delete</a>
                                        </div>
                                    </div>
                                </div><!-- end listing-content -->
                            </div><!-- end most-visited-item -->
                            <div class="most-visited-item col-md-4 col-sm-6">
                                <a href="listing-details.html">
                                    <div class="listing-img-box">
                                        <img src="{{url('assets/images/img32.jpg')}}" class="list-img" alt="">
                                    </div>
                                </a>
                                <div class="listing-content">
                                    <div class="listing-row-content">
                                        <a href="listing-details.html">
                                            <h4 class="listing-title">Sena Clothing Shopping Mall</h4>
                                            <p class="listing-location">Bishop Avenue, New York</p>
                                        </a>
                                    </div>
                                    <div class="rating-row">
                                        <div class="rating-rating">
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star-half-full"></span>
                                            <span class="la la-star last-star"></span>
                                            <span class="rating-count">4.6</span>
                                        </div>
                                        <div class="edit-info">
                                            <a href="javascript:void(0)" class="theme__btn"><span class="la la-pencil-square"></span> edit</a>
                                            <a href="javascript:void(0)" class="theme__btn" data-toggle="modal" data-target=".bs-example-modal-sm"><span class="la la-trash"></span> delete</a>
                                        </div>
                                    </div>
                                </div><!-- end listing-content -->
                            </div><!-- end most-visited-item -->
                            <div class="most-visited-item col-md-4 col-sm-6">
                                <a href="listing-details.html">
                                    <div class="listing-img-box">
                                        <img src="{{url('assets/images/img33.jpg')}}" class="list-img" alt="">
                                    </div>
                                </a>
                                <div class="listing-content">
                                    <div class="listing-row-content">
                                        <a href="listing-details.html">
                                            <h4 class="listing-title">10 Tips for Body Building</h4>
                                            <p class="listing-location">Bishop Avenue, New York</p>
                                        </a>
                                    </div>
                                    <div class="rating-row">
                                        <div class="rating-rating">
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star-half-full"></span>
                                            <span class="la la-star last-star"></span>
                                            <span class="rating-count">4.7</span>
                                        </div>
                                        <div class="edit-info">
                                            <a href="javascript:void(0)" class="theme__btn"><span class="la la-pencil-square"></span> edit</a>
                                            <a href="javascript:void(0)" class="theme__btn" data-toggle="modal" data-target=".bs-example-modal-sm"><span class="la la-trash"></span> delete</a>
                                        </div>
                                    </div>
                                </div><!-- end listing-content -->
                            </div><!-- end most-visited-item -->
                        </div><!-- end most-visited-wrap -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end tab-pane -->
            <div role="tabpanel" class="tab-pane fade" id="tab1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="user-profile-action">
                                <div class="user-pro-img">
                                    <img src="{{url('assets/images/team1.jpg')}}" alt="user-image">
                                    <div class="dropdown edit-btn-wrap">
                                        <button class="edit-pic-btn" id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="la la-photo"></span> Edit
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dLabel">
                                            <li>
                                                <div class="upload-btn-box">
                                                    <form action="https://techydevs.com/demos/themes/html/dirto-html/php/upload.html" method="post" enctype="multipart/form-data">
                                                        <input type="file" name="files[]" id="filer_input" multiple="multiple">
                                                        <button class="theme__btn" type="submit" value="submit">
                                                            Save changes
                                                        </button>
                                                    </form>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="delete-btn-box">
                                                    <button class="theme__btn delete__btn">Delete Photo</button>
                                                </div>
                                            </li>
                                        </ul>
                                    </div><!-- end dropdown -->
                                </div>
                                <div class="vcard-area">
                                    <div class="vcard-name">
                                        <h2 class="vcard__title">Mark Williamson</h2>
                                    </div>
                                    <div class="vcard-desc">
                                        <h2 class="vcard__note">
                                            Sed ut perspiciatis unde omnis iste natus error
                                            sit voluptatem accusantium doloremque laudantium
                                        </h2>
                                    </div>
                                    <ul class="vcard-details">
                                        <li><span class="la la-map-marker"></span> 101 Parkview, New York</li>
                                        <li><span class="la la-phone"></span> +7(111)123456789</li>
                                        <li><span class="la la-globe"></span> www.techydevs.com</li>
                                    </ul>
                                    <div class="vcard-content">
                                        <button class="theme__btn editprofile__btn" type="button"><span
                                                    class="la la-pencil-square"></span> Edit</button>
                                        <div class="vcard-form">
                                            <div class="contact-form-action">
                                                <!--Contact Form-->
                                                <form method="post" id="myform">
                                                    <div class="row">

                                                        <div class="errorMsg"></div>

                                                        <div class="col-md-12 col-sm-12 form-group">
                                                            <label class="label-text">Name</label>
                                                            <input class="form-control fname" type="text" name="name" placeholder="Enter your name">
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
                                                <button type="button" class="savechange__btn theme__btn submitBtn">save changes</button>
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
                                    <h3>Change Password</h3>
                                </div>
                                <div class="user-form-group">
                                    <div class="contact-form-action">
                                        <!--Contact Form-->
                                        <form method="post">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 form-group">
                                                    <label class="label-text">Current password</label>
                                                    <input class="form-control" type="text" name="password" placeholder="Current password">
                                                </div><!-- end col-md-12 -->
                                                <div class="col-md-12 col-sm-12 form-group">
                                                    <label class="label-text">New password</label>
                                                    <input class="form-control" type="text" name="password" placeholder="Enter your new password">
                                                </div><!-- end col-md-12 -->
                                                <div class="col-md-12 col-sm-12 form-group">
                                                    <label class="label-text">Confirm New password</label>
                                                    <input class="form-control" type="text" name="password" placeholder="Confirm new password">
                                                </div><!-- end col-md-12 -->
                                                <div class="col-md-12 col-sm-12 form-group">
                                                    <button class="theme__btn" type="button">update password</button>
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
            <div role="tabpanel" class="tab-pane fade" id="tab2">
                <div class="container">
                    <div class="row">
                        <div class="most-visited-wrap2 edit-listing-wrap clearfix">
                            <div class="most-visited-item col-md-4 col-sm-6">
                                <a href="listing-details.html">
                                    <div class="listing-img-box">
                                        <img src="{{url('assets/images/img1.jpg')}}" class="list-img" alt="">
                                    </div>
                                </a>
                                <div class="listing-content">
                                    <div class="listing-row-content">
                                        <a href="listing-details.html">
                                            <h4 class="listing-title">Favorite Place Food Bank</h4>
                                            <p class="listing-location">Bishop Avenue, New York</p>
                                        </a>
                                    </div>
                                    <div class="rating-row">
                                        <div class="rating-rating">
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star-half-full"></span>
                                            <span class="la la-star last-star"></span>
                                            <span class="rating-count">4.5</span>
                                        </div>
                                        <div class="edit-info">
                                            <a href="javascript:void(0)" class="theme__btn"><span class="la la-trash"></span> delete</a>
                                        </div>
                                    </div>
                                </div><!-- end listing-content -->
                            </div><!-- end most-visited-item -->
                            <div class="most-visited-item col-md-4 col-sm-6">
                                <a href="listing-details.html">
                                    <div class="listing-img-box">
                                        <img src="{{url('assets/images/img2.jpg')}}" class="list-img" alt="">
                                    </div>
                                </a>
                                <div class="listing-content">
                                    <div class="listing-row-content">
                                        <a href="listing-details.html">
                                            <h4 class="listing-title">beach blue boardwalk</h4>
                                            <p class="listing-location">Bishop Avenue, New York</p>
                                        </a>
                                    </div>
                                    <div class="rating-row">
                                        <div class="rating-rating">
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star-half-full"></span>
                                            <span class="la la-star last-star"></span>
                                            <span class="rating-count">4.6</span>
                                        </div>
                                        <div class="edit-info">
                                            <a href="javascript:void(0)" class="theme__btn"><span class="la la-trash"></span> delete</a>
                                        </div>
                                    </div>
                                </div><!-- end listing-content -->
                            </div><!-- end most-visited-item -->
                            <div class="most-visited-item col-md-4 col-sm-6">
                                <a href="listing-details.html">
                                    <div class="listing-img-box">
                                        <img src="{{url('assets/images/img5.jpg')}}" class="list-img" alt="">
                                    </div>
                                </a>
                                <div class="listing-content">
                                    <div class="listing-row-content">
                                        <a href="listing-details.html">
                                            <h4 class="listing-title">Sena Clothing Shopping Mall</h4>
                                            <p class="listing-location">Bishop Avenue, New York</p>
                                        </a>
                                    </div>
                                    <div class="rating-row">
                                        <div class="rating-rating">
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star-half-full"></span>
                                            <span class="la la-star last-star"></span>
                                            <span class="rating-count">4.6</span>
                                        </div>
                                        <div class="edit-info">
                                            <a href="javascript:void(0)" class="theme__btn"><span class="la la-trash"></span> delete</a>
                                        </div>
                                    </div>
                                </div><!-- end listing-content -->
                            </div><!-- end most-visited-item -->
                        </div><!-- end most-visited-wrap -->
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
    <script>

        $(document).ready(function(){


            $(".submitBtn").click(function(){

                name=$(".fname").val();


                if(name.trim()=='')
                {
                    $(".errorMsg").html("<div class='alert alert-danger' role='alert'><i class='fa fa-warning'></i> pls enter name</div>");

                }
                else
                {
                    $("#myform").submit();
                }


            });


        });

    </script>
    @endsection
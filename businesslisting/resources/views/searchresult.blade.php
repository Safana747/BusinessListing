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
                        <h2 class="breadcrumb__title">listing grid</h2>
                        <ul class="breadcrumb__list">
                            <li class="active__list-item"><a href="index.html">home</a></li>
                            <li class="active__list-item">listings</li>
                            <li>listing grid</li>
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
<section class="most-visited-area most-visited-area2 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="generic-header generic-header2">
                    <p class="showing__text">Showing 1 to 6 of 30 entries</p>
                    <div class="contact-form-action">
                        <!--Contact Form-->
                        <form method="post">
                            <div class="row">
                                <div class="form-group">
                                    <div class="add-cat-wrap">
                                        <select class="select-option-field-4">
                                            <option value >Short by</option>
                                            <option value="1">Short by default</option>
                                            <option value="2">High Rated</option>
                                            <option value="3">Most Reviewed</option>
                                            <option value="4">Popular Listing</option>
                                            <option value="5">Newest Listing</option>
                                            <option value="6">Older Listing</option>
                                            <option value="7">Price: low to high</option>
                                            <option value="8">Price: high to low</option>
                                            <option value="9">Random listing</option>
                                        </select>
                                    </div><!-- end add-cat-wrap -->
                                </div><!-- end form-group -->
                            </div><!-- end row -->
                        </form>
                    </div><!-- end contact-form-action -->
                    <ul class="generic-nav">
                        <li><a href="listing-list.html" data-toggle="tooltip" data-placement="top" title="List View"><span class="la la-list"></span></a></li>
                        <li><a href="listing-grid.html" class="active"><span class="la la-th-large"></span></a></li>
                    </ul>
                </div><!-- end generic-header -->
            </div><!-- end col-md-12 -->
        </div><!-- end row -->
        <div class="row">
            <div class="most-visited-wrap2 clearfix">

                @foreach($results as $item)
                    <div class="most-visited-item col-md-4 col-sm-6">
                        <a href="{{url('/listingdetails/'.$item->seourl)}}">
                            <div class="listing-img-box">
                                <img style="height: 350px;" src="{{url('assets/images/listing/'.$item->img1)}}" class="list-img" alt="">
                                <span class="list-name badge">now open</span>
                                <span class="like-icon" data-toggle="tooltip" data-placement="bottom" title="22 Likes">
                                    <i class="la la-heart-o"></i>
                                </span>
                            </div>
                        </a>
                        <div class="listing-content">
                            <div class="listing-row-content">
                                <a href="listing-details.html">
                                    <h5 class="listing-meta"><span class="{{ Helper::getcategory_icon($item->category_id)}}"></span> {{ Helper::getcategory($item->category_id)}}</h5>
                                    <h4 class="listing-title">{{$item->title}}
                                        <i class="fa fa-check-circle" data-toggle="tooltip" data-placement="top" title="Claimed"></i>
                                    </h4>



                                    <p class="listing-location">{{ Helper::get_location($item->location_id)}}</p>
                                </a>
                                <a href="#" class="author-img-box">

                                    <img src="{{url('assets/images/profile/'.Helper::get_user_image($item->user_id))}}" class="author-img" alt="author-img">
                                </a>
                                <ul class="listing-list">
                                    <li><span class="la la-phone"></span> {{$item->phone}}</li>
                                    <li><span class="la la-link"></span>
                                        <a href="#"> {{$item->website}}</a>
                                    </li>
                                    <li><span class="la la-calendar-check-o"></span>
                                        {{Helper::get_time_ago(strtotime($item->created_at))}}
                                    </li>
                                </ul>
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
                                <div class="listing-info">
                                    <ul>
                                        <li><span class="la la-eye info__count"></span> 247</li>
                                        <li><span class="la la-heart-o info__save" data-toggle="tooltip" data-placement="top" title="Bookmark"></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- end listing-content -->
                    </div><!-- end most-visited-item -->
                @endforeach


            </div><!-- end most-visited-wrap -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-md-12">
                <div class="button-shared">
                    <a href="#" class="theme__btn"><span class="la la-refresh"></span> load more</a>
                </div><!-- end button-shared -->
            </div><!-- end col-md-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end most-visited-area -->
<!-- ================================
    END MOST-VISITED AREA
================================= -->

<!-- ================================
    START CTA AREA
================================= -->
<section class="cta-area cta-area2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cta-box clearfix">
                    <div class="col-md-8">
                        <div class="section-heading">
                            <h2 class="sec__title sec__title2">Subscribe to Newsletter!</h2>
                            <p class="sec__meta">
                                Subscribe to get latest updates and information.
                            </p>
                        </div><!-- end section-heading -->
                    </div><!-- end col-md-8 -->
                    <div class="col-md-4">
                        <div class="contact-form-action">
                            <!--Contact Form-->
                            <form method="post">
                                <span class="la la-envelope-o"></span>
                                <input class="form-control" type="email" placeholder="Enter your email" required="">
                                <button class="theme__btn" type="submit">Subscribe</button>
                            </form>
                        </div><!-- end contact-form-action -->
                    </div><!-- end col-md-3 -->
                </div><!-- end cta-box -->
            </div><!-- end col-md-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end cta-area -->
<!-- ================================
    END CTA AREA
================================= -->

@endsection
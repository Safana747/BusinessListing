@extends('layouts.app')
@section('content')
<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area breadcrumb-area2">
    <div class="breadcrumb-wrap">
        <div class="container p-relative">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-content">
                        <h2 class="breadcrumb__title">{{$result->title}}</h2>
                        <p class="breadcrumb__desc">
                            <span class="la la-map-marker"></span> {{ Helper::get_location($result->location_id)}}
                        </p>
                        <ul class="listing-info">
                            <li>
                                <span class="listing-tag"><i class="{{ Helper::getcategory_icon($result->category_id)}}"> {{ Helper::getcategory($result->category_id)}}</i> </span>
                            </li>
                            <li>
                                <div class="dropdown share-dropmenu">
                                    <button class="theme__btn" id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="la la-external-link-square"></i> share
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dLabel">
                                        <li><a href="#"><i class="fa fa-facebook"></i> facebook</a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i> twitter</a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i> instagram</a></li>
                                        <li><a href="#"><i class="fa fa-tumblr"></i> Tumblr</a></li>
                                        <li><a href="#"><i class="fa fa-snapchat"></i> snapchat </a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i> Google plus </a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i> pinterest </a></li>
                                        <li><a href="#"><i class="fa fa-vk"></i> VKontakte </a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i> linkedin </a></li>
                                        <li><a href="#"><i class="fa fa-youtube-play"></i> youtube </a></li>
                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-md-12 -->
            </div><!-- end row -->
            <div class="report-list-items">
                <ul class="listing-info listing-info2">
                    <li><a href="#review" class="btn btn-success btn-lg"><i class="fa fa-phone"></i> Call</a></li>

                </ul>
            </div><!-- end breadcrumb-content -->
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
    START SINGLE-LISTING AREA
================================= -->
<section class="single-listing-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="single-listing-wrap">
                    <h2 class="sl__title">Gallery</h2>
                    <div class="gallery-carousel">

                        <div data-dot="<img src='{{url('assets/images/listing/'.$result->img1)}}'>" class="gallery-item">
                            <img src="{{url('assets/images/listing/'.$result->img1)}}" alt="gallery-image">
                        </div><!-- end gallery-item -->
                        <div data-dot="<img src='{{url('assets/images/listing/'.$result->img2)}}'>" class="gallery-item">
                            <img src="{{url('assets/images/listing/'.$result->img2)}}" alt="gallery-image">
                        </div><!-- end gallery-item -->
                        <div data-dot="<img src='{{url('assets/images/listing/'.$result->img3)}}'>" class="gallery-item">
                            <img src="{{url('assets/images/listing/'.$result->img3)}}" alt="gallery-image">
                        </div><!-- end gallery-item -->
                        <div data-dot="<img src='{{url('assets/images/listing/'.$result->img4)}}'>" class="gallery-item">
                            <img src="{{url('assets/images/listing/'.$result->img4)}}" alt="gallery-image">
                        </div><!-- end gallery-item -->
                        <div data-dot="<img src='images/g-img5.jpg'>" class="gallery-item">
                            <img src="images/img21.jpg" alt="gallery-image">
                        </div><!-- end gallery-item -->
                        <div data-dot="<img src='images/g-img6.jpg'>" class="gallery-item">
                            <img src="images/img22.jpg" alt="gallery-image">
                        </div><!-- end gallery-item -->
                    </div><!-- end gallery-carousel -->
                    <div class="listing-description">
                        <h2 class="sl__title">Description</h2>
                        <p class="listing__text">
                            Nemo ucxqui officia voluptatem accu santium doloremque laudantium,
                            totam rem ape dicta sunt dose explicabo. Nemo enim ipsam voluptatem quia voluptas.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa kequi
                            officia deserunt mollit anim id est laborum. Sed ut perspiciatis
                            unde omnis iste natus error sit voluptatem accusan tium dolorem
                            que laudantium, totam rem aperiam the eaque ipsa quae abillo
                            was inventore veritatis keret quasi aperiam architecto
                            beatae vitae dicta sunt explicabo.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div><!-- end listing-description -->
                    <div class="feature-listing">
                        <h2 class="sl__title">Features</h2>
                        <ul class="features__list">
                            <li>Instant Noodles</li>
                            <li>Wireless Internet</li>
                            <li>Smoking Allowed</li>
                            <li>Street Parking</li>
                            <li>Bike Parking</li>
                            <li>Accepts Credit cards</li>
                        </ul>
                    </div><!-- end feature-listing -->
                    <div class="video-listing">
                        <h2 class="sl__title">Video</h2>
                        <div class="video__box">
                            <img src="images/img22.jpg" alt="video-image">
                            <div class="video__box-content">
                                <a class="mfp-iframe video-play-btn" href="https://www.youtube.com/watch?v=5dAICQT1HiU" title="Play Video">
                                    <span class="la la-play-circle-o"></span>
                                </a>
                                <p class="video__desc">watch video</p>
                            </div><!-- end video__box-content -->
                        </div><!-- end video__box -->
                    </div><!-- end video-listing -->
                    <div class="listing-map gmaps">
                        <h2 class="sl__title">Location</h2>
                        <div id="map"></div>
                    </div><!-- end listing-map -->
                    <div class="contact-listing">
                        <h2 class="sl__title">Contact Information</h2>
                        <ul class="contact__list">
                            <li>
                                <span><i class="la la-map-marker"></i> Address:</span>
                                101 East Parkview Road, New York
                            </li>
                            <li>
                                <span><i class="la la-envelope-o"></i> Email:</span>
                                <a href="mailto:example@gmail.com">example@gmail.com</a>
                            </li>
                            <li>
                                <span><i class="la la-phone"></i> Phone:</span>
                                <a href="#">+7(111)123456789</a>
                            </li>
                            <li>
                                <span><i class="la la-external-link-square"></i> Website:</span>
                                <a href="#">www.techydevs.com</a>
                            </li>
                        </ul>
                        <div class="social-contact">
                            <a href="javascript:void(0)" onclick="window.open('http://www.facebook.com/share.php?u={{url('listingdetails/'.$result->seourl)}}', '{{$result->title}}', 'width=500,height=500')" class="facebook-link"><i class="fa fa-facebook"></i> Facebook</a>
                            <a href="#" class="twitter-link"><i class="fa fa-twitter"></i> Twitter</a>
                            <a href="#" class="instagram-link"><i class="fa fa-instagram"></i> Instagram</a>
                            <a href="#" class="linkedin-link"><i class="fa fa-linkedin"></i> Linkedin</a>
                            <a href="#" class="youtube-link"><i class="fa fa-youtube-play"></i> Youtube</a>
                        </div>
                    </div><!-- end contact-listing -->
                    <div class="review-content-wrap">
                        <h2 class="sl__title">Customer feedback</h2>
                        <div class="review-content">
                            <div class="review-rating-summary">
                                <div class="review-rating-summary-inner">
                                    <div class="stats-average__count">
                                        <span class="stats-average__count-count">4.4</span>
                                    </div><!-- end stats-average__count -->
                                    <div class="stats-average__rating">
                                        <ul>
                                            <li><span class="la la-star"></span></li>
                                            <li><span class="la la-star"></span></li>
                                            <li><span class="la la-star"></span></li>
                                            <li><span class="la la-star"></span></li>
                                            <li><span class="la la-star-half-o"></span></li>
                                        </ul>
                                        <p class="stats-average__rating-rating">(1.233)</p>
                                    </div><!-- end stats-average__rating -->
                                </div><!-- end review-rating-summary-inner -->
                                <div class="course-rating-text">
                                    <p class="course-rating-text__text">Food Rating</p>
                                </div><!-- end course-rating-text -->
                            </div><!-- end review-rating-summary -->
                            <div class="review-rating-widget">
                                <div class="review-rating-rate">
                                    <ul>
                                        <li class="review-rating-rate__items">
                                            <div class="review-rating-inner__item">
                                                <div class="review-rating-rate__item-text">5 stars</div>
                                                <div class="review-rating-rate__item-fill">
                                                    <span class="review-rating-rate__item-fill__fill rating-fill-width1"></span>
                                                </div>
                                                <div class="review-rating-rate__item-percent-text">77 %</div>
                                            </div>
                                        </li>
                                        <li class="review-rating-rate__items">
                                            <div class="review-rating-inner__item">
                                                <div class="review-rating-rate__item-text">4 stars</div>
                                                <div class="review-rating-rate__item-fill">
                                                    <span class="review-rating-rate__item-fill__fill rating-fill-width2"></span>
                                                </div>
                                                <div class="review-rating-rate__item-percent-text">54 %</div>
                                            </div>
                                        </li>
                                        <li class="review-rating-rate__items">
                                            <div class="review-rating-inner__item">
                                                <div class="review-rating-rate__item-text">3 stars</div>
                                                <div class="review-rating-rate__item-fill">
                                                    <span class="review-rating-rate__item-fill__fill rating-fill-width3"></span>
                                                </div>
                                                <div class="review-rating-rate__item-percent-text">14 %</div>
                                            </div>
                                        </li>
                                        <li class="review-rating-rate__items">
                                            <div class="review-rating-inner__item">
                                                <div class="review-rating-rate__item-text">2 stars</div>
                                                <div class="review-rating-rate__item-fill">
                                                    <span class="review-rating-rate__item-fill__fill rating-fill-width4"></span>
                                                </div>
                                                <div class="review-rating-rate__item-percent-text">5 %</div>
                                            </div>
                                        </li>
                                        <li class="review-rating-rate__items">
                                            <div class="review-rating-inner__item">
                                                <div class="review-rating-rate__item-text">1 stars</div>
                                                <div class="review-rating-rate__item-fill">
                                                    <span class="review-rating-rate__item-fill__fill rating-fill-width5"></span>
                                                </div>
                                                <div class="review-rating-rate__item-percent-text">2 %</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div><!-- end review-rating-rate -->
                            </div><!-- end review-rating-widget -->
                        </div><!-- end review-content -->
                    </div><!-- end review-content-wrap -->
                    <div class="review-listing">
                        <h2 class="sl__title">Reviews</h2>
                        <ul class="comments-list">
                            <li>
                                <div class="comment">
                                    <img class="avatar__img" alt="" src="images/testi-img1.jpg">
                                    <div class="comment-body">
                                        <div class="meta-data">
                                            <span class="comment__author">adam smith</span>
                                            <span class="comment__date">Reviewed 2 Days ago</span>
                                            <ul class="review__count">
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                            </ul>
                                        </div>
                                        <p class="comment-content">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation.
                                            Curabitur non nulla sit amet nisl tempus
                                        </p>
                                        <div class="comment-reply">
                                            <a class="comment__btn" href="#">
                                                <i class="la la-reply"></i> Reply
                                            </a>
                                            <p class="helpful__btn">
                                                Was this review?
                                                <a href="#">
                                                    <i class="la la-thumbs-o-up"></i> Helpful
                                                </a>
                                                <a href="#">
                                                    <i class="la la-smile-o"></i> Funny
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- end comment -->
                                <ul class="comments-reply">
                                    <li>
                                        <div class="comment">
                                            <img class="avatar__img" alt="" src="images/testi-img1.jpg">
                                            <div class="comment-body">
                                                <div class="meta-data">
                                                    <span class="comment__author">Julian Smith</span>
                                                    <span class="comment__date">Reviewed 3 Days ago</span>
                                                    <ul class="review__count">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star-half-empty"></span></li>
                                                    </ul>
                                                </div>
                                                <p class="comment-content">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    Ut enim ad minim veniam.
                                                    Curabitur non nulla sit amet nisl tempus
                                                </p>
                                                <div class="comment-reply">
                                                    <a class="comment__btn" href="#">
                                                        <i class="la la-reply"></i> Reply
                                                    </a>
                                                    <p class="helpful__btn">
                                                        Was this review?
                                                        <a href="#">
                                                            <i class="la la-thumbs-o-up"></i> Helpful
                                                        </a>
                                                        <a href="#">
                                                            <i class="la la-smile-o"></i> Funny
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul><!-- end comment -->
                                <div class="comment">
                                    <img class="avatar__img" alt="" src="images/testi-img1.jpg">
                                    <div class="comment-body">
                                        <div class="meta-data">
                                            <span class="comment__author">Matt Derry</span>
                                            <span class="comment__date">Reviewed 4 Days ago</span>
                                            <ul class="review__count">
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                            </ul>
                                        </div>
                                        <p class="comment-content">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation.
                                            Curabitur non nulla sit amet nisl tempus
                                        </p>
                                        <div class="comment-reply">
                                            <a class="comment__btn" href="#">
                                                <i class="la la-reply"></i> Reply
                                            </a>
                                            <p class="helpful__btn">
                                                Was this review?
                                                <a href="#">
                                                    <i class="la la-thumbs-o-up"></i> Helpful
                                                </a>
                                                <a href="#">
                                                    <i class="la la-smile-o"></i> Funny
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- end comment -->
                            </li>
                        </ul>
                        <div class="button-shared text-center">
                            <a href="#" class="theme__btn">
                                <span class="la la-refresh"></span> Load more review
                            </a>
                        </div><!-- end button-shared -->
                    </div><!-- end review-listing -->
                    <div class="add-review-listing" id="review">
                        <h2 class="sl__title">Add a Review</h2>
                        <p class="sl__desc">Your email address will not be published. Required fields are marked *</p>
                        <ul class="rating__list">
                            <li>
                                <span class="la la-star"></span>
                                <label class="review-label">
                                    <input type="radio" checked="checked" name="review-radio">
                                    <span class="review-mark"></span>
                                </label>
                            </li>
                            <li>
                                <span class="la la-star"></span> <span class="la la-star"></span>
                                <label class="review-label">
                                    <input type="radio" name="review-radio">
                                    <span class="review-mark"></span>
                                </label>
                            </li>
                            <li>
                                <span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span>
                                <label class="review-label">
                                    <input type="radio" name="review-radio">
                                    <span class="review-mark"></span>
                                </label>
                            </li>
                            <li>
                                <span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span>
                                <label class="review-label">
                                    <input type="radio" name="review-radio">
                                    <span class="review-mark"></span>
                                </label>
                            </li>
                            <li>
                                <span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span>
                                <label class="review-label">
                                    <input type="radio" name="review-radio">
                                    <span class="review-mark"></span>
                                </label>
                            </li>
                        </ul>
                        <div class="contact-form-action">
                            <!--Contact Form-->
                            <form method="post">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 form-group">
                                        <label class="label-text">Name</label>
                                        <input class="form-control" type="text" name="name" placeholder="Your Name">
                                    </div><!-- end col-md-12 -->
                                    <div class="col-md-6 col-sm-12 form-group">
                                        <label class="label-text">Email</label>
                                        <input class="form-control" type="email" name="email" placeholder="Email Address">
                                    </div><!-- end col-md-12 -->
                                    <div class="col-md-12 col-sm-12 form-group">
                                        <label class="label-text">Review</label>
                                        <textarea class="message-control form-control" name="message" placeholder="Write Message"></textarea>
                                    </div><!-- end col-md-12 -->
                                    <div class="col-md-12 col-sm-12 col-xs-12 upload-btn-wrapper">
                                        <form action="https://techydevs.com/demos/themes/html/dirto-html/php/upload.html" method="post" enctype="multipart/form-data">
                                            <input type="file" name="files[]" id="filer_input" multiple="multiple">
                                            <button class="theme__btn" type="submit" value="submit">
                                                Submit review
                                            </button>
                                        </form>
                                    </div><!-- end col-md-12 -->
                                </div><!-- end row -->
                            </form>
                        </div><!-- end contact-form-action -->
                    </div><!-- end add-review-listing -->
                </div><!-- end single-listing-wrap -->
            </div><!-- end col-md-8 -->
            <div class="col-md-4">
                <div class="author-verified-badge">
                    <div class="author__verified-badge" data-toggle="tooltip" data-placement="top" title="Listing has been verified and belongs the business owner or manager.">
                        <span class="la la-check-circle-o"></span> Verified Listing
                    </div>
                </div><!-- end author-verified-badge -->
                <div class="sidebar">
                    <div class="sidebar-widget author-widget2">
                        <div class="author-box clearfix">

                                <img src="{{url('assets/images/profile/'.Helper::get_user_image($result->user_id))}}" alt="user-image">

                            <h4 class="author__title">{{Helper::get_user_name($result->user_id)}}</h4>
                            <p class="author__meta">{{Helper::get_time_ago(strtotime($result->created_at))}}</p>
                        </div>
                        <ul class="author__contact">
                            <li><span class="la la-map-marker"></span>{{ Helper::get_location($result->location_id)}}</li>
                            <li><span class="la la-phone"></span><a href="#">{{$result->phone}}</a></li>
                            <li><span class="la la-envelope-o"></span><a href="#">mark123@gmail.com</a></li>
                            <li><span class="la la-external-link-square"></span><a href="#">www.techydevs.com</a></li>
                        </ul>
                        <ul class="author__link">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                        <div class="authorprofile__btn">
                            <a href="user-profile.html" class="theme__btn">
                                <span class="la la-user"></span> view profile
                            </a>
                        </div>
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget author-widget2 static-widget">
                        <h3 class="widget__title">Statics info</h3>
                        <ul class="author__contact">
                            <li><span class="la la-list-alt"></span>12 Listings</li>
                            <li><span class="la la-star-o"></span>4.4 Ratings</li>
                            <li><span class="la la-bookmark-o"></span>24 Bookmark</li>
                            <li><span class="la la-eye"></span>745 Views</li>
                            <li><span class="la la-external-link"></span>120 Share</li>
                            <li><span class="la la-eye"></span>20 Comments</li>
                            <li><span class="la la-heart-o"></span>120 Likes</li>
                        </ul>
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget date-widget">
                        <h3 class="widget__title">Booking</h3>
                        <input class="date-range form-control" type="text" name="daterange" value="04/08/2019"/>
                        <div class="time-slots">
                            <select class="select-option-field-5">
                                <option value >Time Slots</option>
                                <option value="1">8:00am - 8:30am</option>
                                <option value="2">9:00am - 9:30am</option>
                                <option value="3">10:00am - 10:30am</option>
                                <option value="4">11:00am - 11:30am</option>
                                <option value="5">12:00pm - 12:30pm</option>
                                <option value="6">13:00pm - 13:30pm</option>
                                <option value="7">14:00pm - 14:30pm</option>
                                <option value="8">15:00pm - 15:30pm</option>
                            </select>
                        </div><!-- end time-slots -->
                        <div class="booking-count clearfix">
                            <div class="input-number-group">
                                <p>Adults</p>
                                <div class="input-group-button">
                                    <span class="input-number-decrement">-</span>
                                </div>
                                <input class="input-number" type="number" value="0" min="0" max="1000">
                                <div class="input-group-button">
                                    <span class="input-number-increment">+</span>
                                </div>
                            </div><!-- end input-number-group -->
                            <div class="input-number-group">
                                <p>Children</p>
                                <div class="input-group-button">
                                    <span class="input-number-decrement">-</span>
                                </div>
                                <input class="input-number" type="number" value="0" min="0" max="1000">
                                <div class="input-group-button">
                                    <span class="input-number-increment">+</span>
                                </div>
                            </div><!-- end input-number-group -->
                        </div><!-- end booking-count -->
                        <div class="booking-btn-box">
                            <a href="#" class="theme__btn">request to book</a>
                        </div><!-- end booking-btn-box -->
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget open-widget">
                        <h3 class="widget__title">Opening Hours</h3>
                        <div class="opening-hours">
                            <div class="listing-badge theme__btn">
                                <span>now open</span>
                            </div>
                            <ul>
                                <li>Monday <span>9am - 5pm</span></li>
                                <li>Tuesday <span>9am - 5pm</span></li>
                                <li>Wednesday <span>9am - 5pm</span></li>
                                <li>Thursday <span>9am - 5pm</span></li>
                                <li>Friday <span>9am - 5am</span></li>
                                <li class="off-text">Sat-Sun <span>Closed</span></li>
                            </ul>
                        </div><!-- end opening-hours -->
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget category-widget">
                        <h3 class="widget__title">Categories</h3>
                        <div class="widget__list cat__list">
                            <ul>
                                <li><a href="#">Restaurant <span class="tag-span">11</span></a></li>
                                <li><a href="#">Shop <span class="tag-span">21</span></a></li>
                                <li><a href="#">Fitness <span class="tag-span">31</span></a></li>
                                <li><a href="#">Event <span class="tag-span">24</span></a></li>
                                <li><a href="#">Bar <span class="tag-span">15</span></a></li>
                                <li><a href="#">Salon <span class="tag-span">33</span></a></li>
                                <li><a href="#">Beauty <span class="tag-span">10</span></a></li>
                            </ul>
                        </div><!-- end cat-list -->
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget tag-widget">
                        <h3 class="widget__title">Tags</h3>
                        <div class="widget__list tag__list">
                            <ul>
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Restaurant</a></li>
                                <li><a href="#">Gym</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Office</a></li>
                                <li><a href="#">Car Parking</a></li>
                                <li><a href="#">Place</a></li>
                                <li><a href="#">Nightlife</a></li>
                                <li><a href="#">Disco</a></li>
                                <li><a href="#">Bar</a></li>
                                <li><a href="#">Bike Parking</a></li>
                            </ul>
                        </div><!-- end cat-list -->
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget similar-widget">
                        <h3 class="widget__title">Similar Listings</h3>
                        <div class="similar-list">
                            <div class="recent-item">
                                <div class="recent-img">
                                    <a href="blog-single.html">
                                        <img src="images/img34.jpg" alt="blog image">
                                    </a>
                                </div><!-- end recent-img -->
                                <div class="recentpost-body">
                                    <h4 class="recent__link">
                                        <a href="blog-single.html">The best sale marketer of the next year</a>
                                    </h4>
                                    <ul class="recent__star">
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star"></span></li>
                                    </ul>
                                    <span class="recent__meta"><a href="#">Gym & Fitness</a></span>
                                </div><!-- end recent-img -->
                            </div><!-- end recent-item -->
                            <div class="recent-item">
                                <div class="recent-img">
                                    <a href="blog-single.html">
                                        <img src="images/img35.jpg" alt="blog image">
                                    </a>
                                </div><!-- end recent-img -->
                                <div class="recentpost-body">
                                    <h4 class="recent__link">
                                        <a href="blog-single.html">How to make your ideas became true</a>
                                    </h4>
                                    <ul class="recent__star">
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star-half-empty"></span></li>
                                    </ul>
                                    <span class="recent__meta"><a href="#">Restaurants</a></span>
                                </div><!-- end recent-img -->
                            </div><!-- end recent-item -->
                            <div class="recent-item">
                                <div class="recent-img">
                                    <a href="blog-single.html">
                                        <img src="images/img36.jpg" alt="blog image">
                                    </a>
                                </div><!-- end recent-img -->
                                <div class="recentpost-body">
                                    <h4 class="recent__link">
                                        <a href="blog-single.html">What gets in the way of strategy</a>
                                    </h4>
                                    <ul class="recent__star">
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star"></span></li>
                                    </ul>
                                    <span class="recent__meta"><a href="#">Art & Design</a></span>
                                </div><!-- end recent-img -->
                            </div><!-- end recent-item -->
                            <div class="recent-item">
                                <div class="recent-img">
                                    <a href="blog-single.html">
                                        <img src="images/img37.jpg" alt="blog image">
                                    </a>
                                </div><!-- end recent-img -->
                                <div class="recentpost-body">
                                    <h4 class="recent__link">
                                        <a href="blog-single.html">What gets in the way of strategy</a>
                                    </h4>
                                    <ul class="recent__star">
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star-half-empty"></span></li>
                                    </ul>
                                    <span class="recent__meta"><a href="#">Outdoors</a></span>
                                </div><!-- end recent-img -->
                            </div><!-- end recent-item -->
                        </div><!-- end similar-list -->
                        <div class="view-listing">
                            <a href="#" class="theme__btn">
                                <span class="la la-eye"></span> see all listings
                            </a>
                        </div><!-- end view-listing -->
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget social-widget">
                        <h3 class="widget__title">follow & connect</h3>
                        <ul class="social__links">
                            <li>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Dribbble">
                                    <i class="fa fa-dribbble"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Behance">
                                    <i class="fa fa-behance"></i>
                                </a>
                            </li>
                        </ul>
                    </div><!-- end sidebar-widget -->
                </div><!-- end sidebar -->
            </div><!-- end col-md-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end single-listing-area -->
<!-- ================================
    END SINGLE-LISTING  AREA
================================= -->

<!-- ================================
    START MOST-VISITED AREA
================================= -->
<section class="most-visited-area most-visited-area3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2 class="sec__title sec__title4">People Also Viewed</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-md-8 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-md-12">
                <div class="most-visited-wrap">
                    <div class="most-visited-item">
                        <a href="listing-details.html">
                            <div class="listing-img-box">
                                <img src="images/img28.jpg" class="list-img" alt="">
                                <span class="list-name badge">now open</span>
                                <span class="like-icon" data-toggle="tooltip" data-placement="bottom" title="22 Likes">
                                    <i class="la la-heart-o"></i>
                                </span>
                            </div>
                        </a>
                        <div class="listing-content">
                            <div class="listing-row-content">
                                <a href="listing-details.html">
                                    <h5 class="listing-meta"><span class="la la-cutlery"></span> Restaurant</h5>
                                    <h4 class="listing-title">Favorite Place Food Bank</h4>
                                    <p class="listing-location">Bishop Avenue, New York</p>
                                </a>
                                <a href="#" class="author-img-box">
                                    <img src="images/small-team1.jpg" class="author-img" alt="author-img">
                                </a>
                                <ul class="listing-list">
                                    <li><span class="la la-phone"></span> (416) 551-0589</li>
                                    <li><span class="la la-link"></span>
                                        <a href="#"> www.mysitelink.com</a>
                                    </li>
                                    <li><span class="la la-calendar-check-o"></span>
                                        Posted 1 month ago
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
                    <div class="most-visited-item">
                        <a href="listing-details.html">
                            <div class="listing-img-box">
                                <img src="images/img29.jpg" class="list-img" alt="">
                                <span class="list-name badge badge-closed">closed</span>
                                <span class="like-icon" data-toggle="tooltip" data-placement="bottom" title="22 Likes">
                                    <i class="la la-heart-o"></i>
                                </span>
                            </div>
                        </a>
                        <div class="listing-content">
                            <div class="listing-row-content">
                                <a href="listing-details.html">
                                    <h5 class="listing-meta"><span class="la la-plane"></span> travel</h5>
                                    <h4 class="listing-title">beach blue boardwalk</h4>
                                    <p class="listing-location">Bishop Avenue, New York</p>
                                </a>
                                <a href="#" class="author-img-box">
                                    <img src="images/small-team2.jpg" class="author-img" alt="author-img">
                                </a>
                                <ul class="listing-list">
                                    <li><span class="la la-phone"></span> (416) 551-0589</li>
                                    <li><span class="la la-link"></span>
                                        <a href="#"> www.mysitelink.com</a>
                                    </li>
                                    <li><span class="la la-calendar-check-o"></span>
                                        Posted 1 month ago
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
                                    <span class="rating-count">4.6</span>
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
                    <div class="most-visited-item">
                        <a href="listing-details.html">
                            <div class="listing-img-box">
                                <img src="images/img30.jpg" class="list-img" alt="">
                                <span class="list-name badge">now open</span>
                                <span class="like-icon" data-toggle="tooltip" data-placement="bottom" title="22 Likes">
                                    <i class="la la-heart-o"></i>
                                </span>
                            </div>
                        </a>
                        <div class="listing-content">
                            <div class="listing-row-content">
                                <a href="listing-details.html">
                                    <h5 class="listing-meta"><span class="la la-hotel"></span> hotel</h5>
                                    <h4 class="listing-title">
                                        hotel govendor <i class="fa fa-check-circle" data-toggle="tooltip" data-placement="top" title="Claimed"></i>
                                    </h4>
                                    <p class="listing-location">Bishop Avenue, New York</p>
                                </a>
                                <a href="#" class="author-img-box">
                                    <img src="images/small-team3.jpg" class="author-img" alt="author-img">
                                </a>
                                <ul class="listing-list">
                                    <li><span class="la la-phone"></span> (416) 551-0589</li>
                                    <li><span class="la la-link"></span>
                                        <a href="#"> www.mysitelink.com</a>
                                    </li>
                                    <li><span class="la la-calendar-check-o"></span>
                                        Posted 1 month ago
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
                                    <span class="rating-count">4.7</span>
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
                    <div class="most-visited-item">
                        <a href="listing-details.html">
                            <div class="listing-img-box">
                                <img src="images/img31.jpg" class="list-img" alt="">
                                <span class="list-name badge">now open</span>
                                <span class="like-icon" data-toggle="tooltip" data-placement="bottom" title="22 Likes">
                                    <i class="la la-heart-o"></i>
                                </span>
                            </div>
                        </a>
                        <div class="listing-content">
                            <div class="listing-row-content">
                                <a href="listing-details.html">
                                    <h5 class="listing-meta"><span class="la la-music"></span> event</h5>
                                    <h4 class="listing-title">
                                        sticky band party <i class="fa fa-check-circle" data-toggle="tooltip" data-placement="top" title="Claimed"></i>
                                    </h4>
                                    <p class="listing-location">Bishop Avenue, New York</p>
                                </a>
                                <a href="#" class="author-img-box">
                                    <img src="images/small-team4.jpg" class="author-img" alt="author-img">
                                </a>
                                <ul class="listing-list">
                                    <li><span class="la la-phone"></span> (416) 551-0589</li>
                                    <li><span class="la la-link"></span>
                                        <a href="#"> www.mysitelink.com</a>
                                    </li>
                                    <li><span class="la la-calendar-check-o"></span>
                                        Posted 1 month ago
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
                    <div class="most-visited-item">
                        <a href="listing-details.html">
                            <div class="listing-img-box">
                                <img src="images/img32.jpg" class="list-img" alt="">
                                <span class="list-name badge badge-closed">closed</span>
                                <span class="like-icon" data-toggle="tooltip" data-placement="bottom" title="22 Likes">
                                    <i class="la la-heart-o"></i>
                                </span>
                            </div>
                        </a>
                        <div class="listing-content">
                            <div class="listing-row-content">
                                <a href="listing-details.html">
                                    <h5 class="listing-meta"><span class="la la-shopping-cart"></span> shopping</h5>
                                    <h4 class="listing-title">Sena Clothing Shopping Mall</h4>
                                    <p class="listing-location">Bishop Avenue, New York</p>
                                </a>
                                <a href="#" class="author-img-box">
                                    <img src="images/small-team5.jpg" class="author-img" alt="author-img">
                                </a>
                                <ul class="listing-list">
                                    <li><span class="la la-phone"></span> (416) 551-0589</li>
                                    <li><span class="la la-link"></span>
                                        <a href="#"> www.mysitelink.com</a>
                                    </li>
                                    <li><span class="la la-calendar-check-o"></span>
                                        Posted 1 month ago
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
                                    <span class="rating-count">4.6</span>
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
                    <div class="most-visited-item">
                        <a href="listing-details.html">
                            <div class="listing-img-box">
                                <img src="images/img33.jpg" class="list-img" alt="">
                                <span class="list-name badge">now open</span>
                                <span class="like-icon" data-toggle="tooltip" data-placement="bottom" title="22 Likes">
                                    <i class="la la-heart-o"></i>
                                </span>
                            </div>
                        </a>
                        <div class="listing-content">
                            <div class="listing-row-content">
                                <a href="listing-details.html">
                                    <h5 class="listing-meta"><span class="la la-gear"></span> gym</h5>
                                    <h4 class="listing-title">
                                        Bakar Fitness Center <i class="fa fa-check-circle" data-toggle="tooltip" data-placement="top" title="Claimed"></i>
                                    </h4>
                                    <p class="listing-location">Bishop Avenue, New York</p>
                                </a>
                                <a href="#" class="author-img-box">
                                    <img src="images/small-team6.jpg" class="author-img" alt="author-img">
                                </a>
                                <ul class="listing-list">
                                    <li><span class="la la-phone"></span> (416) 551-0589</li>
                                    <li><span class="la la-link"></span>
                                        <a href="#"> www.mysitelink.com</a>
                                    </li>
                                    <li><span class="la la-calendar-check-o"></span>
                                        Posted 1 month ago
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
                                    <span class="rating-count">4.7</span>
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
                </div><!-- end most-visited-wrap -->
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

@extends('layouts.app')
@section('content')
    <section class="hero-wrapper" id="home">
        <div class="hero-overlay"></div><!-- end hero-overlay -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-heading">
                        <h2 class="hero__title cd-headline zoom">
                            What are you interested in
                            <span class="cd-words-wrapper">
                            <b class="is-visible">Hotels</b>
                            <b>Restaurants</b>
                            <b>Shops</b>
                            <b>Salons</b>
                            <b>Apartments</b>
                            <b>Travels</b>
                            <b>Business</b>
                            <b>Fitness</b>
                        </span>
                        </h2>
                        <h4 class="hero__meta">
                            Discover the best places to stay, eat, shop & visit the city nearest to you.
                        </h4>
                    </div><!-- end hero-heading -->
                    <div class="main-search-input">
                        <div class="main-search-input-item">
                            <input class="form-control" type="text" placeholder="What are you looking for?">
                        </div><!-- end main-search-input-item -->
                        <div class="main-search-input-item location">
                            <select class="select-option-field">
                                <option value >Select a Location</option>
                                <option value="1">Australia</option>
                                <option value="2">AB Canada</option>
                                <option value="3">Amsterdam Natherlands</option>
                                <option value="4">Austin TX, USA</option>
                                <option value="5">Bengaluru Karnataka, India</option>
                                <option value="6">Berlin, Germany</option>
                                <option value="7">Barcelona, Spain</option>
                                <option value="8">USA</option>
                                <option value="9">UK</option>
                                <option value="10">United Arab Emirates</option>
                                <option value="11">Japan</option>
                                <option value="12">China</option>
                                <option value="13">Belgium</option>
                                <option value="14">France</option>
                                <option value="15">Austria</option>
                                <option value="16">Russia</option>
                                <option value="17">Sweden</option>
                                <option value="18">Norway</option>
                                <option value="19">Denmark</option>
                                <option value="20">Bangladesh</option>
                            </select>
                        </div><!-- end main-search-input-item -->
                        <div class="main-search-input-item category">
                            <select class="select-option-field-2">
                                <option value >Select a Category</option>
                                <option value="1">Shops</option>
                                <option value="2">Hotels</option>
                                <option value="3">Foods & Restaurants</option>
                                <option value="4">Fitness</option>
                                <option value="5">Travel</option>
                                <option value="6">Salons</option>
                                <option value="7">Event</option>
                                <option value="8">Business</option>
                            </select>
                        </div><!-- end main-search-input-item -->
                        <div class="main-search-input-btn">
                            <button class="button theme__btn" type="submit">Search</button>
                        </div><!-- end main-search-input-btn -->
                    </div><!-- end main-search-input -->
                    <div class="highlighted-categories">
                        <h4 class="highlighted__or">Or</h4>
                        <h5 class="highlighted__title">browse featured categories:</h5>
                        <ul class="highlighted-list-item">
                            <li>
                                <a href="#">
                                    <span class="highlight-icon hli-one"><i class="la la-building-o"></i></span>
                                    apartments
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="highlight-icon hli-one"><i class="la la-cutlery"></i></span>
                                    Restaurants
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="highlight-icon hli-two"><i class="la la-plane"></i></span>
                                    travel
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="highlight-icon hli-three"><i class="la la-music"></i></span>
                                    Events
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="highlight-icon hli-three"><i class="la la-gear"></i></span>
                                    fitness
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="highlight-icon hli-four"><i class="la la-hotel"></i></span>
                                    Hotels
                                </a>
                            </li>
                        </ul>
                    </div><!-- end highlighted-categories -->
                </div><!-- end col-md-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end hero-wrapper -->
    <!-- ================================
        END HERO-WRAPPER AREA
    ================================= -->

    <!-- ================================
        START CAT AREA
    ================================= -->
    <section class="cat-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-heading text-center">
                        <h2 class="sec__title">Most Popular Categories</h2>
                        <p class="sec__meta">
                            Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero,
                            a feugiat eros. Nunc ut lacinia
                            tortors.
                        </p>
                    </div><!-- end section-heading -->
                </div><!-- end col-md-8 -->
            </div><!-- end row -->
            <div class="row cat-info-wrap">
                <div class="col-md-3 col-sm-6">
                    <div class="cat-item">
                        <figure class="category-fig">
                            <img src="{{url('assets/images/img1.jpg')}}" alt="category-image" class="cat-img">
                            <figcaption class="fig-caption">
                                <a href="#" class="cat-fig-box">
                                    <div class="cat__icon">
                                        <span class="la la-cutlery"></span>
                                    </div>
                                    <div class="cat__content">
                                        <h4 class="cat__name-title">Restaurants</h4>
                                        <span class="badge">12 Listings</span>
                                    </div>
                                </a>
                            </figcaption>
                        </figure>
                    </div><!-- end cat-item -->
                </div><!-- end col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="cat-item">
                        <figure class="category-fig">
                            <img src="{{url('assets/images/img2.jpg')}}" alt="category-image" class="cat-img">
                            <figcaption class="fig-caption">
                                <a href="#" class="cat-fig-box">
                                    <div class="cat__icon">
                                        <span class="la la-plane"></span>
                                    </div>
                                    <div class="cat__content">
                                        <h4 class="cat__name-title">travels</h4>
                                        <span class="badge">22 Listings</span>
                                    </div>
                                </a>
                            </figcaption>
                        </figure>
                    </div><!-- end cat-item -->
                </div><!-- end col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="cat-item">
                        <figure class="category-fig">
                            <img src="{{url('assets/images/img3.jpg')}}" alt="category-image" class="cat-img">
                            <figcaption class="fig-caption">
                                <a href="#" class="cat-fig-box">
                                    <div class="cat__icon">
                                        <span class="la la-hotel"></span>
                                    </div>
                                    <div class="cat__content">
                                        <h4 class="cat__name-title">hotels</h4>
                                        <span class="badge">32 Listings</span>
                                    </div>
                                </a>
                            </figcaption>
                        </figure>
                    </div><!-- end cat-item -->
                </div><!-- end col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="cat-item">
                        <figure class="category-fig">
                            <img src="{{url('assets/images/img4.jpg')}}" alt="category-image" class="cat-img">
                            <figcaption class="fig-caption">
                                <a href="#" class="cat-fig-box">
                                    <div class="cat__icon">
                                        <span class="la la-music"></span>
                                    </div>
                                    <div class="cat__content">
                                        <h4 class="cat__name-title">events</h4>
                                        <span class="badge">44 Listings</span>
                                    </div>
                                </a>
                            </figcaption>
                        </figure>
                    </div><!-- end cat-item -->
                </div><!-- end col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="cat-item">
                        <figure class="category-fig">
                            <img src="{{url('assets/images/img5.jpg')}}" alt="category-image" class="cat-img">
                            <figcaption class="fig-caption">
                                <a href="#" class="cat-fig-box">
                                    <div class="cat__icon">
                                        <span class="la la-shopping-cart"></span>
                                    </div>
                                    <div class="cat__content">
                                        <h4 class="cat__name-title">shops</h4>
                                        <span class="badge">48 Listings</span>
                                    </div>
                                </a>
                            </figcaption>
                        </figure>
                    </div><!-- end cat-item -->
                </div><!-- end col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="cat-item">
                        <figure class="category-fig">
                            <img src="{{url('assets/images/img6.jpg')}}" alt="category-image" class="cat-img">
                            <figcaption class="fig-caption">
                                <a href="#" class="cat-fig-box">
                                    <div class="cat__icon">
                                        <span class="la la-gear"></span>
                                    </div>
                                    <div class="cat__content">
                                        <h4 class="cat__name-title">fitness</h4>
                                        <span class="badge">50 Listings</span>
                                    </div>
                                </a>
                            </figcaption>
                        </figure>
                    </div><!-- end cat-item -->
                </div><!-- end col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="cat-item">
                        <figure class="category-fig">
                            <img src="{{url('assets/images/img7.jpg')}}" alt="category-image" class="cat-img">
                            <figcaption class="fig-caption">
                                <a href="#" class="cat-fig-box">
                                    <div class="cat__icon">
                                        <span class="la la-glass"></span>
                                    </div>
                                    <div class="cat__content">
                                        <h4 class="cat__name-title">food & drink</h4>
                                        <span class="badge">14 Listings</span>
                                    </div>
                                </a>
                            </figcaption>
                        </figure>
                    </div><!-- end cat-item -->
                </div><!-- end col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="cat-item">
                        <figure class="category-fig">
                            <img src="{{url('assets/images/img8.jpg')}}" alt="category-image" class="cat-img">
                            <figcaption class="fig-caption">
                                <a href="#" class="cat-fig-box">
                                    <div class="cat__icon">
                                        <span class="la la-paint-brush"></span>
                                    </div>
                                    <div class="cat__content">
                                        <h4 class="cat__name-title">art & design</h4>
                                        <span class="badge">20 Listings</span>
                                    </div>
                                </a>
                            </figcaption>
                        </figure>
                    </div><!-- end cat-item -->
                </div><!-- end col-md-3 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end cat-area -->
    <!-- ================================
        END CAT AREA
    ================================= -->

    <!-- ================================
        START HIW AREA
    ================================= -->
    <!-- end hiw-area -->
    <!-- ================================
        END HIW AREA
    ================================= -->

    <!-- ================================
        START MOST-VISITED AREA
    ================================= -->
    <section class="most-visited-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-heading">
                        <h2 class="sec__title">Most Visited Places</h2>
                        <p class="sec__meta">
                            Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero,
                            a feugiat eros. Nunc ut lacinia tortors.
                        </p>
                    </div><!-- end section-heading -->
                </div><!-- end col-md-8 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="most-visited-wrap">
                        <div class="most-visited-item">
                            <a href="listing-details.html">
                                <div class="listing-img-box">
                                    <img src="{{url('assets/images/img28.jpg')}}" class="list-img" alt="">
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
                                        <h4 class="listing-title">Favorite Place Food Bank
                                            <i class="fa fa-check-circle" data-toggle="tooltip" data-placement="top" title="Claimed"></i>
                                        </h4>
                                        <p class="listing-location">Bishop Avenue, New York</p>
                                    </a>
                                    <a href="#" class="author-img-box">
                                        <img src="{{url('assets/images/small-team1.jpg')}}" class="author-img" alt="author-img">
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
                                    <img src="{{url('assets/images/img29.jpg')}}" class="list-img" alt="">
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
                                        <img src="{{url('assets/images/small-team2.jpg')}}" class="author-img" alt="author-img">
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
                                    <img src="{{url('assets/images/img30.jpg')}}" class="list-img" alt="">
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
                                        <img src="{{url('assets/images/small-team3.jpg')}}" class="author-img" alt="author-img">
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
                                    <img src="{{url('assets/images/img31.jpg')}}" class="list-img" alt="">
                                    <span class="list-name badge">now open</span>
                                    <span class="like-icon" data-toggle="tooltip" data-placement="bottom"
                                          title="22 Likes">
                                    <i class="la la-heart-o"></i>
                                </span>
                                </div>
                            </a>
                            <div class="listing-content">
                                <div class="listing-row-content">
                                    <a href="listing-details.html">
                                        <h5 class="listing-meta"><span class="la la-music"></span> event</h5>
                                        <h4 class="listing-title">sticky band party</h4>
                                        <p class="listing-location">Bishop Avenue, New York</p>
                                    </a>
                                    <a href="#" class="author-img-box">
                                        <img src="{{url('assets/images/small-team4.jpg')}}" class="author-img" alt="author-img">
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
                                    <img src="{{url('assets/images/img32.jpg')}}" class="list-img" alt="">
                                    <span class="list-name badge badge-closed">closed</span>
                                    <span class="like-icon" data-toggle="tooltip" data-placement="bottom" title="22 Likes">
                                    <i class="la la-heart-o"></i>
                                </span>
                                </div>
                            </a>
                            <div class="listing-content">
                                <div class="listing-row-content">
                                    <a href="listing-details.html">
                                        <h5 class="listing-meta"><span class="la la-shopping-cart"></span> shop</h5>
                                        <h4 class="listing-title">Sena Clothing Shopping Mall</h4>
                                        <p class="listing-location">Bishop Avenue, New York</p>
                                    </a>
                                    <a href="#" class="author-img-box">
                                        <img src="{{url('assets/images/small-team5.jpg')}}" class="author-img" alt="author-img">
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
                                    <img src="{{url('assets/images/img30.jpg')}}" class="list-img" alt="">
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
                                        <img src="{{url('assets/images/small-team6.jpg')}}" class="author-img" alt="author-img">
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
        START FUN-FACT AREA
    ================================= -->
    <section class="funfact-area text-center">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="section-heading">
                            <h2 class="sec__title sec__title2">Numbers Say Everything</h2>
                            <p class="sec__meta">
                                Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero,
                                a feugiat eros. Nunc ut lacinia tortors.
                            </p>
                        </div><!-- end section-heading -->
                    </div><!-- end col-md-8 -->
                </div><!-- end row -->
            </div><!-- end row -->
            <div class="row fun-fact-wrap">
                <div class="col-md-3 col-sm-6">
                    <div class="fun-item">
                        <div class="fun-number fun-bg1">
                            <span class="counter">1150</span>
                            <span class="count-symbol">+</span>
                        </div><!-- end fun-number -->
                        <div class="fun-content">
                            <p class="counter__title">Projects Completed</p>
                        </div><!-- end fun-content -->
                    </div><!-- end fun-item -->
                </div><!-- end col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="fun-item">
                        <div class="fun-number fun-bg2">
                            <span class="counter">3040</span>
                            <span class="count-symbol">+</span>
                        </div><!-- end fun-number -->
                        <div class="fun-content">
                            <p class="counter__title">Happy Clients</p>
                        </div><!-- end fun-content -->
                    </div><!-- end fun-item -->
                </div><!-- end col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="fun-item">
                        <div class="fun-number fun-bg3">
                            <span class="counter">2020</span>
                            <span class="count-symbol">+</span>
                        </div><!-- end fun-number -->
                        <div class="fun-content">
                            <p class="counter__title">Cup of Coffee</p>
                        </div><!-- end fun-content -->
                    </div><!-- end fun-item -->
                </div><!-- end col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="fun-item">
                        <div class="fun-number fun-bg4">
                            <span class="counter">350</span>
                            <span class="count-symbol">+</span>
                        </div><!-- end fun-number -->
                        <div class="fun-content">
                            <p class="counter__title">Awards Winning</p>
                        </div><!-- end fun-content -->
                    </div><!-- end fun-item -->
                </div><!-- end col-md-3 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end funfact-area -->
    <!-- ================================
        END FUN-FACT AREA
    ================================= -->

    <!-- ================================
        START HIW AREA
    ================================= -->
    <!-- end hiw-area -->
    <!-- ================================
        END HIW AREA
    ================================= -->

    <!-- ================================
        START CTA AREA
    ================================= -->
    <!-- ================================
        END CTA AREA
    ================================= -->

    <!-- ================================
           START TESTIMONIAL AREA
    ================================= -->
    <!-- ================================
           START TESTIMONIAL AREA
    ================================= -->

    <!-- ================================
           START BLOG AREA
    ================================= -->

    <!-- ================================
           START BLOG AREA
    ================================= -->

    <!-- ================================
           START CLIENTLOGO AREA
    ================================= -->
    <section class="clientlogo-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="client-logo">
                        <div class="client-logo-item">
                            <img src="{{url('assets/images/client-logo.png')}}" alt="brand image">
                        </div><!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <img src="{{url('assets/images/client-logo.png')}}" alt="brand image">
                        </div><!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <img src="{{url('assets/images/client-logo.png')}}" alt="brand image">
                        </div><!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <img src="{{url('assets/images/client-logo.png')}}" alt="brand image">
                        </div><!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <img src="{{url('assets/images/client-logo.png')}}" alt="brand image">
                        </div><!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <img src="{{url('assets/images/client-logo.png')}}" alt="brand image">
                        </div><!-- end client-logo-item -->
                    </div><!-- end client-logo -->
                </div><!-- end col-md-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end clientlogo-area -->
    <!-- ================================
           START CLIENTLOGO AREA
    ================================= -->


@endsection
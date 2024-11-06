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
                    <form action="{{route('searchresult')}}" method="get">
                    <div class="main-search-input">
                        <div class="main-search-input-item">
                            <input class="form-control" type="text" name="keyword" placeholder="What are you looking for?">
                        </div><!-- end main-search-input-item -->
                        <div class="main-search-input-item location">
                            <select class="form-control select-option-field" name="location">

                                <option value >Select a Location</option>
                                @foreach($locations as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div><!-- end main-search-input-item -->
                        <div class="main-search-input-item category">
                            <select class="form-control select-option-field-2" name="category">
                                <option value >Select a Category</option>
                                @foreach($category as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach

                            </select>
                        </div><!-- end main-search-input-item -->
                        <div class="main-search-input-btn">
                            <button class="button theme__btn" type="submit">Search</button>
                        </div><!-- end main-search-input-btn -->
                    </div><!-- end main-search-input -->
                    </form>
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
                    </div><!-- end section-heading -->
                </div><!-- end col-md-8 -->
            </div><!-- end row -->
            <div class="row cat-info-wrap">
                @foreach($category as $item)
                <div class="col-md-3 col-sm-6">
                    <div class="cat-item">
                        <figure class="category-fig">
                            <img src="{{url('assets/images/img1.jpg')}}" alt="category-image" class="cat-img">
                            <figcaption class="fig-caption">
                                <a href="{{url('searchresult?category='.$item->id)}}" class="cat-fig-box">
                                    <div class="cat__icon">
                                        <span class="{{$item->icon}}"></span>
                                    </div>
                                    <div class="cat__content">
                                        <h4 class="cat__name-title">{{$item->name}}</h4>
                                        <span class="badge">{{ Helper::listcount($item->id)}} Listings</span>
                                    </div>
                                </a>
                            </figcaption>
                        </figure>
                    </div><!-- end cat-item -->
                </div><!-- end col-md-3 -->
                @endforeach
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

                        @foreach($result as $item)
                        <div class="most-visited-item">
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
@endsection
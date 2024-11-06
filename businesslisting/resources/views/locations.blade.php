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
                            <h2 class="breadcrumb__title">all locations</h2>
                            <ul class="breadcrumb__list">
                                <li class="active__list-item"><a href="index.html">home</a></li>
                                <li class="active__list-item">categories</li>
                                <li>all locations</li>
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
        START CAT AREA
    ================================= -->
    <section class="cat-area cat-area2 cat-area3">
        <div class="container">
            <div class="row cat-info-wrap">

                @for($i=1;$i<=10;$i++)
                <div class="col-md-3 col-sm-6">
                    <div class="loc-item">
                        {{--<div class="loc-img">--}}
                            {{--<img src="{{url('assets/images/flag1.jpg')}}" alt="flag">--}}
                        {{--</div><!-- end loc-img -->--}}
                        <a href="#" class="loc-name">United states (2)</a>
                    </div><!-- end loc-item -->
                </div><!-- end col-md-3 -->
                @endfor


            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end cat-area -->
    <!-- ================================
        END CAT AREA
    ================================= -->

    <!-- ================================
        START CTA AREA
    ================================= -->
<!-- end cta-area -->
    <!-- ================================
        END CTA AREA
    ================================= -->

@endsection
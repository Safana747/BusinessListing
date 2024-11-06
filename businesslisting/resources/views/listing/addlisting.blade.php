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
                            <h2 class="breadcrumb__title">add listing</h2>
                            <ul class="breadcrumb__list">
                                <li class="active__list-item"><a href="index.html">home</a></li>
                                <li class="active__list-item">listings</li>
                                <li>add listing</li>
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
        START ADD-LISTING AREA
    ================================= -->
    <section class="add-listing-area">
        <div class="container">
            <form action="{{route('savelisting')}}"method="post" enctype="multipart/form-data">
                @csrf
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="add-list-form-item">
                        <div class="add-list-title-wrap">
                            <h3 class="add-lis-title">General Information</h3>
                        </div><!-- add-list-title-wrap -->
                        <div class="add-list-content">
                            <div class="contact-form-action">
                                <!--Contact Form-->

                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 form-group">
                                            <label class="label-text">Listing Title</label>
                                            <input class="form-control title" type="text" name="title" placeholder="Enter your listing title" required="">
                                        </div><!-- end col-md-12 -->

                                        <div class="col-md-6 col-sm-12 form-group">
                                            <label class="label-text">Category</label>
                                            <div class="add-cat-wrap">
                                                <select class="form-control select-option-field-2" name="category">
                                                    <option value >Select a Category</option>
                                                    @foreach($category as $item)
                                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div><!-- end add-cat-wrap -->
                                        </div>


                                        <!-- end col-md-12 -->
                                        <div class="col-md-12 col-sm-12 form-group">
                                            <label class="label-text">Description</label>
                                            <textarea class="message-control form-control" name="description" placeholder="Write your listing description"></textarea>
                                        </div><!-- end col-md-12 -->
                                        <!-- end col-md-12 -->
                                    </div><!-- end row -->

                            </div><!-- end contact-form-action -->
                        </div><!-- end add-list-content -->
                    </div><!-- end add-list-form-item -->
                </div><!-- end col-md-10 -->
                <div class="col-md-10 col-md-offset-1">
                    <div class="add-list-form-item">
                        <div class="add-list-title-wrap">
                            <h3 class="add-lis-title">Add Location</h3>
                        </div><!-- add-list-title-wrap -->
                        <div class="add-list-content">
                            <div class="contact-form-action">
                                <!--Contact Form-->

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 form-group">
                                            <label class="label-text">Address</label>
                                            <input class="form-control" type="text" name="address" placeholder="Your address" required="">
                                        </div><!-- end col-md-12 -->
                                        <div class="col-md-6 col-sm-12 form-group">
                                            <label class="label-text">State</label>
                                            <div class="add-cat-wrap">
                                                <select class="form-control select-option-field-7" id="state" name="state">
                                                    <option value >Select a State</option>
                                                    @foreach($state as $item)
                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div><!-- end add-cat-wrap -->
                                        </div>
                                        <div class="col-md-6 col-sm-12 form-group">
                                            <label class="label-text">District</label>
                                            <div class="add-cat-wrap">
                                                <select class="form-control select-option-field-6" id="district" name="district">
                                                    <option value >Select a District</option>

                                                </select>
                                            </div><!-- end add-cat-wrap -->
                                        </div><!-- end col-md-6 -->
<!-- end col-md-6 -->
                                        <div class="col-md-6 col-sm-12 form-group">
                                            <label class="label-text">Location</label>
                                            <div class="add-cat-wrap">
                                                <select class="form-control select-option-field-8" id="location" name="location">
                                                    <option value >Select a location</option>


                                                </select>
                                            </div><!-- end add-cat-wrap -->
                                        </div><!-- end col-md-6 -->
                                        <div class="col-md-6 col-sm-12 form-group">
                                            <label class="label-text">
                                                Pin-Code
                                            </label>
                                            <input class="form-control" type="text" name="pincode" placeholder="Pin-Code" required="">
                                        </div><!-- end col-md-6 -->
                                    </div><!-- end row -->

                            </div><!-- end contact-form-action -->
                        </div><!-- end add-list-content -->
                    </div><!-- end add-list-form-item -->
                </div><!-- end col-md-10 -->
                <div class="col-md-10 col-md-offset-1">
                    <div class="add-list-form-item">
                        <div class="add-list-title-wrap">
                            <h3 class="add-lis-title">Full Details</h3>
                        </div><!-- add-list-title-wrap -->
                        <div class="add-list-content">
                            <div class="contact-form-action">
                                <!--Contact Form-->

                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 form-group">
                                            <label class="label-text">Phone</label>
                                            <input class="form-control" type="text" name="phone" placeholder="Name" required="">
                                        </div><!-- end col-md-6 -->
                                        <div class="col-md-6 col-sm-12 form-group">
                                            <label class="label-text">E-mail</label>
                                            <input class="form-control" type="email" name="email" placeholder="E-mail address" required="">
                                        </div><!-- end col-md-6 -->
                                        <div class="col-md-6 col-sm-12 form-group">
                                            <label class="label-text">Alternate phone</label>
                                            <input class="form-control" type="text" name="phone2" placeholder="Number" required="">
                                        </div><!-- end col-md-6 -->
                                        <div class="col-md-6 col-sm-12 form-group">
                                            <label class="label-text">Website</label>
                                            <input class="form-control" type="text" name="website" placeholder="www.techydevs.com" required="">
                                        </div><!-- end col-md-6 -->
                                        <div class="col-md-6 col-sm-12 form-group">
                                            <label class="label-text">Facebook Link</label>
                                            <input class="form-control" type="text" name="facebook" placeholder="https://www.facebook.com/">
                                        </div><!-- end col-md-6 -->
                                        <div class="col-md-6 col-sm-12 form-group">
                                            <label class="label-text">Twitter Link</label>
                                            <input class="form-control" type="text" name="twitter" placeholder="https://www.twitter.com/">
                                        </div><!-- end col-md-6 -->
                                        <div class="col-md-6 col-sm-12 form-group">
                                            <label class="label-text">Whatsapp</label>
                                            <input class="form-control" type="text" name="whatsapp" placeholder="whatsapp number">
                                        </div><!-- end col-md-6 -->
                                        <div class="col-md-6 col-sm-12 form-group">
                                            <label class="label-text">Linkedin Link</label>
                                            <input class="form-control" type="text" name="linkedin" placeholder="www.linkedin.com/">
                                        </div><!-- end col-md-6 -->
                                        <!-- end col-md-12 -->
                                    </div><!-- end row -->

                            </div><!-- end contact-form-action -->
                        </div><!-- end add-list-content -->
                    </div><!-- end add-list-form-item -->
                </div><!-- end col-md-10 -->
                <div class="col-md-10 col-md-offset-1">
                    <div class="add-list-form-item">
                        <div class="add-list-title-wrap">
                            <h3 class="add-lis-title">Photo</h3>
                        </div><!-- add-list-title-wrap -->
                        <div class="add-list-content">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 upload-btn-wrapper">
                                    <div class="drag-and-drop-file">
                                            <input type="file" name="images[]" id="filer_input2">
                                            <input type="file" name="images[]" id="filer_input2">
                                            <input type="file" name="images[]" id="filer_input2">

                                    </div><!-- end custom-file -->
                                </div><!-- end col-md-12 -->
                            </div><!-- end row -->
                        </div><!-- end add-list-content -->
                    </div><!-- end add-list-form-item -->
                </div><!-- end col-md-10 -->
                {{--<div class="col-md-10 col-md-offset-1">--}}
                    {{--<div class="add-list-form-item">--}}
                        {{--<div class="add-list-title-wrap">--}}
                            {{--<h3 class="add-lis-title">Amenities</h3>--}}
                        {{--</div><!-- add-list-title-wrap -->--}}
                        {{--<div class="add-list-content"><div class="custom-checkbox">--}}
                                {{--<input type="checkbox" id="chb1">--}}
                                {{--<label for="chb1">Free Parking</label>--}}
                            {{--</div><!-- end custom-checkbox -->--}}

                            {{--<div class="custom-checkbox">--}}
                                {{--<input type="checkbox" id="chb2">--}}
                                {{--<label for="chb2">Free Wi-fi</label>--}}
                            {{--</div><!-- end custom-checkbox -->--}}
                            {{--<div class="custom-checkbox">--}}
                                {{--<input type="checkbox" id="chb3">--}}
                                {{--<label for="chb3">Catering Service</label>--}}
                            {{--</div><!-- end custom-checkbox -->--}}
                            {{--<div class="custom-checkbox">--}}
                                {{--<input type="checkbox" id="chb4">--}}
                                {{--<label for="chb4">Wheelchair Accessible</label>--}}
                            {{--</div><!-- end custom-checkbox -->--}}
                            {{--<div class="custom-checkbox">--}}
                                {{--<input type="checkbox" id="chb5">--}}
                                {{--<label for="chb5">Hostel fasility</label>--}}
                            {{--</div><!-- end custom-checkbox -->--}}
                            {{--<div class="custom-checkbox">--}}
                                {{--<input type="checkbox" id="chb6">--}}
                                {{--<label for="chb6">Home Delivery</label>--}}
                            {{--</div><!-- end custom-checkbox -->--}}
                            {{--<div class="custom-checkbox">--}}
                                {{--<input type="checkbox" id="chb7">--}}
                                {{--<label for="chb7">Smoking Allowed</label>--}}
                            {{--</div><!-- end custom-checkbox -->--}}
                            {{--<div class="custom-checkbox">--}}
                                {{--<input type="checkbox" id="chb8">--}}
                                {{--<label for="chb8">Online Payment</label>--}}
                            {{--</div><!-- end custom-checkbox -->--}}
                            {{--<div class="custom-checkbox">--}}
                                {{--<input type="checkbox" id="chb9">--}}
                                {{--<label for="chb9">Friendly Workspace</label>--}}
                            {{--</div><!-- end custom-checkbox -->--}}
                            {{--<div class="custom-checkbox">--}}
                                {{--<input type="checkbox" id="chb10">--}}
                                {{--<label for="chb10">Electricity</label>--}}
                            {{--</div><!-- end custom-checkbox -->--}}
                            {{--<div class="custom-checkbox">--}}
                                {{--<input type="checkbox" id="chb11">--}}
                                {{--<label for="chb11">Attached Garage</label>--}}
                            {{--</div><!-- end custom-checkbox -->--}}
                            {{--<div class="custom-checkbox">--}}
                                {{--<input type="checkbox" id="chb12">--}}
                                {{--<label for="chb12">Card Payment</label>--}}
                            {{--</div><!-- end custom-checkbox -->--}}
                            {{--<div class="custom-checkbox">--}}
                                {{--<input type="checkbox" id="chb15">--}}
                                {{--<label for="chb15">Family Room</label>--}}
                            {{--</div><!-- end custom-checkbox -->--}}
                        {{--</div><!-- end add-list-content -->--}}
                    {{--</div><!-- end add-list-form-item -->--}}
                {{--</div><!-- end col-md-10 -->--}}
                <div class="col-md-10 col-md-offset-1">
                    <div class="add-list-form-item">
                        <div class="add-list-title-wrap">
                            <h3 class="add-lis-title">Opening Hours</h3>
                        </div><!-- add-list-title-wrap -->
                        <div class="add-list-content">
                            <div class="contact-form-action">
                                <!--Contact Form-->

                                    <div class="row">
                                        <div class="col-md-12 form-group time-label-group">
                                            <label class="label-text">Monday</label>
                                        </div><!-- end col-md-12 -->
                                        <div class="col-md-6 col-sm-12 form-group">
                                            <div class="add-cat-wrap">
                                                <select class="form-control select-option-field-9" name="mon_open">
                                                    <option value="" >Opening Time</option>
                                                    <option value="open">Open</option>
                                                    <option value="1">1:00am</option>
                                                    <option value="2">2:00am</option>
                                                    <option value="3">3:00am</option>
                                                    <option value="4">4:00am</option>
                                                    <option value="5">5:00pm</option>
                                                    <option value="6">6:00pm</option>
                                                    <option value="7">7:00pm</option>
                                                    <option value="8">8:00pm</option>
                                                    <option value="9">9:00am</option>
                                                    <option value="10">10:00am</option>
                                                    <option value="11">11:00am</option>
                                                    <option value="12">12:00am</option>
                                                    <option value="13">1:00pm</option>
                                                    <option value="14">2:00pm</option>
                                                    <option value="15">3:00pm</option>
                                                    <option value="16">4:00pm</option>
                                                    <option value="17">5:00pm</option>
                                                    <option value="18">6:00pm</option>
                                                    <option value="19">7:00pm</option>
                                                    <option value="20">8:00pm</option>
                                                    <option value="21">9:00pm</option>
                                                    <option value="22">10:00pm</option>
                                                    <option value="23">11:00pm</option>
                                                    <option value="24">12:00pm</option>
                                                </select>
                                            </div><!-- end add-cat-wrap -->
                                        </div><!-- end col-md-6 -->
                                        <div class="col-md-6 col-sm-12 form-group">
                                            <div class="add-cat-wrap">
                                                <select class="form-control select-option-field-10" name="mon_close">
                                                    <option value="" >Closing Time</option>
                                                    <option value="closed">Closed</option>
                                                    <option value="1">1:00am</option>
                                                    <option value="2">2:00am</option>
                                                    <option value="3">3:00am</option>
                                                    <option value="4">4:00am</option>
                                                    <option value="5">5:00pm</option>
                                                    <option value="6">6:00pm</option>
                                                    <option value="7">7:00pm</option>
                                                    <option value="8">8:00pm</option>
                                                    <option value="9">9:00am</option>
                                                    <option value="10">10:00am</option>
                                                    <option value="11">11:00am</option>
                                                    <option value="12">12:00am</option>
                                                    <option value="13">1:00pm</option>
                                                    <option value="14">2:00pm</option>
                                                    <option value="15">3:00pm</option>
                                                    <option value="16">4:00pm</option>
                                                    <option value="17">5:00pm</option>
                                                    <option value="18">6:00pm</option>
                                                    <option value="19">7:00pm</option>
                                                    <option value="20">8:00pm</option>
                                                    <option value="21">9:00pm</option>
                                                    <option value="22">10:00pm</option>
                                                    <option value="23">11:00pm</option>
                                                    <option value="24">12:00pm</option>
                                                </select>
                                            </div><!-- end add-cat-wrap -->
                                        </div><!-- end col-md-6 -->
                                        <div class="col-md-12 form-group time-label-group">
                                            <label class="label-text">Tuesday</label>
                                        </div><!-- end col-md-12 -->
                                        <div class="col-md-6 col-sm-12 form-group">
                                            <div class="add-cat-wrap">
                                                <select class="form-control select-option-field-9" name="tue_open">
                                                    <option value="">Opening Time</option>
                                                    <option value="open">Open</option>
                                                    <option value="1">1:00am</option>
                                                    <option value="2">2:00am</option>
                                                    <option value="3">3:00am</option>
                                                    <option value="4">4:00am</option>
                                                    <option value="5">5:00pm</option>
                                                    <option value="6">6:00pm</option>
                                                    <option value="7">7:00pm</option>
                                                    <option value="8">8:00pm</option>
                                                    <option value="9">9:00am</option>
                                                    <option value="10">10:00am</option>
                                                    <option value="11">11:00am</option>
                                                    <option value="12">12:00am</option>
                                                    <option value="13">1:00pm</option>
                                                    <option value="14">2:00pm</option>
                                                    <option value="15">3:00pm</option>
                                                    <option value="16">4:00pm</option>
                                                    <option value="17">5:00pm</option>
                                                    <option value="18">6:00pm</option>
                                                    <option value="19">7:00pm</option>
                                                    <option value="20">8:00pm</option>
                                                    <option value="21">9:00pm</option>
                                                    <option value="22">10:00pm</option>
                                                    <option value="23">11:00pm</option>
                                                    <option value="24">12:00pm</option>
                                                </select>
                                            </div><!-- end add-cat-wrap -->
                                        </div><!-- end col-md-6 -->
                                        <div class="col-md-6 col-sm-12 form-group">
                                            <div class="add-cat-wrap">
                                                <select class="form-control select-option-field-10"  name="tue_close">
                                                    <option value="">Closing Time</option>
                                                    <option value="closed">Closed</option>
                                                    <option value="1">1:00am</option>
                                                    <option value="2">2:00am</option>
                                                    <option value="3">3:00am</option>
                                                    <option value="4">4:00am</option>
                                                    <option value="5">5:00pm</option>
                                                    <option value="6">6:00pm</option>
                                                    <option value="7">7:00pm</option>
                                                    <option value="8">8:00pm</option>
                                                    <option value="9">9:00am</option>
                                                    <option value="10">10:00am</option>
                                                    <option value="11">11:00am</option>
                                                    <option value="12">12:00am</option>
                                                    <option value="13">1:00pm</option>
                                                    <option value="14">2:00pm</option>
                                                    <option value="15">3:00pm</option>
                                                    <option value="16">4:00pm</option>
                                                    <option value="17">5:00pm</option>
                                                    <option value="18">6:00pm</option>
                                                    <option value="19">7:00pm</option>
                                                    <option value="20">8:00pm</option>
                                                    <option value="21">9:00pm</option>
                                                    <option value="22">10:00pm</option>
                                                    <option value="23">11:00pm</option>
                                                    <option value="24">12:00pm</option>
                                                </select>
                                            </div><!-- end add-cat-wrap -->
                                        </div><!-- end col-md-6 -->
                                        <div class="col-md-12 form-group time-label-group">
                                            <label class="label-text">Wednesday</label>
                                        </div><!-- end col-md-12 -->
                                        <div class="col-md-6 col-sm-12 form-group">
                                            <div class="add-cat-wrap">
                                                <select class="form-control select-option-field-9" name="wed_open">
                                                    <option value="">Opening Time</option>
                                                    <option value="open">Open</option>
                                                    <option value="1">1:00am</option>
                                                    <option value="2">2:00am</option>
                                                    <option value="3">3:00am</option>
                                                    <option value="4">4:00am</option>
                                                    <option value="5">5:00pm</option>
                                                    <option value="6">6:00pm</option>
                                                    <option value="7">7:00pm</option>
                                                    <option value="8">8:00pm</option>
                                                    <option value="9">9:00am</option>
                                                    <option value="10">10:00am</option>
                                                    <option value="11">11:00am</option>
                                                    <option value="12">12:00am</option>
                                                    <option value="13">1:00pm</option>
                                                    <option value="14">2:00pm</option>
                                                    <option value="15">3:00pm</option>
                                                    <option value="16">4:00pm</option>
                                                    <option value="17">5:00pm</option>
                                                    <option value="18">6:00pm</option>
                                                    <option value="19">7:00pm</option>
                                                    <option value="20">8:00pm</option>
                                                    <option value="21">9:00pm</option>
                                                    <option value="22">10:00pm</option>
                                                    <option value="23">11:00pm</option>
                                                    <option value="24">12:00pm</option>
                                                </select>
                                            </div><!-- end add-cat-wrap -->
                                        </div><!-- end col-md-6 -->
                                        <div class="col-md-6 col-sm-12 form-group">
                                            <div class="add-cat-wrap">
                                                <select class="form-control select-option-field-10" name="wed_close">
                                                    <option value="">Closing Time</option>
                                                    <option value="closed">Closed</option>
                                                    <option value="1">1:00am</option>
                                                    <option value="2">2:00am</option>
                                                    <option value="3">3:00am</option>
                                                    <option value="4">4:00am</option>
                                                    <option value="5">5:00pm</option>
                                                    <option value="6">6:00pm</option>
                                                    <option value="7">7:00pm</option>
                                                    <option value="8">8:00pm</option>
                                                    <option value="9">9:00am</option>
                                                    <option value="10">10:00am</option>
                                                    <option value="11">11:00am</option>
                                                    <option value="12">12:00am</option>
                                                    <option value="13">1:00pm</option>
                                                    <option value="14">2:00pm</option>
                                                    <option value="15">3:00pm</option>
                                                    <option value="16">4:00pm</option>
                                                    <option value="17">5:00pm</option>
                                                    <option value="18">6:00pm</option>
                                                    <option value="19">7:00pm</option>
                                                    <option value="20">8:00pm</option>
                                                    <option value="21">9:00pm</option>
                                                    <option value="22">10:00pm</option>
                                                    <option value="23">11:00pm</option>
                                                    <option value="24">12:00pm</option>
                                                </select>
                                            </div><!-- end add-cat-wrap -->
                                        </div><!-- end col-md-6 -->
                                        <div class="col-md-12 form-group time-label-group">
                                            <label class="label-text">Thursday</label>
                                        </div><!-- end col-md-12 -->
                                        <div class="col-md-6 col-sm-12 form-group">
                                            <div class="add-cat-wrap">
                                                <select class="form-control select-option-field-9" name="thur_open">
                                                    <option value ="">Opening Time</option>
                                                    <option value="open">Open</option>
                                                    <option value="1">1:00am</option>
                                                    <option value="2">2:00am</option>
                                                    <option value="3">3:00am</option>
                                                    <option value="4">4:00am</option>
                                                    <option value="5">5:00pm</option>
                                                    <option value="6">6:00pm</option>
                                                    <option value="7">7:00pm</option>
                                                    <option value="8">8:00pm</option>
                                                    <option value="9">9:00am</option>
                                                    <option value="10">10:00am</option>
                                                    <option value="11">11:00am</option>
                                                    <option value="12">12:00am</option>
                                                    <option value="13">1:00pm</option>
                                                    <option value="14">2:00pm</option>
                                                    <option value="15">3:00pm</option>
                                                    <option value="16">4:00pm</option>
                                                    <option value="17">5:00pm</option>
                                                    <option value="18">6:00pm</option>
                                                    <option value="19">7:00pm</option>
                                                    <option value="20">8:00pm</option>
                                                    <option value="21">9:00pm</option>
                                                    <option value="22">10:00pm</option>
                                                    <option value="23">11:00pm</option>
                                                    <option value="24">12:00pm</option>
                                                </select>
                                            </div><!-- end add-cat-wrap -->
                                        </div><!-- end col-md-6 -->
                                        <div class="col-md-6 col-sm-12 form-group">
                                            <div class="add-cat-wrap">
                                                <select class="form-control select-option-field-10" name="thur_close">
                                                    <option value >Closing Time</option>
                                                    <option value="closed">Closed</option>
                                                    <option value="1">1:00am</option>
                                                    <option value="2">2:00am</option>
                                                    <option value="3">3:00am</option>
                                                    <option value="4">4:00am</option>
                                                    <option value="5">5:00pm</option>
                                                    <option value="6">6:00pm</option>
                                                    <option value="7">7:00pm</option>
                                                    <option value="8">8:00pm</option>
                                                    <option value="9">9:00am</option>
                                                    <option value="10">10:00am</option>
                                                    <option value="11">11:00am</option>
                                                    <option value="12">12:00am</option>
                                                    <option value="13">1:00pm</option>
                                                    <option value="14">2:00pm</option>
                                                    <option value="15">3:00pm</option>
                                                    <option value="16">4:00pm</option>
                                                    <option value="17">5:00pm</option>
                                                    <option value="18">6:00pm</option>
                                                    <option value="19">7:00pm</option>
                                                    <option value="20">8:00pm</option>
                                                    <option value="21">9:00pm</option>
                                                    <option value="22">10:00pm</option>
                                                    <option value="23">11:00pm</option>
                                                    <option value="24">12:00pm</option>
                                                </select>
                                            </div><!-- end add-cat-wrap -->
                                        </div><!-- end col-md-6 -->
                                        <div class="col-md-12 form-group time-label-group">
                                            <label class="label-text">Friday</label>
                                        </div><!-- end col-md-12 -->
                                        <div class="col-md-6 col-sm-12 form-group">
                                            <div class="add-cat-wrap">
                                                <select class="form-control select-option-field-9" name="fri_open">
                                                    <option value="">Opening Time</option>
                                                    <option value="open">Open</option>
                                                    <option value="1">1:00am</option>
                                                    <option value="2">2:00am</option>
                                                    <option value="3">3:00am</option>
                                                    <option value="4">4:00am</option>
                                                    <option value="5">5:00pm</option>
                                                    <option value="6">6:00pm</option>
                                                    <option value="7">7:00pm</option>
                                                    <option value="8">8:00pm</option>
                                                    <option value="9">9:00am</option>
                                                    <option value="10">10:00am</option>
                                                    <option value="11">11:00am</option>
                                                    <option value="12">12:00am</option>
                                                    <option value="13">1:00pm</option>
                                                    <option value="14">2:00pm</option>
                                                    <option value="15">3:00pm</option>
                                                    <option value="16">4:00pm</option>
                                                    <option value="17">5:00pm</option>
                                                    <option value="18">6:00pm</option>
                                                    <option value="19">7:00pm</option>
                                                    <option value="20">8:00pm</option>
                                                    <option value="21">9:00pm</option>
                                                    <option value="22">10:00pm</option>
                                                    <option value="23">11:00pm</option>
                                                    <option value="24">12:00pm</option>
                                                </select>
                                            </div><!-- end add-cat-wrap -->
                                        </div><!-- end col-md-6 -->
                                        <div class="col-md-6 col-sm-12 form-group">
                                            <div class="add-cat-wrap">
                                                <select class="form-control select-option-field-10" name="fri_close">
                                                    <option value="">Closing Time</option>
                                                    <option value="closed">Closed</option>
                                                    <option value="1">1:00am</option>
                                                    <option value="2">2:00am</option>
                                                    <option value="3">3:00am</option>
                                                    <option value="4">4:00am</option>
                                                    <option value="5">5:00pm</option>
                                                    <option value="6">6:00pm</option>
                                                    <option value="7">7:00pm</option>
                                                    <option value="8">8:00pm</option>
                                                    <option value="9">9:00am</option>
                                                    <option value="10">10:00am</option>
                                                    <option value="11">11:00am</option>
                                                    <option value="12">12:00am</option>
                                                    <option value="13">1:00pm</option>
                                                    <option value="14">2:00pm</option>
                                                    <option value="15">3:00pm</option>
                                                    <option value="16">4:00pm</option>
                                                    <option value="17">5:00pm</option>
                                                    <option value="18">6:00pm</option>
                                                    <option value="19">7:00pm</option>
                                                    <option value="20">8:00pm</option>
                                                    <option value="21">9:00pm</option>
                                                    <option value="22">10:00pm</option>
                                                    <option value="23">11:00pm</option>
                                                    <option value="24">12:00pm</option>
                                                </select>
                                            </div><!-- end add-cat-wrap -->
                                        </div><!-- end col-md-6 -->
                                        <div class="col-md-12 form-group time-label-group">
                                            <label class="label-text">Saturday</label>
                                        </div><!-- end col-md-12 -->
                                        <div class="col-md-6 col-sm-12 form-group">
                                            <div class="add-cat-wrap">
                                                <select class="form-control select-option-field-9" name="sat_open">
                                                    <option value="">Opening Time</option>
                                                    <option value="open">Open</option>
                                                    <option value="1">1:00am</option>
                                                    <option value="2">2:00am</option>
                                                    <option value="3">3:00am</option>
                                                    <option value="4">4:00am</option>
                                                    <option value="5">5:00pm</option>
                                                    <option value="6">6:00pm</option>
                                                    <option value="7">7:00pm</option>
                                                    <option value="8">8:00pm</option>
                                                    <option value="9">9:00am</option>
                                                    <option value="10">10:00am</option>
                                                    <option value="11">11:00am</option>
                                                    <option value="12">12:00am</option>
                                                    <option value="13">1:00pm</option>
                                                    <option value="14">2:00pm</option>
                                                    <option value="15">3:00pm</option>
                                                    <option value="16">4:00pm</option>
                                                    <option value="17">5:00pm</option>
                                                    <option value="18">6:00pm</option>
                                                    <option value="19">7:00pm</option>
                                                    <option value="20">8:00pm</option>
                                                    <option value="21">9:00pm</option>
                                                    <option value="22">10:00pm</option>
                                                    <option value="23">11:00pm</option>
                                                    <option value="24">12:00pm</option>
                                                </select>
                                            </div><!-- end add-cat-wrap -->
                                        </div><!-- end col-md-6 -->
                                        <div class="col-md-6 col-sm-12 form-group">
                                            <div class="add-cat-wrap">
                                                <select class="form-control select-option-field-10" name="sat_close">
                                                    <option value="" >Closing Time</option>
                                                    <option value="closed">Closed</option>
                                                    <option value="1">1:00am</option>
                                                    <option value="2">2:00am</option>
                                                    <option value="3">3:00am</option>
                                                    <option value="4">4:00am</option>
                                                    <option value="5">5:00pm</option>
                                                    <option value="6">6:00pm</option>
                                                    <option value="7">7:00pm</option>
                                                    <option value="8">8:00pm</option>
                                                    <option value="9">9:00am</option>
                                                    <option value="10">10:00am</option>
                                                    <option value="11">11:00am</option>
                                                    <option value="12">12:00am</option>
                                                    <option value="13">1:00pm</option>
                                                    <option value="14">2:00pm</option>
                                                    <option value="15">3:00pm</option>
                                                    <option value="16">4:00pm</option>
                                                    <option value="17">5:00pm</option>
                                                    <option value="18">6:00pm</option>
                                                    <option value="19">7:00pm</option>
                                                    <option value="20">8:00pm</option>
                                                    <option value="21">9:00pm</option>
                                                    <option value="22">10:00pm</option>
                                                    <option value="23">11:00pm</option>
                                                    <option value="24">12:00pm</option>
                                                </select>
                                            </div><!-- end add-cat-wrap -->
                                        </div><!-- end col-md-6 -->
                                        <div class="col-md-12 form-group time-label-group">
                                            <label class="label-text">Sunday</label>
                                        </div><!-- end col-md-12 -->
                                        <div class="col-md-6 col-sm-12 form-group">
                                            <div class="add-cat-wrap">
                                                <select class="form-control select-option-field-9" name="sun_open">
                                                    <option value="">Opening Time</option>
                                                    <option value="open">Open</option>
                                                    <option value="1">1:00am</option>
                                                    <option value="2">2:00am</option>
                                                    <option value="3">3:00am</option>
                                                    <option value="4">4:00am</option>
                                                    <option value="5">5:00pm</option>
                                                    <option value="6">6:00pm</option>
                                                    <option value="7">7:00pm</option>
                                                    <option value="8">8:00pm</option>
                                                    <option value="9">9:00am</option>
                                                    <option value="10">10:00am</option>
                                                    <option value="11">11:00am</option>
                                                    <option value="12">12:00am</option>
                                                    <option value="13">1:00pm</option>
                                                    <option value="14">2:00pm</option>
                                                    <option value="15">3:00pm</option>
                                                    <option value="16">4:00pm</option>
                                                    <option value="17">5:00pm</option>
                                                    <option value="18">6:00pm</option>
                                                    <option value="19">7:00pm</option>
                                                    <option value="20">8:00pm</option>
                                                    <option value="21">9:00pm</option>
                                                    <option value="22">10:00pm</option>
                                                    <option value="23">11:00pm</option>
                                                    <option value="24">12:00pm</option>
                                                </select>
                                            </div><!-- end add-cat-wrap -->
                                        </div><!-- end col-md-6 -->
                                        <div class="col-md-6 col-sm-12 form-group">
                                            <div class="add-cat-wrap">
                                                <select class="form-control select-option-field-10" name="sun_close">
                                                    <option value="">Closing Time</option>
                                                    <option value="closed">Closed</option>
                                                    <option value="1:00am">1:00am</option>
                                                    <option value="2:00am">2:00am</option>
                                                    <option value="3:00am">3:00am</option>
                                                    <option value="4:00am">4:00am</option>
                                                    <option value="5:00am">5:00pm</option>
                                                    <option value="6:00am">6:00pm</option>
                                                    <option value="7:00am">7:00pm</option>
                                                    <option value="8:00am">8:00pm</option>
                                                    <option value="9:00am">9:00am</option>
                                                    <option value="10:00am">10:00am</option>
                                                    <option value="11:00am">11:00am</option>
                                                    <option value="12:00am">12:00am</option>
                                                    <option value="13:00am">1:00pm</option>
                                                    <option value="14:00am">2:00pm</option>
                                                    <option value="15:00am">3:00pm</option>
                                                    <option value="16:00am">4:00pm</option>
                                                    <option value="17:00am">5:00pm</option>
                                                    <option value="18:00am">6:00pm</option>
                                                    <option value="12:00pm">7:00pm</option>
                                                    <option value="12:00pm">8:00pm</option>
                                                    <option value="12:00pm">9:00pm</option>
                                                    <option value="12:00pm">10:00pm</option>
                                                    <option value="12:00pm">11:00pm</option>
                                                    <option value="12:00pm">12:00pm</option>
                                                </select>
                                            </div><!-- end add-cat-wrap -->
                                        </div><!-- end col-md-6 -->
                                    </div><!-- end row -->

                            </div><!-- end contact-form-action -->
                        </div><!-- end add-list-content -->
                    </div><!-- end add-list-form-item -->
                </div><!-- end col-md-10 -->

                <div class="col-md-10 col-md-offset-1">
                    <div class="add-list-form-item add-list-sub-btn-box">
                        <div class="add-list-content">
                            <div class="custom-checkbox">
                                <input type="checkbox" id="chb13">
                                <label for="chb13">I Agree to Dirto's <a href="#">Privacy Policy</a></label>
                            </div><!-- end custom-checkbox -->
                            <div class="custom-checkbox">
                                <input type="checkbox" id="chb14">
                                <label for="chb14">I Agree to Dirto's <a href="#">Terms of Services</a></label>
                            </div><!-- end custom-checkbox -->
                            <div class="add-sub-btn">
                                <button type="submit" class="btn  theme__btn">Submit</button>
                            </div><!-- end add-sub-btn -->
                        </div><!-- end add-list-content -->
                    </div><!-- end add-list-form-item -->
                </div><!-- end col-md-10 -->
            </div><!-- end row -->



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
                            var title=$(".title").val();
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


            </form>
        </div><!-- end container -->
    </section><!-- end add-listing-area -->
    <!-- ================================
        END ADD-LISTING AREA
    ================================= -->

    <!-- ================================
        START CTA AREA
    ================================= -->
    <!-- end cta-area -->
    <!-- ================================
        END CTA AREA
    ================================= -->
    @push('custom-scripts')
        <script>
            $(document).ready(function()
            {

                $("#state").on('click change', function() {
                state=$("#state").val();
                //district=$("#district").val();
                    $.ajax({
                        type:'POST',
                        url:'{{route('getdistrict')}}',
                        data:{'state':state},
                        success:function(
                            data) {
                           //---------------------
                           
                            $("#location").empty();
                            $("#district").empty();
                            data.forEach(function (e) {
                            $("#district").append('<option value="'+ e.id +'">'+ e.name +'</option>');
                            });
                        //-----------------
                        }
                    });

                });


                $("#district").on('click change', function(e) {
                    district=$("#district").val();
                    //location=$("#location").val();
                    $.ajax({
                        type:'POST',
                        url:'{{route('getlocation')}}',
                        data:{'district':district},
                        success:function(data) {
                            //---------------------
                            $("#location").empty();
                            data.forEach(function (e) {
                                $("#location").append('<option value="'+ e.id +'">'+ e.name +'</option>');
                            });
                            //-----------------
                        }
                    });

                });



            });
        </script>
    @endpush




@endsection
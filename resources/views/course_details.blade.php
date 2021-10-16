@extends('layout.app')
@section('content')
  <section class="grey page-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <h1>Course Details</h1>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="bread">
                            <ol class="breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="#">Courses</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="white section">
            <div class="container">
                <div class="row">
                    <div id="course-left-sidebar" class="col-md-4">
                        <div class="course-image-widget">
                            <img src="{{ asset('uploads/files/'.$course_detail->imglink) }}" alt="" class="img-responsive">
                        </div>
                        <div class="course-meta">
                            <p class="course-category">Category : <a href="course-list.html">{{ $course_detail->c_name }}</a>{{ $course_detail->detail }}</p>
                            <hr>

                            <hr>
                            <p class="course-student">Students : {{ $course_detail->student }}</p>
                            <hr>
                            <p class="course-time">Period : {{ $course_detail->duration }}</p>
                            <hr>


                        </div>

                    </div>

                </div>
                <hr class="invis">
                <div id="owl-featured" class="owl-custom">
                    <div class="owl-featured">
                        <div class="shop-item-list entry">
                            <div class="">
                                <img src="{{ asset('uploads/files/'.$course_detail->imglink) }}" alt="">
                                <div class="magnifier">
                                </div>
                            </div>
                            <div class="shop-item-title clearfix">
                                <h4><a href="course-single.html">{{ $course_detail->details }}</a></h4>

                            </div>
                            <div class="visible-buttons">
                                <a title="Add to Cart" href="page-shop-cart.html"><span class="fa fa-cart-arrow-down"></span></a>
                                <a title="Read More" href="course-single.html"><span class="fa fa-search"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-featured">
                        <div class="shop-item-list entry">
                            <div class="">
                                <img src="upload/xcourse_02.png.pagespeed.ic.PL7Wu2UcSB.png" alt="">
                                <div class="magnifier">
                                </div>
                            </div>
                            <div class="shop-item-title clearfix">
                                <h4><a href="course-single.html">Graphic Design & Logo Mockups Course</a></h4>
                                <div class="shopmeta">
                                    <span class="pull-left">21 Student</span>
                                    <div class="rating pull-right">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="visible-buttons">
                                <a title="Add to Cart" href="page-shop-cart.html"><span class="fa fa-cart-arrow-down"></span></a>
                                <a title="Read More" href="course-single.html"><span class="fa fa-search"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-featured">
                        <div class="shop-item-list entry">
                            <div class="">
                                <img src="upload/xcourse_03.png.pagespeed.ic.8e1MyY5M7i.png" alt="">
                                <div class="magnifier">
                                </div>
                            </div>
                            <div class="shop-item-title clearfix">
                                <h4><a href="course-single.html">Social Media Network & Marketing</a></h4>
                                <div class="shopmeta">
                                    <span class="pull-left">98 Student</span>
                                    <div class="rating pull-right">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="visible-buttons">
                                <a title="Add to Cart" href="page-shop-cart.html"><span class="fa fa-cart-arrow-down"></span></a>
                                <a title="Read More" href="course-single.html"><span class="fa fa-search"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-featured">
                        <div class="shop-item-list entry">
                            <div class="">
                                <img src="upload/xcourse_04.png.pagespeed.ic.2rIKmUwjA7.png" alt="">
                                <div class="magnifier">
                                </div>
                            </div>
                            <div class="shop-item-title clearfix">
                                <h4><a href="course-single.html">WordPress Blogging, Tumblr and Blogger</a></h4>
                                <div class="shopmeta">
                                    <span class="pull-left">98 Student</span>
                                    <div class="rating pull-right">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="visible-buttons">
                                <a title="Add to Cart" href="page-shop-cart.html"><span class="fa fa-cart-arrow-down"></span></a>
                                <a title="Read More" href="course-single.html"><span class="fa fa-search"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection

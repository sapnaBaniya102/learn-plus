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
                                <li><a href="{{ url('index') }}">Home</a></li>
                                <li><a href="#" class="active">Course Details</a></li>
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
                            @foreach ($categories as $category)
                            @if ($course_detail->c_id==$category->c_id)
                                <p class="course-category">Category : <a href="#">{{ $category->c_name }}</a></p>
                            @endif

                            @endforeach

                            <hr>


                            <p class="course-student">Students : {{ $course_detail->student }}</p>
                            <hr>
                            <p class="course-time">Period : {{ $course_detail->duration }}</p>
                            <hr>


                        </div>


                    </div>
<p>{{ $course_detail->text }}</p>
                </div>
                <hr class="invis">
                <div id="owl-featured" class="owl-custom">
                    @foreach ($courses as $course)
                                 <div class="owl-featured">
                        <div class="shop-item-list entry">
                            <div class="">
                                <img src="{{ asset('uploads/files/'.$course->imglink) }}" alt="">
                                <div class="magnifier">
                                </div>
                            </div>
                            <div class="shop-item-title clearfix">
                                <h4><a href="course-single.html">{{ $course->name }}</a></h4>

                            </div>

                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </section>
@endsection

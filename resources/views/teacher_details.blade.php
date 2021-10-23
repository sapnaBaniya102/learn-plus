@extends('layout.app')
@section('content')
<section class="grey section">
    <div class="container">
        <div class="row">
            <div id="content" class="col-md-8 col-sm-8 col-xs-12">

                <div class="blog-wrapper">
                    <div class="row second-bread">
                        <div class="col-md-6 text-left">
                            <h1>Teacher Details</h1>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="bread">
                                <ol class="breadcrumb">
                                    <li><a href="index.php">Home</a></li>

                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-wrapper">
                    <div class="blog-image">
                        <a href="single.html" title=""><img src="{{ asset('uploads/files/'.$teacher_detail->img_link) }}" style="width: 100%"
                                alt="" class="img-responsive" width="400"></a>
                    </div>
                    <div class="blog-desc">
                        <h1>{{ $teacher_detail->name }}</h1>
                        <p>{{ $teacher_detail->details }}</p>



                    </div>
                </div>
            </div>
            <div id="sidebar" class="col-md-4 col-sm-4 col-xs-12">

                <div class="widget">
                    <div class="widget-title">
                        <h4>Our Courses</h4>
                        <hr>
                    </div>
                    <ul class="popular-courses">
                        @foreach ($courses as $course)
   <li>
                            <a href="{{ url('course_details/'.$course->id)}}" title=""><img class="img-thumbnail"
                                    src="{{ asset('uploads/files/'.$course->imglink) }}" alt=""></a>
                        </li>
                        @endforeach


                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

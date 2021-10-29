@extends('layout.app')
@section('content')
 <!-----main content------>
 <section class="grey page-title">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-left">
            <h1>Planning</h1>
          </div>
          <div class="col-md-6 text-right">
            <div class="bread">
              <ol class="breadcrumb">
                <li><a href="{{ url('index') }}">Home</a></li>
                <li class="active">Planning</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
</section>

    <section class="white section">
      <div class="container">
        <div class="row">
          @foreach ($sites as $siteconfig)
            @if ($siteconfig->site_key=='introduction')


            <div class="col-md-6">
                <div class="media-element">

                    <div id="myCarousel" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="{{ asset('uploads/files/'.$siteconfig->imglink)  }}" alt=""
                                    class="img-responsive">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="fa fa-angle-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="fa fa-angle-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>




                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="content-widget">
                    <div class="widget-title">
                        <h3>{{ $siteconfig->site_name }}</h3>
                        <hr>
                    </div>
                    <p>{{ $siteconfig->site_value }}</p>

                </div>
            </div>
            @endif
            @endforeach
      </div>
    </section>

    <section class="white section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-title text-center">
              <h4>New Programs</h4>
            </div>
          </div>
        </div>

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
                <h4><a href="{{ url('course_details/'.$course->id)}}">{{ $course->name }}</a></h4>
                <div class="shopmeta">
                  <span class="pull-left">98 Student</span>

                </div>
              </div>

            </div>
          </div>
 @endforeach
        </div>


      </div>
    </section>
@endsection

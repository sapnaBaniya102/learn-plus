@extends('layout.app')
@section('content')
<section class="grey page-title">
    <div class="container">
        <div class="row">
            <div class="text-left col-md-6">
                <h1>Event Details</h1>
            </div>
            <div class="text-right col-md-6">
                <div class="bread">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="active">Event Details</a></li>

                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="white section">
    <div class="container">
        <div class="row">
            <div id="course-content" class="col-md-8">
                <div class="course-description">
                    <div class="blog-image">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <div class="description-date-time " style="display:flex; ">
                                <div class="description-date " style="background-color:#f84b33; color:white; width:100px; height:40px; font-size:20px; padding-left:10px;">
                                    <span class="event-date">{{ $event_details->date }}</span>

                                </div>
                                <div class="description-meta-wrap " style="color:#f84b33; margin-left:15px;">
                                    <div class="description-meta">
                                        <i class="fa fa-location-arrow"></i>
                                        <span>{{ $event_details->address }}</span>
                                    </div>
                                    <div class="description-meta">
                                        <i class="fa fa-clock-o"></i>
                                        <span>{{ $event_details->time }}</span>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="{{ asset('uploads/files/'.$event_details->img_link) }}" alt="" style="width:100%"
                                        class="img-responsive">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('uploads/files/'.$event_details->img_link) }}" alt="" style="width:100%"
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
                    <h3 class="course-title">{{ $event_details->tittle }}</h3>
                    <p>{{ $event_details->details }}</p>

                </div>



            </div>
            <div id="sidebar" class="col-md-4 col-sm-4 col-xs-12">
                <div class="widget">
                    <div class="searchform">
                        <form>
                            <input type="text" class="form-control" placeholder="What you are looking for?">
                        </form>
                    </div>
                </div>

                <div class="widget">
                    <div class="widget-title">
                        <h4>Recent Events</h4>
                        <hr>
                    </div>
                    <div class="twitter-widget">
                        <ul class="latest-tweets">
                            <li>
                                <p><a href="{{ url('event_details/'.$event_details->id)}}" title="">{{ $event_details->tittle }}</a></p>
                                <span>{{ $event_details->date }}</span>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection

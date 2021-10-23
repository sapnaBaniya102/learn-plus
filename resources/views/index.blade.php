@extends('layout.app')
@section('content')
<section class="slider-section">
    <div class="tp-banner-container">
        <div class="tp-banner">
              <ul>
@foreach ($sliders as $slider)

                <li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-thumb="upload/slider_new_02.jpg" data-saveperformance="off" data-title="Slide">
                    <img src="{{ asset('uploads/files/'.$slider->img_link) }}" alt="fullslide1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <div class="text-center tp-caption slider_layer_04 lft tp-resizeme" data-x="center" data-y="200" data-speed="1000" data-start="600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                        <strong>{{ $slider->header }}</strong>
                    </div>
                    <div class="text-center tp-caption slider_layer_03 lft tp-resizeme" data-x="300" data-y="240" data-speed="1000" data-start="600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><i class="fa fa-html5"></i>
                    </div>
                    <div class="text-center tp-caption slider_layer_03 lft tp-resizeme" data-x="400" data-y="240" data-speed="1000" data-start="600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><i class="fa fa-tablet"></i>
                    </div>
                    <div class="text-center tp-caption slider_layer_03 lft tp-resizeme" data-x="500" data-y="240" data-speed="1000" data-start="600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><i class="fa fa-laptop"></i>
                    </div>
                    <div class="text-center tp-caption slider_layer_03 lft tp-resizeme" data-x="620" data-y="240" data-speed="1000" data-start="600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><i class="fa fa-mobile"></i>
                    </div>
                    <div class="text-center tp-caption slider_layer_03 lft tp-resizeme" data-x="800" data-y="240" data-speed="1000" data-start="600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><i class="fa fa-css3"></i>
                    </div>
                    <div class="text-center tp-caption slider_layer_03 lft tp-resizeme" data-x="700" data-y="240" data-speed="1000" data-start="600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><i class="fa fa-pencil"></i>
                    </div>
                    <div class="text-center tp-caption slider_layer_02 lft tp-resizeme" data-x="center" data-y="340" data-speed="1000" data-start="800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">{{ $slider->text }}
                    </div>
                    <div class="text-center tp-caption lft tp-resizeme" data-x="center" data-y="410" data-speed="1000" data-start="800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><a target="_blank" href="{{ $slider->btnlink }}" class="btn btn-default">{{ $slider->btn }}</a>
                    </div>
                </li>

@endforeach
            </ul>
        </div>
    </div>
</section>

<section class="grey section">
    <div class="container">
        <div class="row">
              @foreach ($sites as $siteconfigs)
                    @if ($siteconfigs->site_key=='welcome')
            <div class="col-md-6">
                <div class="content-widget">
                    <div class="widget-title">
                    </div>
                    <div class="media-element">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="{{ asset('uploads/files/'.$siteconfigs->imglink) }}" alt="" class="img-responsive">
                                </div>

                            </div>
                            <a class="left carousel-control" href="myCarousel" role="button" data-slide="prev">
                                <span class="fa fa-angle-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="myCarousel" role="button" data-slide="next">
                                <span class="fa fa-angle-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="content-widget">
                    <div class="widget-title">


                    </div>



 <div class="tabbed-widget">
                        <h1 class="text-center">{{ $siteconfigs->site_name }}</h1>
                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <p>{{ $siteconfigs->site_value }}</p>
                            </div>



                        </div>
                    </div>
                     @endif
                    @endforeach

                </div>
            </div>


        </div>
    </div>
</section>
<section class="white section">
    <div class="container">
        <div class="row">


            <div class="col-md-6">
                <div class="content-widget">
                    <div class="widget-title">
                        <h4>Why Choose Us?</h4>
                        <hr>
                    </div>

                    <div class="tabbed-widget">
                        <ul class="nav nav-tabs">
                             @foreach ($whychooseus as $whychooseuses)
 <li class="active"><a data-toggle="tab" href="#home">{{ $whychooseuses->heading }}</a></li>
                    @endforeach


                        </ul>
                        <div class="tab-content">
                             @foreach ($whychooseus as $whychooseuses)
                            <div id="home" class="tab-pane fade in active">
                                <p>{{ $whychooseuses->text }}</p>
                            </div>
@endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="content-widget">
                    <div class="widget-title">
                        <h4>From Our Gallery</h4>
                        <hr>
                    </div>
                    <div class="media-element">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="{{ asset('asset/upload/xabout_01.jpg.pagespeed.ic.kjNqMAPXcG.jpg') }}" alt="" class="img-responsive">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('asset/upload/xabout_02.jpg.pagespeed.ic.D36tpcmMNB.jpg') }}" alt="" class="img-responsive">
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
            </div>
        </div>
    </div>
</section>

<section class="section darkskin fullscreen paralbackground parallax" style="background-image:url({{ asset('asset/upload/xparallax_01.jpg.pagespeed.ic.JPVsQrTu6o.jpg') }})" data-img-width="1627" data-img-height="868" data-diff="100">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center section-title">
                    <h4>The Working Process</h4>
                    <p>We Shared Awesome Articles for Your Next Sites</p>
                </div>
            </div>
        </div>
        <div class="row service-center">
            @foreach ($sites as $site)
            @if ($site->site_key=='working_process')


 <div class="col-md-4 col-sm-6">
                <div class="feature-list">
                    <i class="fa fa-graduation-cap"></i>
                    <p><strong>{{ $site->site_name }}</strong></p>
                    <p>{{$site->site_value}}</p>
                </div>
            </div>
             @endif
            @endforeach


        </div>
        <div class="row button-wrapper">
            <div class="col-md-12">

            </div>
        </div>
    </div>
</section>

<section class="grey section">
    <div class="row-fluid">
        <div class="col-md-6 myimg">
             @foreach ($sites as $site)
                                @if ($site->site_key=='who-we-are')
            <img src="{{ asset('uploads/files/'.$site->imglink) }}" alt="" srcset="" width="700" style="padding:60px;">
            @endif
            @endforeach
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-5">
                    <div class="section-container nopadding">
                        <div class="textrotate">
                            <ul class="bxslider pl-5">
                                @foreach ($sites as $site)
                                @if ($site->site_key=='who-we-are')


 <li>
                                    <div class="big-title">
                                        <h3><span>{{ $site->site_name }}</h3>
                                        <div class="border-title"></div>
                                    </div>
                                    <p>{{ $site->site_value }}</p>
                                </li>
                                 @endif
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section fullscreen paralbackground parallax" style="background-image:url({{ asset('asset/upload/xparallax_02.jpg.pagespeed.ic.Sx1_qXOliB.jpg') }})" data-img-width="1627" data-img-height="868" data-diff="100">
    <div class="overlay green-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center section-title">
                    <h4>Happy Milistones</h4>
                    <p>We Have Powerful Milistones With Fun Fact Effects</p>
                </div>
            </div>
        </div>
        <div class="row service-center funfactors">
            @foreach ($sites as $site)
            @if ($site->site_key=='counter')
   <div class="col-md-3 col-sm-6" >
                <div class="feature-list">
                    <i class="stat-count">{{ $site->site_value }}</i>
                    <p><strong>{{ $site->site_name }}</strong></p>

                </div>
            </div>
            @endif

            @endforeach

        </div>
    </div>
</section>
<section class="grey section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center section-title">
                            <h4>From The Blog</h4>
                            <p>We Shared Awesome Articles for Your Next Sites</p>
                        </div>
                    </div>
                </div>
                <div class="row blog-widget">
                    @foreach ($blogs as $blog)
 <div class="col-md-6 col-sm-12">
                        <div class="blog-wrapper">
                            <div class="blog-title">
                                <a class="category_title" href="{{ url('blog_details/'.$blog->id)}}" title="">{{ Illuminate\Support\Str::words($blog->tittle  , 5, '...')}}</a>

                                <div class="post-meta">



                                </div>
                            </div>
                            <div class="blog-image">
                                <a href="{{ url('blog_details/'.$blog->id)}}" title=""><img src="{{ asset('uploads/files/'.$blog->img_link) }}" alt="" class="img-responsive"></a>
                            </div>
                            <div class="blog-desc">
                                <p>{{ Illuminate\Support\Str::words($blog->text, 10, '...') }}
                                </p>
                                <a href="{{ url('blog_details/'.$blog->id)}}" class="btn btn-default btn-block">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="row">
                    <div class="col-md-12 " style="background-color: #C1CFC0;">
                        <div class="text-center section-title">
                            <h4>Latest Events</h4>
                            <p>We Shared Awesome Articles for Your Next Sites</p>
                        </div>
                    </div>
                </div>
                <div class="row blog-widget" style="background-color: #F7F6F2;">
                          @foreach ($events as $event)
                    <div class="col-md-6 col-sm-12">

                        <div class="blog-wrapper">
                            <div class="blog-title">
                                <a class="category_title" href="{{ url('event_details/'.$event->id)}}" title="">{{ Illuminate\Support\Str::words($event->tittle , 4, '...') }}</a>
                                <div class="post-meta">


                                </div>
                            </div>
                            <div class="blog-image">
                                <a href="{{ url('event_details/'.$event->id)}}" title=""><img src="{{ asset('uploads/files/'.$event->img_link) }}" alt="" class="img-responsive"></a>
                            </div>
                            <div class="blog-desc">


                                <a href="{{ url('event_details/'.$event->id)}}" class="btn btn-default btn-block">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</section>

@endsection

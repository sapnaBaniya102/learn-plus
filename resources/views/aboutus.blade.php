@extends('layout.app')
@section('content')
<section class="grey page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-left">
                <h1>About Us</h1>
            </div>
            <div class="col-md-6 text-right">
                <div class="bread">
                    <ol class="breadcrumb">
                        <li><a href="{{ url('index') }}">Home</a></li>
                        <li class="active">About Us</li>
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
        <br><br><br>
        <div class="row">
            @foreach ($sites as $siteconfig)
@if ($siteconfig->site_key=='objective')



            <div class="col-md-6">
                <div class="content-widget">
                    <div class="widget-title">
                        <h3>{{ $siteconfig->site_name }}</h3>
                        <hr>
                    </div>
                    <div class="row">
                       <h5>{{ $siteconfig->site_value }}</h5>
                    </div>
                </div>
            </div>
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
            @endif
@endforeach
        </div>
        <hr class="invis1">
        <div class="row">
                 @foreach ($sites as $siteconfig)
@if ($siteconfig->site_key=='chooseus')
            <div class="col-md-6">
                <div class="content-widget">
                    <div class="widget-title">
                        <h4>{{ $siteconfig->site_name }}</h4>
                        <hr>
                    </div>
                    <div class="accordion-widget">
                        <div class="accordion-toggle-2">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1"
                                                href="#collapseFour">
                                                <h3>Why LearnPLUS ? <i class="indicator fa fa-plus"></i></h3>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>{{ $siteconfig->site_value }}</p>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if ($siteconfig->site_key=='mission' )


            <div class="col-md-6">
                <div class="content-widget">
                    <div class="widget-title">
                        <h4>{{ $siteconfig->site_name }}</h4>
                        <hr>
                    </div>
                    <p>{{ $siteconfig->site_value }}</p>

                </div>
            </div>
             @endif
@endforeach
        </div>
    </div>
</section>
@endsection

@extends('layout.app')
@section('content')
<!-----main content------->
<section class="grey page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-left">
                <h1>Message</h1>
            </div>
            <div class="col-md-6 text-right">
                <div class="bread">
                    <ol class="breadcrumb">
                        <li><a href="i{{ url('index') }}">Home</a></li>
                        <li class="active">Message</li>
                    </ol>
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
                    @foreach ($sites as $site)
                    @if ($site->site_key=='message-from-principal')
<div class="widget-title col-sm-6">
                        <h3>{{ $site->site_name }}</h3>
                        <hr>
                    </div>
                    <div class="row col-sm-6">
                        <p>{{ $site->site_value }}</p>
                            <br>
                            <p style="color: red;">Prof.Shiva Thapa
                            <br> Principle</p>
                    </div>
                    @endif

                    @endforeach

                </div>
            </div>
            <div class="col-md-6">
                <div class="media-element">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                              @foreach ($sites as $site)
                    @if ($site->site_key=='message-from-principal')
                            <div class="item active">
                                <img src="{{ asset('uploads/files/'.$site->imglink) }}" alt="" class="img-responsive">
                            </div>
                            @endif
                            @endforeach

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
</section>


@endsection

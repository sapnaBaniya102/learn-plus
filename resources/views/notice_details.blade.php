@extends('layout.app')
@section('content')
  <section class="grey section">
            <div class="container">
                <div class="row">
                    <div id="content" class="col-md-8 col-sm-8 col-xs-12">
                        <div class="blog-wrapper">
                            <div class="row second-bread">
                                <div class="col-md-6 text-left">
                                    <h1>Notice Details</h1>
                                </div>
                                <div class="col-md-6 text-right">
                                    <div class="bread">
                                        <ol class="breadcrumb">
                                            <li><a href="{{ url('index') }}">Home</a></li>
                                            <li class="active">Examination</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-wrapper single-blog-wrapper">


                            <div class="blog-title">

                                <h2><a href="#" title="">{{ $notice_details->heading }}</a></h2>
                                <div class="post-meta">


                                    <span>
                                        <i class="fa fa-clock-o"></i>
                                        <a href="#">{{ $notice_details->date }}</a>
                                    </span>
                                </div>
                            </div>

                            <div class="blog-desc">
                                <p>{{ $notice_details->detail }}</p>



                            </div>
                        </div>
                        <hr class="invis">

                    </div>
                    <div id="sidebar" class="col-md-4 col-sm-4 col-xs-12">


                        <div class="widget">
                            <div class="widget-title">
                                <h4>Recent Notices</h4>
                                <hr>
                            </div>
                            <div class="twitter-widget">
                                <ul class="latest-tweets">
                                    @foreach ($notice1 as $notice2)
                            <li>
                                <p><a href="{{ url('notice_details/'.$notice2->id) }}">{{ Illuminate\Support\Str::words($notice2->heading, 5, '...') }}</a></p>
                            </li>
                            @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection

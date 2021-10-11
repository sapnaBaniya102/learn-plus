@extends('layout.app')
@section('content')
 <section class="grey section">
            <div class="container">
                <div class="row">
                    <div id="content" class="col-md-8 col-sm-8 col-xs-12">
                        <div class="blog-wrapper">
                            <div class="row second-bread">
                                <div class="text-left col-md-6">
                                    <h1>News</h1>
                                </div>
                                <div class="text-right col-md-6">
                                    <div class="bread">
                                        <ol class="breadcrumb">
                                            <li><a href="index.php">Home</a></li>
                                            <li class="active">News</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-wrapper single-blog-wrapper">
                            <div class="blog-title">
                                <a class="category_title" href="#" title="">{{ $news_details->title }}</a>


                            </div>
                            <div class="blog-image">
                                <a href="single.html" title=""><img src="{{ asset('uploads/files/'.$news_details->imglink) }}" alt="" class="img-responsive"></a>
                            </div>
                            <div class="blog-desc">
                                <p>{{ $news_details->details }}</p>


                            </div>
                        </div>
                        <hr class="invis">

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
                                <h4>Recent News</h4>
                                <hr>
                            </div>
                            <div class="twitter-widget">
                                <ul class="latest-tweets">
@foreach ($newses as $news)
 <li>
                                        <p><a href="{{ url('news_details/'.$news->id) }}" title="">{{ $news_details->title }}</a></p>
                                        <span>{{ $news_details->date }}</span>
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

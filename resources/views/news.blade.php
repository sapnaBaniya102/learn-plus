@extends('layout.app')
@section('content')
<section class="grey page-title">
    <div class="container">
        <div class="row">
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
</section>

<section class="white section">
    <div class="container">
        <div class="row">
            <div id="content" class="col-md-12">
                <div class="col-md-8 col-xs-12">
                    @foreach ($newses as $news)

                    <div class="col-md-6">
                        <div class="blog-wrapper">
                            <div class="blog-title">
                                <a class="category_title" href="{{ url('news_details/'.$news->id) }}" title="">{{ $news->title }}</a>


                            </div>
                            <div class="blog-image">
                                <a href="{{ url('news_details/'.$news->id) }}" title=""><img src="{{ asset('uploads/files/'.$news->imglink) }}" alt="" class="img-responsive"></a>
                            </div>
                            <div class="blog-desc">
                                <div class="post-date">
                                    <span class="day">{{ $news->date }}</span>
                                </div>
                                <p>{{ $news->text }}
                                </p>
                                <a href="{{ url('news_details/'.$news->id) }}" class="readmore">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach


                    <hr class="invis">
                <nav class="text-center">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                </div>


            <div id="sidebar" class="col-md-4 col-sm-4 col-xs-12">

                <div class="widget">
                    <div class="widget-title">
                        <h4>Recent News</h4>
                        <hr>
                    </div>
                    <div class="twitter-widget">
                        <ul class="latest-tweets">
                            @foreach ($newses as $news)
 <li>
                                <p><a href="{{ url('news_details/'.$news->id) }}" title="">{{ $news->title }}</a></p>
                                <span>{{ $news->date }}</span>
                            </li>
                            @endforeach


                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
@endsection

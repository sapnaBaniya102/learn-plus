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
                        <li><a href="{{ url('index') }}">Home</a></li>
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
                                <p>{{ Illuminate\Support\Str::words($news->text, 10, '...') }}
                                </p>
                                <a href="{{ url('news_details/'.$news->id) }}" class="readmore">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach


    <hr class="invis">
                <div class="row">


                        <div class="col-md-12">
                            <div class="text-center">
                                {{ $newses->links() }}
                            </div>
                        </div>


</div>
                </div>


            <div id="sidebar" class="col-md-4 col-sm-4 col-xs-12">
                <div class="widget">
                    <div class="searchform">
                        <form action="{{ route('newsSearch') }}" method="GET">
                            <input type="text" name="search" required/>
                            <button type="submit">Search</button>
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
                            @foreach ($news1 as $news2)
 <li>
                                <p><a href="{{ url('news_details/'.$news2->id) }}" title="">{{ Illuminate\Support\Str::words($news2->title, 4, '...') }}</a></p>
                                <span>{{ $news2->date }}</span>
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

@extends('layout.app')
@section('content')
<section class="grey section">
    <div class="container">
        <div class="row">
            <div id="content" class="col-md-8 col-sm-8 col-xs-12">
                <div class="blog-wrapper">
                    <div class="row second-bread">
                        <div class="text-left col-md-6">
                            <h1>Blogs</h1>
                        </div>
                        <div class="text-right col-md-6">
                            <div class="bread">
                                <ol class="breadcrumb">
                                    <li><a href="{{ url('index') }}">Home</a></li>
                                    <li class="active">Blog</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

    @foreach ($blogs as $blog)
   <div class="blog-wrapper">

                    <div class="blog-title">
                        <h2><a href="{{ url('blog_details/'.$blog->id)}}" title="">{{ $blog->tittle }}</a></h2>
                    </div>
                    <div class="blog-image">
                        <a href="{{ url('blog_details/'.$blog->id)}}" title=""><img src="{{ asset('uploads/files/'. $blog->img_link) }}" alt=""
                                class="img-responsive"></a>
                    </div>
                    <div class="blog-desc">
                        <div class="post-date">
                            <span class="day">{{ $blog->date }}</span>

                        </div>
                        <p>{{ Illuminate\Support\Str::words($blog->text, 15, '...') }}</p>
                        <a href="{{ url('blog_details/'.$blog->id)}}" class="readmore">Read More</a>
                    </div>




</div>
@endforeach
<hr class="invis">
<div class="row">
    <div class="col-md-12">
        <div class="text-center">
            {{ $blogs->links() }}
        </div>
    </div>
</div>
            </div>
            <div id="sidebar" class="col-md-4 col-sm-4 col-xs-12">
                <div class="widget">
                    <div class="searchform">
                        <form action="{{ route('blogSearch') }}" method="GET">
                            <input type="text" name="search" required/>
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>

                <div class="widget">
                    <div class="widget-title">
                        <h4>Recent Blogs</h4>
                        <hr>
                    </div>
                    <div class="twitter-widget">
                        <ul class="latest-tweets">
                             @foreach ($blog1 as $blog2)
                            <li>
                                <p><a href="{{ url('blog_details/'.$blog2->id)}}" title="">{{ Illuminate\Support\Str::words($blog2->tittle, 6, '...')}}</a></p>
                                <span>{{ $blog2->date }}</span>
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

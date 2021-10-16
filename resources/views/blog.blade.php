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
                        <p>{{ $blog->text }}</p>
                        <a href="{{ url('blog_details/'.$blog->id)}}" class="readmore">Read More</a>
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
                    <div class="searchform">
                        <form>
                            <input type="text" class="form-control" placeholder="What you are looking for?">
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
                             @foreach ($blogs as $blog)
                            <li>
                                <p><a href="{{ url('blog_details/'.$blog->id)}}" title="">{{ $blog->tittle}}</a></p>
                                <span>{{ $blog->date }}</span>
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

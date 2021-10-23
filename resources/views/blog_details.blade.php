@extends('layout.app')
@section('content')
<section class="grey section">
    <div class="container">
        <div class="row">
            <div id="content" class="col-md-8 col-sm-8 col-xs-12">
                <div class="blog-wrapper">
                    <div class="row second-bread">
                        <div class="text-left col-md-6">
                            <h1>Blog Details</h1>
                        </div>
                        <div class="text-right col-md-6">
                            <div class="bread">
                                <ol class="breadcrumb">
                                    <li><a href="{{ url('index') }}">Home</a></li>
                                    <li class="active">Blog details</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-wrapper single-blog-wrapper">
                    <div class="blog-title">
                        <h2><a href="single.html" title="">{{ $blog_details->tittle }}</a></h2>

                    </div>
                    <div class="blog-image">
                        <a href="single.html" title=""><img src="{{ asset('uploads/files/'.$blog_details->img_link) }}" alt=""
                                class="img-responsive"></a>
                    </div>
                    <div class="blog-desc">
                        <p>{{ $blog_details->details }}</p>


                    </div>
                </div>


            </div>
            <div id="sidebar" class="col-md-4 col-sm-4 col-xs-12">


                <div class="widget">
                    <div class="widget-title">
                        <h4>Recent Blogs</h4>
                        <hr>
                    </div>
                    <div class="twitter-widget">
                        <ul class="latest-tweets">
                            @foreach ($blog1 as $blog2)
                               <li>
                                <p><a href="{{ url('blog_details/'.$blog2->id)}}" title="">{{ Illuminate\Support\Str::words($blog2->tittle, 6, '...')}}</a> .</p>
                                <span>{{ $blog2->date}}</span>
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

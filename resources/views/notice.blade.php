@extends('layout.app')
@section('content')
<section class="grey section">
    <div class="container">
        <div class="row">
            <div id="content" class="col-md-8 col-sm-8 col-xs-12">
                <div class="blog-wrapper">
                    <div class="row second-bread">
                        <div class="col-md-6 text-left">
                            <h1>Examinatiion Notice</h1>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="bread">
                                <ol class="breadcrumb">
                                    <li><a href="index.php">Home</a></li>
                                    <li class="active">Examination</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row course-list" style="margin-top: 10px;">
                     @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    @foreach ($notices as $notice)
 <div class="col-md-6 col-sm-6 col-xs-12 first">
                        <div class="shop-item-list entry">

                            <div class="shop-item-title clearfix">
                                <h4><a href="{{ url('notice_details/'.$notice->id) }}">{{ Illuminate\Support\Str::words($notice->heading , 5, '...') }}</a></h4>
                                <div class="shopmeta">
                                    <div class="post-meta">

                                        <span>
                                            <i class="fa fa-clock-o"></i>
                                            <a href="#">{{ $notice->date }}</a>
                                        </span>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach


                </div>
                <div class="row">
                    <div class="col-md-12">
                        <nav class="text-center">
                            {{ $notices->links()}}
                        </nav>
                    </div>
                </div>
            </div>

            <div id="sidebar" class="col-md-4 col-sm-4 col-xs-12">
                <div class="widget">
                    <div class="searchform">
                        <form action="{{ route('noticeSearch') }}" method="GET">
                            <input type="text" name="search" placeholder="Search Notice Name" required/>
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>


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

</section>

@endsection

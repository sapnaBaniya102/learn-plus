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
                                <h4><a href="{{ url('notice_details/'.$notice->id) }}">{{ $notice->heading }}</a></h4>
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
                </div>
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
                        <h4>Recent Notices</h4>
                        <hr>
                    </div>
                    <div class="twitter-widget">
                        <ul class="latest-tweets">
                             @foreach ($notices as $notice)
                            <li>
                                <p><a href="{{ url('notice_details/'.$notice->id) }}">{{ $notice->heading }}</a></p>
                            </li>
                           @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

</section>

@endsection

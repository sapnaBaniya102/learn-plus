@extends('layout.app')
@section('content')
<section class="grey page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-left">
                <h1>Examination Notice</h1>
            </div>
            <div class="col-md-6 text-right">
                <div class="bread">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>

                        <li class="active">Examination Result</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="white section">
    <div class="container">
        <div id="content" class="col-md-8 col-sm-8 col-xs-12">
            @foreach ($results as $result)
 <div class="row course-list" style="background-color: #EEEEEE;">

                <div class="col-md-8 col-md-8">
                    <div class="shop-list-desc">
                        <h4><a href="{{ $result->link }}">{{ $result->name }}</a></h4>
                        <div class="shopmeta">
                            <div class="post-meta">


                                <span>
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#">{{ $result->date }}</a>
                                </span>
                            </div>
                        </div>
                        <hr class="invis clearfix">

                    </div>
                </div>
            </div>
            @endforeach

            <hr class="invis">
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
                    <h4>Latest Result</h4>
                    <hr>
                </div>
                <div class="twitter-widget">
                    <ul class="latest-tweets">
                        @foreach ($results as $result)
 <li>
                            <p><a href="{{ $result->link }}">{{ $result->name }}</a></p>
                            <span>{{ $result->date }}</span>
                        </li>
                        @endforeach


                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

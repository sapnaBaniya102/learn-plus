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
                        <li><a href="{{ url('index') }}">Home</a></li>

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
                        <h4><a  href="{{ asset('uploads/files/'.$result->link)  }}" download>{{ $result->name }}</a></h4>
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
                    <div class="text-center">
                        {{ $results->links() }}
                    </div>
                </div>
            </div>
        </div>
        <div id="sidebar" class="col-md-4 col-sm-4 col-xs-12">
            <div class="widget">
                <div class="searchform">
                    <form action="{{ route('resultSearch') }}" method="GET">
                        <input type="text" name="search" required/>
                        <button type="submit">Search</button>
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
                        @foreach ($result1 as $result2)
 <li>
                            <p><a href="{{ asset('uploads/files/'.$result2->link)  }}" download>{{ Illuminate\Support\Str::words($result2->name, 5, '...') }}</a></p>
                            <span>{{ $result2->date }}</span>
                        </li>
                        @endforeach


                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

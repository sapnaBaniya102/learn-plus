@extends('layout.app')
@section('content')
<section class="grey page-title">
    <div class="container">
        <div class="row">
            <div class="text-left col-md-6">
                <h1>Events</h1>
            </div>
            <div class="text-right col-md-6">
                <div class="bread">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Events</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="white section">
    <div class="container">
        <div class="row course-list shop-listing">
      @foreach ($Events as $event)
 <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="shop-item-list entry" >
                    <a href="{{ url('event_details/'.$event->id)}}">
                    <div class="" >
                        <img src="{{ asset('uploads/files/'.$event->img_link) }}"  alt="">
                        <div class="magnifier">
                        </div>
                    </div>
                    <div class="clearfix shop-item-title">
                        <h4>{{ $event->tittle }}</h4>


                    </div>
                    <div class="event-meta-wrap btn btn-primary btn-block" style="display:flex">
                            <div class="event-meta">
                                <i class="fa fa-location-arrow"></i>
                                <span>{{ $event->address }}</span>
                            </div>
                            <div class="event-meta " style="margin-left:25px;">
                                <i class="fa fa-clock-o"></i>
                                <span>{{ $event->time }}</span>
                            </div>
                        </div>
                        </a>
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
</section>

@endsection

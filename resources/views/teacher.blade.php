@extends('layout.app')
@section('content')
<section class="grey page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-left">
                <h1>Teachers</h1>
            </div>
            <div class="col-md-6 text-right">
                <div class="bread">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>

                        <li class="active">Teacher</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="white section ">
    <div class="container">
        <div class="teachers " >
            @foreach ($teachers as $teacher)
 <div class="row course-list teacher-list  ">
                            <div class="col-md-3 col-sm-4 col-xs-12">
                                <div class="shop-item-list entry">
                                    <div class="">
                                        <img src="{{ asset('uploads/files/'.$teacher->img_link) }}" alt="">
                                        <div class="magnifier">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9 col-md-9">
                                <div class="shop-list-desc">
                                    <h4><a href="{{ url('teacher_details/'.$teacher->id) }}">{{ $teacher->name }}</a></h4>
                                    <p class="text-justify">{{ $teacher->post }}</p>
                                    <a href="{{ url('teacher_details/'.$teacher->id) }}" class="btn btn-default"> More Details
                                        </a>
                                </div>
                            </div>

                        </div>
            @endforeach



         </div>

         <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    {{ $teachers->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

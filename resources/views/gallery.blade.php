@extends('layout.app')
@section('content')
<section class="grey page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-left">
                <h1 >Gallery</h1>
            </div>
            <div class="col-md-6 text-right">
                <div class="bread">
                    <ol class="breadcrumb">
                        <li><a href="{{ url('index') }}">Home</a></li>
                        <li class="active">Gallery</li>

                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="white section ">
    <div class="container">
                <div class="col-md-12">
                    <div class="content-widget">
                        <h1 class="text-center" style="font-size:35px; color:#ff4b33;">Our Gallery</h1>
                        <div class="col-md-12">
                            @foreach ($galleries as $gallery)
 <div class="col-md-3">
                                <div class="team ">
                                    <img src="{{ asset('uploads/files/'.$gallery->img_link) }}" alt=""
                                        class="img-responsive wow fadeInUp">
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-center">
                                    {{ $galleries->links() }}
                                </div>
                            </div>
                        </div>




                    </div>
                </div>


    </div>
</section>
@endsection

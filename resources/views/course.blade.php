@extends('layout.app')
@section('content')
     <section class="grey page-title">
        <div class="container">
          <div class="row">
            <div class="col-md-6 text-left">
              <h1>Course List Page</h1>
            </div>
            <div class="col-md-6 text-right">
              <div class="bread">
                <ol class="breadcrumb">
                  <li><a href="index.php">Home</a></li>

                  <li class="active">Course</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="white section">
        <div class="container">
          <div id="filters" class="filters-dropdown">
               @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
            <ul class="option-set" data-option-key="filter">
              <li><a href="courses.php" class="selected" data-option-value="*"><i class="fa fa-filter"></i> All Courses</a>
              </li>
              {{-- @foreach ($categories as $category)


<li><a href="{{ url('courses/'.$category->c_id) }}" >{{ $category->c_name }}</a></li>
              @endforeach --}}

            </ul>
          </div>
          <div class="portfolio course-list">
@foreach ($course as $courses)


 <div class="item cat1 ">
              <div class="shop-item-list entry"><a href="{{ url('course_details/'.$courses->id)}}">
                <div class="">
                  <img src="{{asset('uploads/files/'.$courses->imglink)  }}" alt="">
                  <div class="magnifier">
                  </div>
                </div>
                <div class="shop-item-title clearfix">
                  <h4><a href="{{ url('course_details/'.$courses->id)}}">{{ $courses->name }}</a></h4>

                </div>
                <div class="visible-buttons">

                </div></a>
              </div>
            </div>
@endforeach


          </div>
        </div>
      </section>
@endsection

@extends('layout.app')
@section('content')

<section class="grey page-title">
      <div class="container">
        <div class="row">
          <div class="text-left col-md-6">
            <h1>Contact</h1>
          </div>
          <div class="text-right col-md-6">
            <div class="bread">
              <ol class="breadcrumb">
                <li><a href="{{ url('index') }}">Home</a></li>
                <li class="active">Contact</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
</section>
    <section class="white section">
      <div class="container">
        <div class="row contact-wrapper">
          <div class="col-md-7 col-sm-7 col-xs-12 content-widget">
            <div class="widget-title">
              <h4>Contact Form</h4>
              <hr>
            </div>
            <div id="contact_form" class="contact_form row">
              <div id="message"></div>
              <form id="contactform" name="contactform" action="{{ route('message.store') }}" method="POST" enctype="multipart/form-data">
@csrf
                  <input type="text" name="name" id="name" class="form-control" placeholder="Name *">
                  <input type="text" name="email" id="email" class="form-control" placeholder="Email *">
                  <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">
 <input type="number" name="phone" id="phone" class="form-control" placeholder="Phone number">

                  <textarea class="form-control" name="details" id="comments" rows="6" placeholder=""></textarea>
                  <button type="submit" name="submit" id="submit" class="btn btn-primary btn-block">Send Message</button>

              </form>
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-3 col-sm-3 col-xs-12 content-widget">
            <div class="widget-title">
              <h4>Contact Details</h4>
              <hr>
            </div>
            <div class="contact-list">
              <ul class="contact-details" style="font-size: 20px;">
              @foreach ($sites as $site)
              @if ($site->site_key=='website')
 <li><i class="fa fa-link"></i> <a href="#">{{ $site->site_value }}</a></li>
              @endif

               @if ($site->site_key=='phone')

 <li><i class="fa fa-phone"></i>{{ $site->site_value }}</li>
              @endif

               @if ($site->site_key=='address')

<li><i class="fa fa-home"></i> {{ $site->site_value }}</li>
              @endif

              @endforeach





              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection

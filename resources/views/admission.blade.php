@extends('layout.app')
@section('content')

<section class="grey page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-left">
                <h1 >Admissiom</h1>
            </div>
            <div class="col-md-6 text-right">
                <div class="bread">
                    <ol class="breadcrumb">
                        <li><a href="{{ url('index') }}">Home</a></li>
                        <li class="active">Admission</li>

                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="white section">
    <div class="container">
      <div class="row contact-wrapper">
        <div class="col-md-12 col-sm-12 col-xs-12 content-widget">
          <div class="widget-title">
            <h4>Admission</h4>
            <hr>
          </div>
          <div id="contact_form" class="contact_form row">
            <div id="message"></div>
            <form id="contactform" name="contactform" action="{{ route('admission.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">
    <div class="col-sm-4">
        <div class="form-group">
            <label>Name <small>*</small></label>
            <input name="name" type="text" placeholder="Enter Name"
             class="form-control">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label>Email <small>*</small></label>
            <input name="email" class="form-control required email"
                type="email"  placeholder="Enter Email">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label>Phone/Tel <small>*</small></label>
            <input name="phone" class="form-control required email"
                 type="text" placeholder="Enter Phone">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-4">
      <div class="form-group">
          <label>Address <small>*</small></label>
          <input name="address" class="form-control required email"
               type="text" placeholder="Enter Address">
      </div>
  </div>
  <div class="col-sm-4">
      <div class="form-check">
          <label>Skill</label><br>
          <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="skill" id=""
                  value="C++" checked>
              C++
          </label><br>
          <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="skill" id=""
                  value="Python">
              Python
          </label>
          <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="skill" id=""
                  value="html/css">
              Html/css
          </label>
      </div>
  </div>
  <div class="col-sm-4">
      <label>Gender</label><br>
      <label class="custom-control custom-radio">
          <input type="radio" name="gender" id="" value="Male"
              class="custom-control-input">Male
          <span class="custom-control-indicator"></span>
          <span class="custom-control-description"></span>
      </label><br>
      <label class="custom-control custom-radio">
          <input type="radio" name="gender" id="" value="Female"
              class="custom-control-input">Female
          <span class="custom-control-indicator"></span>
          <span class="custom-control-description"></span>
      </label>

  </div>


</div>

<div class="form-group">
    <label>Message <small>*</small></label>
    <textarea name="message" class="form-control required"
        placeholder="Your cover letter/message sent to the employer"></textarea>
</div>

                <button type="submit" name="submit" id="submit" class="btn btn-primary btn-block">Apply Now</button>

            </form>
          </div>
        </div>
        <div class="col-md-1"></div>

      </div>
    </div>
  </section>


@endsection

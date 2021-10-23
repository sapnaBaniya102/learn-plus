@extends('admin.layout.layout')

@section('content')

  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">

        @if(Session::has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        <strong>{{Session::get('message')}}</strong>
        </div>

        <script>
          $(".alert").alert();
        </script>
        @endif

                <section id="multi-column">
                    <div class="row">
                      <div class="col-12">
                        <div class="card">
                          <div class="card-header">
                            <h4 class="card-title">Manage User <a href="{{ url('register') }}"><button class="p-2 rounded btn-primary">Add user</button></a></h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                              <ul class="mb-0 list-inline">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="card-content collapse show">
                            <div class="card-body card-dashboard" style="padding-top:0px !important;">
                              <div class="row">
                                  <div class="pb-2 col-md-6">
                                  @if(request()->get('data-show'))
                                  {{-- @else
                                  <a name="" id="" class="btn btn-info btn-sm" href="{{route('files.create')}}" role="button"><i class="fa fa-plus-circle manage_buttons_custom" aria-hidden="true"></i></a>
                                  <a name="" id="" class="btn btn-success btn-sm" href="{{url('files')}}" role="button"><i class="fa fa-refresh manage_buttons_custom" aria-hidden="true"></i></a> --}}
                                  @endif
                                  </div>
                                  <div class="col-md-6">
                                    @if(request()->get('data-show'))
                                  {{-- <a name="" id="" class="float-right btn btn-success btn-sm" href="{{url('files')}}" role="button"><i class="fa fa-bars manage_buttons_custom" aria-hidden="true"></i></a>
                                    @else
                                  <a name="" id="" class="float-right btn btn-danger btn-sm" href="{{url('files?data-show=trashed')}}" role="button"><i class="fa fa-trash-o manage_buttons_custom" aria-hidden="true"></i></a> --}}
                                    @endif
                                </div>
                              </div>
                              <table class="table table-striped table-bordered multi-ordering">
                                <thead>
                                  <tr>
                                    <th>S.N.</th>
                                    <th> Name</th>
                                    <th>Email</th>
                                    <th>Password</th>

                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                @foreach($register as $registers)
                                  <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$registers->name}}</td>
                                    <td>{{$registers->email}}</td>
                                    <td>{{ Illuminate\Support\Str::words($registers->password, 15, '...')}}</td>

                                    <td>

																		<form action="{{ url('register/destroy', $registers->id) }}" method="post">


                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" name="submit" class="p-2 rounded btn-danger">Delete</button>

                                                                        </form>
                                    </td>
                                  </tr>
                                @endforeach
                                </tbody>
                                <thead>
                                  <tr>
                                    <th>S.N.</th>
                                    <th> Name</th>
                                    <th>Email</th>
                                    <th>Password</th>

                                    <th>Action</th>
                                  </tr>
                                  </thead>
                              </table>
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        {{ $register->links() }}
                                    </div>
                                </div>
                            </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>


                </div>
            </div>
          </div>

        @endsection

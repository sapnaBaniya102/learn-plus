@extends('admin.layout.layout')

@section('content')
		<!--begin::Entry-->
					<div class="d-flex flex-column-fluid">
						<!--begin::Container-->
						<div class="container">
							<!--begin::Card-->
							<div class="card card-custom">
								<!--begin::Body-->

								<section class="content">
									<div class="container-fluid">
										<div class="row">
											<!-- left column -->
											<div class="col-md-12">
												<div class="card card-primary">
													<div class="card-header">
														<h3 class="card-title">Manage Event</h3><a href="{{ route('event.create') }}"><button class="p-2 rounded btn-primary">Add event</button></a>
													</div>
                                                                                            @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

													<!-- /.card-header -->
													<div class="card-body">
														<table id="example1" class="table table-bordered table-striped">
															<thead>
																<tr>
																	<th>S.N.</th>
																	<th>Action</th>
																	<th>Event Tittle</th>
																	<th>Event Date</th>
                                                                    <th>Event Time</th>
                                                                    <th>Event Address</th>
																	<th>Event Img_link</th>
                                                                    <th>Event Details</th>
																	<th>Status</th>
																</tr>
															</thead>
															<tbody>
														@foreach ($event as $events)


																	<tr>
																		<td>{{ $loop->index+1 }}</td>
																		<td>
                                                                            <a href="{{ route('event.edit', $events->id) }}"><button class="p-2 rounded btn-primary">Edit</button></a>
																		<form action="{{ route('event.destroy', $events->id) }}" method="post">


                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" name="submit" class="p-2 rounded btn-danger">Delete</button>

                                                                        </form>
																		</td>
																		<td>{{ $events->tittle }}</td>
																		<td>{{ $events->date }}</td>
																		<td>{{ $events->time }}</td>
																		<td>{{ $events->address }}</td>
																		<td>{{ $events->img_link }}</td>
																		<td>{{ Illuminate\Support\Str::words($events->details, 16, '...')}}</td>
																		<td>{{ $events->status }}</td>

																	</tr>
 @endforeach
																</tfoot>
														</table>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="text-center">
                                                                    {{ $event->links() }}
                                                                </div>
                                                            </div>
                                                        </div>
													</div>
													<!-- /.card-body -->
												</div>
											</div>
											<!--/.col (left) -->
										</div>
										<!-- /.row -->
									</div><!-- /.container-fluid -->
								</section>
								<!--end::Body-->
							</div>
							<!--end::Card-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Entry-->
@endsection

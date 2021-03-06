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
														<h3 class="card-title">Manage course</h3><a href="{{ route('course.create') }}"><button class="p-2 rounded btn-primary">Add course</button></a>
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
																	<th>course Name</th>
																	<th>course text</th>
                                                                    <th>course time</th>
                                                                    <th>course duration</th>
                                                                    <th>Student</th>
																	<th>course imglink</th>
																	<th>Status</th>
                                                                    	<th>Course Category</th>
																</tr>
															</thead>
															<tbody>
														@foreach ($course as $courses)


																	<tr>
																		<td>{{ $loop->index+1 }}</td>
																		<td>
                                                                            <a href="{{ route('course.edit', $courses->id) }}"><button class="p-2 rounded btn-primary">Edit</button></a>
																		<form action="{{ route('course.destroy', $courses->id) }}" method="post">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" name="submit" class="p-2 rounded btn-danger">Delete</button>

                                                                        </form>
																		</td>
																		<td>{{ $courses->name }}</td>
																		<td>{{ Illuminate\Support\Str::words($courses->text, 10, '...') }}</td>
                                                                        <td>{{ $courses->time }}</td>
																		<td>{{ $courses->duration }}</td>
                                                                        <td>{{ $courses->student }}</td>
                                                                        <td>{{ $courses->imglink }}</td>
																		<td>{{ $courses->status }}</td>
	<td>{{ $courses->c_id }}</td>
																	</tr>
 @endforeach
																</tfoot>
														</table>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="text-center">
                                                                    {{ $course->links() }}
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

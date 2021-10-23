@extends('admin.layout.layout')
@section('content')
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
													<h3 class="card-title">Manage Gallery </h3><a href="{{ route('gallery.create') }}"><button class="p-2 rounded btn-primary">Add Gallery</button></a>
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
																<th>Gallery Name</th>
																<th>Image link</th>
																<th>Status</th>
															</tr>
														</thead>
														<tbody>
                                                            @foreach ($gallery as $galleries)
                                                            <tr>
																	<td>{{ $loop->index+1 }}</td>
																	<td>
                                                                        	<a href="{{ route('gallery.edit', $galleries->id) }}"><button class="p-2 rounded btn-primary">Edit</button></a>
                                                                        <form action="{{ route('gallery.destroy', $galleries->id) }}" method="post">


                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" name="submit" class="p-2 rounded btn-danger">Delete</button>

                                                                        </form>




																	</td>
																	<td>{{ $galleries->name }}</td>
																	<td><img src="{{ asset('uploads/files/'.$galleries->img_link) }}" alt="" width="200"></td>
																	<td>{{ $galleries->status }}</td>

																</tr>


                                                            @endforeach


															</tfoot>
													</table>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="text-center">
                                                                {{ $gallery->links() }}
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



@endsection

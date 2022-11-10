@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Cards</span>
						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">
						{{-- <div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-info btn-icon ml-2"><i class="mdi mdi-filter-variant"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-danger btn-icon ml-2"><i class="mdi mdi-star"></i></button>
						</div> --}}
						<div class="pr-1 mb-3 mb-xl-0">
							<form action="{{ url('/cards') }}" method="get">
								<button onclick="" type="submit" class="btn btn-warning  btn-icon ml-2"><i class="mdi mdi-refresh"></i></button>
							</form>
						</div>
						{{-- <div class="mb-3 mb-xl-0">
							<div class="btn-group dropdown">
								<button type="button" class="btn btn-primary"> {{date('Y-m-d')}}</button>
								<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuDate" data-x-placement="bottom-end">
									<a class="dropdown-item" href="#">2015</a>
									<a class="dropdown-item" href="#">2016</a>
									<a class="dropdown-item" href="#">2017</a>
									<a class="dropdown-item" href="#">2018</a>
								</div>
							</div>
						</div> --}}
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<div class="container text-center">
					<!-- row -->
                    @if($errors->any())
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Holy guacamole!</strong> Your a Free User you can use create (1) Card.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
					<div class="row justify-content-center">
						<div class="card col-sm-12 col-lg-4 col-xl-2 m-3 bg-gray-800">
							<div class="row pd-y-80">
								<div class="col-sm-12">
									<a href="{{ url('/newCard') }}"><i class="fa fa-plus fa-4x"></i></a>
								</div>
								<div class="col-sm-12">
									Add Card
								</div>
							</div>
						</div>
						@foreach ($customer_data as $item)
						<div class="card col-sm-12 col-lg-4 col-xl-2 m-3" style="padding: 0;width: 18rem;">
							<img src="@if($item->photo != null){{url('images/'.$item->photo)}} @else {{url('assets/img/undraw_Image_viewer_re_7ejc.png')}} @endif" class="card-img-top" alt="...">
							<div class="card-body">
							  <h5 class="card-title">{{$item->name}}</h5>
							  <div class="row justify-content-md-center">
								<div class="col" data-toggle="tooltip" data-placement="top" title="Edit">
									<a href="{{ url('/editMyCard'.$item->id) }}" class="" style="color: #28a745;"><i class="fa fa-edit fa-2x" aria-hidden="true"></i></a>
								</div>
								<div class="col" data-toggle="tooltip" data-placement="top" title="Delet">
									<a onclick="return confirm('Are you sure to delet ( {{$item->name}} ) ?')" href="{{ url('/deletCard'.$item->id) }}" class="" style="color: #dc3545;"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
								</div>
								<div class="col" data-toggle="tooltip" data-placement="top" title="View">
									<a href="{{ url('/cardWatch'.$item->id) }}" class="" style="color: #007bff"><i class="fa fa-eye fa-2x" aria-hidden="true"></i></a>
								</div>
							  </div>
							</div>
						</div>
						@endforeach
					</div>
					<!-- row closed -->
				</div>

			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
@endsection

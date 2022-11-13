@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
                            @if(session()->get('lang') == "eng")
                                <h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Contacts</span>
                            @else
                                <h4 class="content-title mb-0 my-auto">الصفحات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ جهات الاتصال</span>
                            @endif


						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">
						{{-- <div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-info btn-icon ml-2"><i class="mdi mdi-filter-variant"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-danger btn-icon ml-2"><i class="mdi mdi-star"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-warning  btn-icon ml-2"><i class="mdi mdi-refresh"></i></button>
						</div> --}}
						<div class="mb-3 mb-xl-0">
							<div class="btn-group dropdown">
								<button type="button" class="btn btn-primary"> {{date('Y-m-d')}}</button>
								{{-- <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuDate" data-x-placement="bottom-end">
									<a class="dropdown-item" href="#">2015</a>
									<a class="dropdown-item" href="#">2016</a>
									<a class="dropdown-item" href="#">2017</a>
									<a class="dropdown-item" href="#">2018</a>
								</div> --}}
							</div>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<div class="container text-center">
					<!-- row -->
					<div class="row justify-content-center">
						{{-- test if ther is resoult in cantact table  --}}
						@if ( count($customer_data) == 0)
                            @if(session()->get('lang') == "eng")
                                <h1> you dont have contacts yet !</h1>
                            @else
                            @endif
                                @if(session()->get('lang') == "eng")
                                    <h1> you dont have contacts yet !</h1>
                                @else
                                    <h1> ! ليس لديك اتصالات حتى الآن </h1>
                                @endif


						@else
							@foreach ($customer_data as $item)
							<div class="card col-sm-12 col-lg-4 col-xl-2 m-3" style="padding: 0;width: 18rem;">
								<img src="@if($item[0]->photo != null) {{url('images/'.$item[0]->photo)}} @else{{asset('assets/img/undraw_Image_viewer_re_7ejc.png')}}@endif" class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">{{$item[0]->name}}</h5>
									<div class="row justify-content-md-center">
										<div class="col" data-toggle="tooltip" data-placement="top" title="Delet">
											<a onclick="return confirm('Are you sure to delet ( {{$item[0]->name}} ) ?')" href="{{ url('/deletContact'.$item[0]->id) }}" class="" style="color: #dc3545;"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
										</div>
										<div class="col" data-toggle="tooltip" data-placement="top" title="View">
											<a href="{{ url('cardWatch'.$item[0]->id) }}" class="" style="color: #007bff"><i class="fa fa-eye fa-2x" aria-hidden="true"></i></a>
										</div>
									  </div>
								</div>
							</div>
							@endforeach
						@endif

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

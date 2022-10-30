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
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('Chnage Password') }}</div>

				<form action="{{ url('update-password') }}" method="POST">
					@csrf
					<div class="card-body">
						@if (session('status'))
							<div class="alert alert-success" role="alert">
								{{ session('status') }}
							</div>
						@elseif (session('error'))
							<div class="alert alert-danger" role="alert">
								{{ session('error') }}
							</div>
						@endif

						<div class="mb-3">
							<label for="oldPasswordInput" class="form-label">Old Password</label>
							<input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput"
								placeholder="Old Password">
							@error('old_password')
								<span class="text-danger">{{ $message }}</span>
							@enderror
						</div>
						<div class="mb-3">
							<label for="newPasswordInput" class="form-label">New Password</label>
							<input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput"
								placeholder="New Password">
							@error('new_password')
								<span class="text-danger">{{ $message }}</span>
							@enderror
						</div>
						<div class="mb-3">
							<label for="confirmNewPasswordInput" class="form-label">Confirm New Password</label>
							<input name="new_password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput"
								placeholder="Confirm New Password">
						</div>

					</div>

					<div class="card-footer">
						<button class="btn btn-success">Submit</button>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
@endsection
@section('js')
@endsection
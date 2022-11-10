@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Update</span>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<div class="container text-center">
					<!-- row -->
					<div class="row justify-content-center">
						<div class="card col-sm-12 col-lg-8 col-xl-8 m-3 bg-gray-800">
							<div class="card-body text-left">
								<form action="updatCardInfo{{$cd[0]->id}}" method="post" enctype="multipart/form-data">
									@csrf
									{{-- informaion inputs --}}
									<label for="photo" class="control-label">Photo:</label>
									<input type="file" name="photo" class="form-control" accept=".png, .jpg, .jpeg">

									<label for="logo" class="control-label">Logo:</label>
									<input type="file" name="logo" class="form-control" accept=".png, .jpg, .jpeg">

									<label for="name" class="control-label">Name:</label>
									<input type="text" name="name" class="form-control" value="{{$cd[0]->name}}" required>

									<label for="poste" class="control-label">Poste:</label>
									<input type="text" name="poste" class="form-control" value="{{$cd[0]->poste}}">

									<label for="email" class="control-label">Email:</label>
									<input type="email" name="email" class="form-control" value="{{$cd[0]->email}}" required>

									<label for="phone" class="control-label">Phone:</label>
									<input type="tel" name="phone" class="form-control" value="{{$cd[0]->phone}}" required>

									<label for="fix" class="control-label">Fix:</label>
									<input type="tel" name="fix" class="form-control" value="{{$cd[0]->fix}}">

									<label for="web" class="control-label">Website:</label>
									<input type="text" name="web" class="form-control" value="{{$cd[0]->website}}">

									<label for="address" class="control-label">Google Map:</label>
									<input type="text" name="address" class="form-control" value="{{$cd[0]->address}}">

									<label for="description" class="control-label">Description:</label>
									<input type="text" name="description" class="form-control" value="{{$cd[0]->description}}">

									<h3 class="text-center mt-5">Social media</h3>

									<hr>
									{{-- social media inputs --}}
									<label for="facbook" class="control-label">Facbook:</label>
									<input type="text" name="facbook" class="form-control" value="{{$cd[0]->facbook}}">

									<label for="instagram" class="control-label">Instagram:</label>
									<input type="text" name="instagram" class="form-control" value="{{$cd[0]->instagram}}">

									<label for="linkedin" class="control-label">Linkedin:</label>
									<input type="text" name="linkedin" class="form-control" value="{{$cd[0]->linkedin}}">

									<label for="youtube" class="control-label">Youtube:</label>
									<input type="text" name="youtube" class="form-control" value="{{$cd[0]->youtube}}">

									<label for="tiktok" class="control-label">Tiktok:</label>
									<input type="text" name="tiktok" class="form-control" value="{{$cd[0]->tiktok}}">

									<label for="twitter" class="control-label">Twitter:</label>
									<input type="text" name="twitter" class="form-control" value="{{$cd[0]->twitter}}">

									<label for="line" class="control-label">Line:</label>
									<input type="text" name="line" class="form-control" value="{{$cd[0]->line}}">

									<label for="pinterest" class="control-label">Pinterest:</label>
									<input type="text" name="pinterest" class="form-control" value="{{$cd[0]->pinterest}}">

									<label for="renren" class="control-label">Renren:</label>
									<input type="text" name="renren" class="form-control" value="{{$cd[0]->renren}}">

									<label for="tencent_weibo" class="control-label">Tencent-weibo:</label>
									<input type="text" name="tencent_weibo" class="form-control" value="{{$cd[0]->tencent_weibo}}">

									<label for="vk" class="control-label">Vk:</label>
									<input type="text" name="vk" class="form-control" value="{{$cd[0]->vk}}">

									<label for="wechat" class="control-label">Wechat:</label>
									<input type="text" name="wechat" class="form-control" value="{{$cd[0]->wechat}}">

									<label for="weibo" class="control-label">Weibo:</label>
									<input type="text" name="weibo" class="form-control" value="{{$cd[0]->weibo}}">

									<input type="submit" class="btn btn-primary mb-5 mt-2">
								</form>
							</div>
						</div>
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

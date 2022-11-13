@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
                            @if(session()->get('lang') == "eng")
                                <h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ New</span>
                            @else
                                <h4 class="content-title mb-0 my-auto">الصفحات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ جديد</span>
                            @endif

						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-info btn-icon ml-2"><i class="mdi mdi-filter-variant"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-danger btn-icon ml-2"><i class="mdi mdi-star"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-warning  btn-icon ml-2"><i class="mdi mdi-refresh"></i></button>
						</div>
{{--						<div class="mb-3 mb-xl-0">--}}
{{--							<div class="btn-group dropdown">--}}
{{--								<button type="button" class="btn btn-primary"> {{date('Y-m-d')}}</button>--}}
{{--								<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--								<span class="sr-only">Toggle Dropdown</span>--}}
{{--								</button>--}}
{{--								<div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuDate" data-x-placement="bottom-end">--}}
{{--									<a class="dropdown-item" href="#">2015</a>--}}
{{--									<a class="dropdown-item" href="#">2016</a>--}}
{{--									<a class="dropdown-item" href="#">2017</a>--}}
{{--									<a class="dropdown-item" href="#">2018</a>--}}
{{--								</div>--}}
{{--							</div>--}}
{{--						</div>--}}
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
								<form action="{{route('InsertNewCard')}}" method="post" enctype="multipart/form-data">
									@csrf
									{{-- informaion inputs --}}
                                    @if(session()->get('lang') == "eng")
                                        <label for="photo" class="control-label">Photo:</label>
                                    @else
                                        <label for="photo" class="control-label">صورة:</label>
                                    @endif
									<input type="file" name="photo" class="form-control">

                                    @if(session()->get('lang') == "eng")
                                        <label for="logo" class="control-label">Logo:</label>
                                    @else
                                        <label for="logo" class="control-label">شعار:</label>
                                    @endif
									<input type="file" name="logo" class="form-control">

                                    @if(session()->get('lang') == "eng")
                                        <label for="name" class="control-label">Name:</label>
                                    @else
                                        <label for="name" class="control-label">اسم:</label>
                                    @endif
									<input type="text" name="name" class="form-control">

                                    @if(session()->get('lang') == "eng")
                                        <label for="poste" class="control-label">Poste:</label>
                                    @else
                                        <label for="poste" class="control-label">مهنة:</label>
                                    @endif
									<input type="text" name="poste" class="form-control">

                                    @if(session()->get('lang') == "eng")
                                        <label for="email" class="control-label">Email:</label>
                                    @else
                                        <label for="email" class="control-label">البريد الإلكتروني:</label>
                                    @endif
									<input type="email" name="email" class="form-control">

                                    @if(session()->get('lang') == "eng")
                                        <label for="phone" class="control-label">Phone:</label>
                                    @else
                                        <label for="phone" class="control-label">هاتف:</label>
                                    @endif
									<input type="tel" name="phone" class="form-control">

                                    @if(session()->get('lang') == "eng")
                                        <label for="fix" class="control-label">Fix:</label>
                                    @else
                                        <label for="fix" class="control-label">هاتف الثابت:</label>
                                    @endif
									<input type="tel" name="fix" class="form-control">

                                    @if(session()->get('lang') == "eng")
                                        <label for="web" class="control-label">Website:</label>
                                    @else
                                        <label for="web" class="control-label">موقع الكتروني:</label>
                                    @endif
									<input type="text" name="web" class="form-control">

                                    @if(session()->get('lang') == "eng")
                                        <label for="address" class="control-label">Address:</label>
                                    @else
                                        <label for="address" class="control-label">العنوان:</label>
                                    @endif
									<input type="text" name="address" class="form-control">

                                    @if(session()->get('lang') == "eng")
                                        <label for="description" class="control-label">Description:</label>
                                    @else
                                        <label for="description" class="control-label">وصف:</label>
                                    @endif
									<input type="text" name="description" class="form-control">

                                    @if(session()->get('lang') == "eng")
                                        <h3 class="text-center mt-5">Social media</h3>
                                    @else
                                        <h3 class="text-center mt-5">وسائل التواصل الاجتماعي</h3>
                                    @endif

									<hr>
									{{-- social media inputs --}}
									<label for="facbook" class="control-label">Facbook:</label>
									<input type="text" name="facbook" class="form-control">

									<label for="instagram" class="control-label">Instagram:</label>
									<input type="text" name="instagram" class="form-control">

									<label for="linkedin" class="control-label">Linkedin:</label>
									<input type="text" name="linkedin" class="form-control">

									<label for="youtube" class="control-label">Youtube:</label>
									<input type="text" name="Youtube" class="form-control">

									<label for="tiktok" class="control-label">Tiktok:</label>
									<input type="text" name="tiktok" class="form-control">

									<label for="twitter" class="control-label">Twitter:</label>
									<input type="text" name="twitter" class="form-control">

									<label for="line" class="control-label">Line:</label>
									<input type="text" name="line" class="form-control">

									<label for="pinterest" class="control-label">Pinterest:</label>
									<input type="text" name="pinterest" class="form-control">

									<label for="renren" class="control-label">Renren:</label>
									<input type="text" name="renren" class="form-control">

									<label for="tencent_weibo" class="control-label">Tencent-weibo:</label>
									<input type="text" name="tencent_weibo" class="form-control">

									<label for="vk" class="control-label">Vk:</label>
									<input type="text" name="vk" class="form-control">

									<label for="wechat" class="control-label">Wechat:</label>
									<input type="text" name="wechat" class="form-control">

									<label for="weibo" class="control-label">Weibo:</label>
									<input type="text" name="weibo" class="form-control">

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

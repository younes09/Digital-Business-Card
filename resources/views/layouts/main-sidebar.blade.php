<!-- main-sidebar -->
		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
		<aside class="app-sidebar sidebar-scroll">
			<div class="main-sidebar-header active">
{{--				<a class="desktop-logo logo-light active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/logo.png')}}" class="main-logo" alt="logo"></a>--}}
{{--				<a class="desktop-logo logo-dark active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/logo-white.png')}}" class="main-logo dark-theme" alt="logo"></a>--}}
{{--				<a class="logo-icon mobile-logo icon-light active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/favicon.png')}}" class="logo-icon" alt="logo"></a>--}}
{{--				<a class="logo-icon mobile-logo icon-dark active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/favicon-white.png')}}" class="logo-icon dark-theme" alt="logo"></a>--}}
			</div>
			<div class="main-sidemenu">
				<div class="app-sidebar__user clearfix">
					<div class="dropdown user-pro-body">
						<div class="">
							<img alt="user-img" class="avatar avatar-xl brround" src="{{URL::asset('assets/img/rose.jpg')}}"><span class="avatar-status profile-status bg-green"></span>
						</div>
						<div class="user-info">
							<h4 class="font-weight-semibold mt-3 mb-0">{{auth()->user()->name}}</h4>
                            @if(session()->get('lang') == "eng")
                            @else
                                <span class="mb-0 text-muted">عضو مجاني</span>
                            @endif

						</div>
					</div>
				</div>
				<ul class="side-menu">
					<li class="slide">
						<a class="side-menu__item" href="{{ url('/cards') }}">
							<i class="si si-layers fa-2x mr-3" data-bs-toggle="tooltip" title="" data-bs-original-title="si-layers" aria-label="si-layers"></i>
                            @if(session()->get('lang') == "eng")
                                <span class="side-menu__label">Cards</span>
                                <span class="badge badge-danger side-badge">New</span>
                            @else
                                <span class="side-menu__label">البطاقات</span>
                                <span class="badge badge-danger side-badge">جديد</span>
                            @endif

						</a>
					</li>
					<li class="slide">
						<a class="side-menu__item" href="{{ url('/contact') }}">

							<i class="si si-people fa-2x mr-3" data-bs-toggle="tooltip" title="" data-bs-original-title="si-people" aria-label="si-people"></i>
                            @if(session()->get('lang') == "eng")
                                <span class="side-menu__label">Contacts</span>
                                <span class="badge badge-danger side-badge">New</span>
                            @else
                                <span class="side-menu__label">جهات الاتصال</span>
                                <span class="badge badge-danger side-badge">جديد</span>
                            @endif

						</a>
					</li>
					<li class="slide">
                        @if(session()->get('lang') == "eng")
                            <a class="side-menu__item" onclick="return alert('Coming soon for premium users only!')" href="#" >
                                <i class="si si-graph fa-2x mr-3" data-bs-toggle="tooltip" title="" data-bs-original-title="si-people" aria-label="si-people"></i>
                                <span class="side-menu__label">Statistique</span>
                                <span class="badge badge-danger side-badge"><i class="fa fa-lock" aria-hidden="true"></i></span>
                            </a>
                        @else
                            <a class="side-menu__item" onclick="return alert('قريبا للمستخدمين المميزين فقط!')" href="#" >
                                <i class="si si-graph fa-2x mr-3" data-bs-toggle="tooltip" title="" data-bs-original-title="si-people" aria-label="si-people"></i>
                                <span class="side-menu__label">الإحصاء</span>
                                <span class="badge badge-danger side-badge"><i class="fa fa-lock" aria-hidden="true"></i></span>
                            </a>
                        @endif

					</li>
				</ul>
			</div>
		</aside>
<!-- main-sidebar -->

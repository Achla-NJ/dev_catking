<!doctype html>
<html lang="en" class="color-sidebar">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{asset('assets/images/cat-icon.png')}}" type="image/png" />
	<!--plugins-->
	@yield('css_plugin')
	
	<!-- loader-->
	<link href="{{asset('assets/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{asset('assets/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{asset('assets/css/app.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/icons.css')}}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/semi-dark.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/header-colors.css')}}" />
	<!-- edited css -->
	<link rel="stylesheet" href="{{asset('assets/css/edit.css')}}">
	<!-- Page css -->
	@yield('page_css')
	
	<title>@yield('title')</title>
	<script src="{{asset('assets/js/jquery.min.js')}}"></script>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header bg-body">
				<div>
					<img src="{{asset('assets/images/cat-icon.png')}}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">
						<img src="{{asset('assets/images/cat-text.png')}}" alt="CatKing">	
					</h4>
				</div>
				<div class="toggle-icon ms-auto text-body"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li class="menu-label">Profile</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-user-pin"></i>
						</div>
						<div class="menu-title">Profile</div>
					</a>
					<ul>
						<li> <a href="{{url('profile')}}"><i class="bx bx-right-arrow-alt"></i>View Profile</a>
						</li>
						<li> <a href="{{url('profile/edit')}}"><i class="bx bx-right-arrow-alt"></i>Edit Profile</a>
						</li>
						<li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Profile Review</a>
						</li>
					</ul>
				</li>
				<li class="menu-label">Usefull Links</li>
				<li>
					<a href="#">
						<div class="parent-icon"><i class='bx bx-award'></i>
						</div>
						<div class="menu-title">CAT 2022 Course</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="parent-icon"><i class='bx bx-line-chart'></i>
						</div>
						<div class="menu-title">Profile Booster Course</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="parent-icon"><i class='bx bx-bookmark-plus'></i>
						</div>
						<div class="menu-title">Non-CAT MBA Entrance Course</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="parent-icon"><i class='bx bx-book-bookmark'></i>
						</div>
						<div class="menu-title">GD/WAT PI Course</div>
					</a>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-customize'></i>
						</div>
						<div class="menu-title">Collage Cut-Offs</div>
					</a>
					<ul class="mm-collapse">
						<li>
							 <a href="#"><i class="bx bx-right-arrow-alt"></i>CAT Based </a>
						</li>
						<li>
							 <a href="#"><i class="bx bx-right-arrow-alt"></i>NMAT Based </a>
						</li>
						<li>
							 <a href="#"><i class="bx bx-right-arrow-alt"></i>SNAP Based </a>
						</li>
						<li>
							 <a href="#"><i class="bx bx-right-arrow-alt"></i>XAT Based </a>
						</li>
						<li>
							 <a href="#"><i class="bx bx-right-arrow-alt"></i>CAT Category Based </a>
						</li>
					</ul>
				</li>
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
					<div class="user-box dropdown ms-auto">
						<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="{{asset('assets/images/avatars/avatar-2.png')}}" class="user-img" alt="user avatar">
							<div class="user-info ps-3">
								<p class="user-name mb-0">Pauline Seitz</p>
								<p class="designattion mb-0">Web Designer</p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Profile</span></a>
							</li>
							<li>
								<div class="dropdown-divider mb-0"></div>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				@yield('breadcrumb')
				<!--end breadcrumb-->
				<div class="row">
					<div class="col">
						<div class="alert border-0 border-start border-5 border-info alert-dismissible fade show bg-light-info">
							<div>An info alert—check it out For admin Messages</div>
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
					</div>
				</div>
                @yield('main_content')			
			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2021. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
	<!--plugins-->	
	<script src="{{asset('assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
	
	@yield('js_plugin')
	<!--app JS-->
	<script src="{{asset('assets/js/app.js')}}"></script>
	@yield('script')
</body>

</html>
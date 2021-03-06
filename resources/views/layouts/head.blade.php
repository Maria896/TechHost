<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>@yield('meta_title')</title>
		<meta name="description" content="@yield('meta_description')">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link href="https://fonts.googleapis.com/css?family=Karla:400,700,700i%7CRubik:300,400,500,700" rel="stylesheet">

		<link rel="icon" type="image/png" href="favicon.ico">
		<!-- Place favicon.ico in the root directory -->
		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">

		<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/iconfont.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/jquery-ui.structure.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/jquery-ui.theme.min.css')}}">
		

		<!--For Plugins external css-->
		<link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}" />

		<!--Theme custom css -->
		<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

		<!--Theme Responsive css-->
		<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" />
		@yield('code')
	</head>
	<style type="text/css">
		.tick {
			margin-right: 4px;
			color: #15095e;
			font-size: 12px;
			}
			.package-features{
				color: Black;
				padding-top: 12px;
			}
			.plan-price{
				padding-top: 25px;
				font-size: 50px !important;
			}
			.xs-section-padding {
				padding: 30px  0px !important;  
			}
			#most-popular-plan{
				margin-top: 20px;
				background-color: red;
			}
			.price-box-btn{
				padding: 15px 75px 15px 75px;
			}
	</style>
@stack('css')
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{trans('app.title')}}</title>
	<link href="/css/bootstrap.min.css" rel="stylesheet">
	<link href="/css/style.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700,400italic,500italic,600italic,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!--[if IE 8]><link rel="stylesheet" type="text/css" href="css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">
		<!-- Navigation -->
		<div class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="/">Veterinaria<strong>Argentina</strong><br />
						<span data-hover="Kennels">Gob. Virasoro Ctes</span>
					</a></h1>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">


						<li>
							<a href="/" title="Home">Home</a>
						</li>





						<?php
						$pagestops = DB::table('pages')
															->where('activo', '=', 'si')
															->where('padre', '=', '')
															->where('mostrar_menu', '=', 'si')
															->orderBy('page', 'asc')->get();


						if (count($pagestops)) {

						foreach ($pagestops as $pagestop) {

						?>


						<li>
							<a href="/pages/{{$pagestop->url_seo}}" title="{{$pagestop->page}}"><span data-hover="{{$pagestop->page}}">{{$pagestop->page}}</span></a>
						</li>


						<?php

						}
								}

						?>





						@if (Sentry::check() && Sentry::getUser()->hasAccess('admin'))


						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span data-hover="Admin"></span>Admin<b class="caret"></b></a>
							<ul class="dropdown-menu">
									<li><a href="{{ URL::to('/users')}}" title="{{trans('pages.users')}}">{{trans('pages.users')}}</a></li>
									<li><a href="{{ URL::to('/groups')}}" title="{{trans('pages.groups')}}">{{trans('pages.groups')}}</a></li>
									<li><a href="/articulos/ver" title="Articulos">Articulos</a></li>
									<li><a href="/contactos" title="Contactos">Contactos</a></li>
									<li><a href="/pages" title="Paginas">Paginas</a></li>
							</ul>
						</li>



						@endif


						@if (Sentry::check())
						<li {{ (Request::is('users/show/' . Session::get('userId')) ? 'class="active"' : '') }}>
							<a href="{{ URL::to('users') }}/{{ Session::get('userId') }}" title="Perfil"><span data-hover="Perfil">Perfil</span></a>
						</li>
						<li {{ (Request::is('login') ? 'class="active"' : '') }}>
							<a href="{{ URL::to('logout') }}" title="{{trans('pages.logout')}}"><span data-hover="{{trans('pages.logout')}}">{{trans('pages.logout')}}</span></a>
						</li>


						@else


						<li>
							<a href="{{ URL::to('login') }}" title="{{trans('pages.login')}}"><span data-hover="{{trans('pages.login')}}">{{trans('pages.login')}}</span></a>
						</li>


						@endif





					</ul>
				</div>
			</div>
		</div>
		<!-- Navigation end -->

		@yield('content')

		<!-- Contact -->
		<div class="container">
			<div class="row">
				<div class="col-md-12 centered">
					<h3><span></span></h3>
					<p></p>
				</div>
			</div>
		</div>
		<!-- Contact end -->


		<!-- Footer -->
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<h6>Nosotros</h6>
						<p><strong>Somos Veterinaria Argentina S.R.L., una empresa que inició el 1 de julio de 1983 en la localidad de Gobernador Virasoro. Buscamos día a día mejorar los servicios que prestamos.</strong></p>
						<p>Nos destacamos en el rubro de las veterinarias por la calidad de nuestro servicio y la excelente atención que brindamos a cada mascota.</p>

					</div>
					<div class="col-md-3 blog">
						<h6>Servicios</h6>
						<p class="title"><a href="#" title="">Veterinaria Argentina S.R.L.</a></p>
						<p>Prestamos servicios a pequeños y grandes animales. En nuestra veterinaria encontrará eficiencia y calidad.</p>





					</div>
					<div class="col-md-3">
					</div>
					<div class="col-md-3 contact-info">
						<h6>Seguinos</h6>
						<p>Estamos en todas las redes sociales.</p>
						<p class="social">
							<a href="{{trans('app.seguinos_facebook')}}" class="facebook"></a> <a href="{{trans('app.seguinos_youtube')}}" class="instagram"></a> <a href="{{trans('app.seguinos_twitter')}}" class="twitter"></a>
							<a href="{{trans('app.seguinos_youtube')}}" class="youtube"></a>
						</p>
						<p class="c-details">

							<span>Tel</span> {{trans('app.contacto')}}

						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 copyright">
						<p>&copy; Copyright 2014. All rights reserved. <a href="#" title="Codex S.A.">Codex S.A.</a></p>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer end -->

		<!-- Javascript plugins -->
		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/carouFredSel.js"></script>
		<script src="/js/jquery.stellar.min.js"></script>
		<script src="/js/ekkoLightbox.js"></script>
		<script src="/js/custom.js"></script>
	</body>
</html>

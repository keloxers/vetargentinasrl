@extends('layouts.default')
@section('content')


<!-- Slider -->
		<div id="home_carousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#home_carousel" data-slide-to="0" class="active"></li>
				<li data-target="#home_carousel" data-slide-to="1"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="/images/2.png" alt="" />
					<div class="carousel-caption">
						<h2>Los adoramos</h2>
					    <p>Somos una clínica veterinaria que contamos con una experiencia de 25 años que se preocupa por la salud y el bienestar de su mascota ofreciéndole una gran atención y un buen trato, con los más altos rendimientos en tecnología para la atención médica de su mascota contamos con los mejores médicos veterinarios que les ofrecerá la mejor atención.</p>
					</div>
				</div>
				<div class="item">
					<img src="/images/3.png" alt="" />
					<div class="carousel-caption">
						<h2>Tambien a ellos</h2>
					    <p>Manejo especializado de oftalmología y cirugía de tejidos blandos en pequeños animales. Trece años de experiencia en docencia, vinculado con varias universidades, desarrollando cátedras de cirugía general y rotación en pequeños animales. Habilidades con los caballos: manejo, reproducción, cirugía.</p>
					</div>
				</div>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#home_carousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#home_carousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
		<!-- Slider end -->





					<!-- Adoption -->
							<div class="container">
								<div class="row">
									<div class="col-md-12 centered">
										<h3><span>Temas de interés</span></h3>
										<p>Disfuta de las ultimas novedades y noticias.</p>
									</div>
								</div>



								<div class="row adoption">

									@foreach ($articulos as $articulo)




										<div class="col-md-4">

											<?php
													$texto = $articulo->texto;
													$archivos = DB::table('archivos')
													->where('padre', '=', 'articulo')
													->where('padre_id', '=', $articulo->id)
													->first();

													if (preg_match('/^.{1,260}\b/s', $articulo->texto, $match))
														{ $texto = $match[0]; }
														$categoria = Categoria::find($articulo->categorias_id);
											?>

											<a href="/articulos/{{ $articulo->url_seo }}" title="">
												@if (count($archivos)>0 )
														<img src="/uploads/crop/{{ $archivos->archivo }}" alt="{{ $articulo->articulo }}" />
												@endif
											</a>
											<div class="title">
												<h5>
													<span data-hover="{{ $articulo->articulo }}">{{ $articulo->articulo }}</span>
												</h5>
											</div>






										</div>



									@endforeach

								</div>



							</div>
							<!-- Adoption end -->


							<!-- Services -->
									<div class="container">
										<div class="row">
											<div class="col-md-12 centered">
												<h3><span>Promociones</span></h3>
												<p>Disfruta de nuestras mejores promociones.</p>
											</div>
										</div>
									</div>
									<!-- Services end -->


							<!-- Carousel -->
									<div id="c-carousel">
										<div id="wrapper">
											<div id="carousel">




												@foreach ($articulos_promociones as $articulos_promocion)

												<?php
														$archivos = DB::table('archivos')
														->where('padre', '=', 'articulo')
														->where('padre_id', '=', $articulos_promocion->id)
														->first();
												?>

														<div>
															<a href="/articulos/{{ $articulos_promocion->url_seo }}" title="" data-hover="{{ $articulo->articulo }}">
																<img src="/uploads/crop/{{ $archivos->archivo }}" alt="" />
															</a>
														</div>

												@endforeach

											</div>
											<div id="pager" class="pager"></div>
										</div>
									</div>
									<!-- Carousel end -->



@stop

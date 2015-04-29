@extends('layouts.default')
@section('content')


@if (count($articulos_tapa) > 0)

<!-- Slider -->
		<div id="home_carousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#home_carousel" data-slide-to="0" class="active"></li>
				<li data-target="#home_carousel" data-slide-to="1"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">

				<?php $primero=true; ?>

				@foreach ($articulos_tapa as $articulo)

						<?php
							if ($primero) {
								$isactives = " active";
								$primero=false;
							} else {
								$isactives = "";
							}

							$archivos = DB::table('archivos')
							->where('padre', '=', 'articulo')
							->where('padre_id', '=', $articulo->id)
							->first();



						?>

						<div class="item{{$isactives}}">
							<img src="/uploads/big/{{ $archivos->archivo }}" alt="" />
							<div class="carousel-caption">
								<h2>{{ $articulo->articulo }}</h2>
							    <p>{{ $articulo->copete }}</p>
							</div>
						</div>

				@endforeach

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


		@endif

		@if (count($articulos) > 0)

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

				@endif


				@if (count($articulos_promociones) > 0)

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
															<a href="/articulos/{{ $articulos_promocion->url_seo }}" title="" data-hover="{{ $articulos_promocion->articulo }}">
																<img src="/uploads/crop/{{ $archivos->archivo }}" alt="" />
															</a>
														</div>

												@endforeach

											</div>
											<div id="pager" class="pager"></div>
										</div>
									</div>
									<!-- Carousel end -->

			@endif

@stop

@extends('layouts.default')
@section('content')
  <!-- Testimonials -->
  		<div class="testimonials" data-stellar-background-ratio="0.6">
  			<div class="container">
  				<div class="row">
  					<div class="col-md-12 centered">
  						<!-- Slider -->
  						<div id="home_testimonial" class="carousel slide" data-ride="carousel">

  							<!-- Wrapper for slides -->
  							<div class="carousel-inner">
  								<div class="item active">

  								</div>
  							</div>
  						</div>
  						<!-- Slider end -->

  					</div>
  				</div>
  			</div>
  		</div>
  		<!-- Testimonials end -->





					<!-- Adoption -->
							<div class="container">
								<div class="row">
									<div class="col-md-12 centered">
										<h3><span>{{$categoria->categoria}}</span></h3>
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
@stop

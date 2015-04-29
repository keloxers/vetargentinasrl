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
										<h3><span>{{$articulo->articulo}}</span></h3>
										<p>{{$articulo->created_at}} -
										{{$categoria->categoria}} - {{$articulo->copete}}</p>
									</div>
								</div>
							</div>
							<!-- Adoption end -->
							<br><br>

							<!-- Content -->
							<div class="container content">
								<div class="row">
									<div class="col-md-5">
									<?php foreach ($archivos as $archivo) { ?>
											<img src="/uploads/big/{{ $archivo->archivo }}" alt=""/><br><br>
									<?php } ?>


									</div>
									<div class="col-md-7">
                    <p class="social">
                    Compartir en <strong><a href='http://www.facebook.com/sharer.php?u=http://www.veterinariaargentinasrl.com/articulos/{{$articulo->url_ceo}}' class='facebook'>Facebook</a><strong>
                  </p>
                    <br><br>
										<p>{{$articulo->texto}}</p>

									</div>
								</div>
							</div>
							<!-- Content end -->






@stop

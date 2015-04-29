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




<body class="contentpage">
<!-- Contact -->
<div class="container">
	<div class="row">
		<div class="col-md-12 centered">
			<h1>Articulos</h1>
		</div>
	</div>
</div>
<!-- Contact end -->




				<!-- Contact -->
				<div class="container">
					<div class="row">
						<div class="col-md-12 left">


	<?php
		echo "<a href='/articulos/create' class='btn'>Nuevo articulo</a><br><br>";
		if (count($articulos)>0 )  {
	?>


													<table class="" border="1">

														<!-- Table head -->
														<thead>

													<!-- Table row -->
													<tr>
														<th style="width: 25%;">
															Titular
														</th>
														<th style="width: 40%;">
															Copete
														</th>
														<th style="width: 10%;">
															Estado
														</th>
														<th style="width: 20%;">
															Accion
														</th>
													</tr>
													<!-- End table row -->

												</thead>
												<!-- End table head -->

												<!-- Table body -->
												<tbody>

												<?php

											foreach ($articulos as $articulo)
												{

														$categoria = Categoria::find($articulo->categorias_id);

														$texto = $articulo->texto;
														if (preg_match('/^.{1,260}\b/s', $articulo->texto, $match))
														{
																$texto = $match[0];
														}


														echo "<tr>";
												    echo "<td>" . $articulo->articulo . "</td>";
												    echo "<td>" . $texto . "</td>";
												    echo "<td>" . $articulo->estado . "</td>";
														echo "<td>" ;

														echo "<a href='/articulos/" . $articulo->id . "/publicar' class='btn'>Publicar</a> ";
														echo "<a href='/articulos/" . $articulo->id . "/edit' class='btn'>Editar</a> ";
														echo "<a href='/articulos/" . $articulo->id . "/archivos/articulo' class='btn'>Archivos</a> ";
														echo "<a href='/articulos/" . $articulo->id . "/delete' class='btn'>Eliminar</a> ";




														print "</td>";
														print "</tr>";



												}


											?>


											</tbody>
											<!-- End table body -->

										</table>

									<!-- End table -->

										{{ $articulos->links()}}




							</footer>
						</section>
		<?php

			}

		?>



	</div>
</div>
</div>



@stop

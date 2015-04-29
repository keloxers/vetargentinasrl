@extends('layouts.default')

@section('content')
<body class="contentpage">


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





<!-- Contact -->
<div class="container">
	<div class="row">
		<div class="col-md-12 left">



<a href='/pages/create' class='btn'>Crear nueva pagina</a><br>

<?php if (count($pages)>0 )  { ?>




									<table border=1>

										<thead>

											<tr>
												<th>Pagina</th>
												<th align="center">Accion</th>
											</tr>
										</thead>
										<tbody>

												<?php

											foreach ($pages as $page)
												{


														echo "<tr>";
												        echo "<td>" . $page->page . "</td>";
												        echo "<td align='center'>" ;

														echo "<a href='/pages/" . $page->id . "/edit' class='btn'>Editar</a> ";

														echo "<a href='/pages/" . $page->url_seo . "' class='btn'>Ver</a> ";
														echo "<a href='/pages/" . $page->id . "/delete' class='btn'>Eliminar</a> ";

														print "</td>";
														print "</tr>";


												}


											?>

									</tbody>
								</table>

									{{ $pages->links()}}

		<?php

			}

		?>


	</div>
</div>
</div>
</body>
@stop

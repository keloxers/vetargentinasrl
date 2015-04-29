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
				<div class="col-md-3 centered">
				</div>
				<div class="col-md-6 centered">
					<h3><span>Perfil</span></h3>
					<p>Ya eres miembro de nuestra red</p>

					<h3>Tus Datos:</h3>

							@if ($user->first_name)
								<p><strong>Nombre:</strong> {{ $user->first_name }} </p>
						@endif
						@if ($user->last_name)
								<p><strong>Apellido:</strong> {{ $user->last_name }} </p>
						@endif
							<p><strong>Email: </strong> {{ $user->email }}</p>


						<p>Fecha creacion Perfil: {{ $user->created_at }}</p>
						<p>Modificados: {{ $user->updated_at }}</p>

						<a href="/users/{{$user->id}}/edit" class="btn btn-default btn-green">Editar</a>
						<br><br>

				<h3>Grupos a los que eres miembro:</h3>

				<?php $userGroups = $user->getGroups(); ?>


							@if (count($userGroups) >= 1)
								@foreach ($userGroups as $group)
								{{ $group['name'] }}
							@endforeach
						@else
							{{trans('groups.notfound')}}
						@endif





				</div>
			</div>
		</div>
		<!-- Contact end -->









</body>


@stop

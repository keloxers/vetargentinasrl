@extends('layouts.default')
@section('content')

<body class="contentpage">
<!-- Contact -->
<div class="container">
	<div class="row">
		<div class="col-md-12 centered">
		</div>
	</div>
</div>
<!-- Contact end -->


<!-- Contact -->
<div class="container">
	<div class="row">
		<div class="col-md-3 centered">
		</div>
		<div class="col-md-6 centered">
			<h3><span>Ingreso</span></h3>

			{{ Form::open(array('action' => 'SessionController@store')) }}
			<p>{{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => trans('users.email'), 'autofocus')) }}</p>
				<p>{{ Form::password('password', array('class' => 'form-control', 'placeholder' => trans('users.pword')))}}</p>
					<p>{{trans('pages.password_reset')}}?</p>
						<p>{{ Form::checkbox('rememberMe', 'rememberMe') }} {{trans('users.remember')}}?</p>
							<p>{{ Form::submit(trans('pages.login'), array('class' => 'btn btn-default btn-green'))}}</p>
								<p>{{ Form::close() }}</p>
									<p>No tienes una cuenta ? <a href="/register" >Registrarse gratis !</a></p>

		</div>
	</div>
</div>
<!-- Contact end -->

</body>




@stop

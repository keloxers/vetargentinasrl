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
		<div class="col-md-12 left">
			<h3><span>Ingreso</span></h3>

      <table>
			<thead>
				<th>{{trans('pages.user')}}</th>
				<th>{{trans('pages.status')}}</th>
				<th>{{trans('pages.options')}}</th>
			</thead>
			<tbody>
				@foreach ($users as $user)
					<tr>
						<td><a href="{{ action('UserController@show', array($user->id)) }}">{{ $user->email }}</a></td>
						<td>@if ($user->status=='Active')
							{{trans('pages.active')}}
						 @else
						 	{{trans('pages.notactive')}}
						 @endif
						 </td>

						<td>
							<button class="btn btn-default btn-green" type="button" onClick="location.href='{{ action('UserController@edit', array($user->id)) }}'">{{trans('pages.actionedit')}}</button>
							@if ($user->status != 'Suspended')
								<button class="btn btn-default btn-green" type="button" onClick="location.href='{{ route('suspendUserForm', array($user->id)) }}'">{{trans('pages.actionsuspend')}}</button>
							@else
								<button class="btn btn-default btn-green" type="button" onClick="location.href='{{ action('UserController@unsuspend', array($user->id)) }}'">{{trans('pages.actionunsuspend')}}</button>
							@endif
							@if ($user->status != 'Banned')
								<button class="btn btn-default btn-green" type="button" onClick="location.href='{{ action('UserController@ban', array($user->id)) }}'">{{trans('pages.actionban')}}</button>
							@else
								<button class="btn btn-default btn-green" type="button" onClick="location.href='{{ action('UserController@unban', array($user->id)) }}'">{{trans('pages.actionunban')}}</button>
							@endif
							<button class="btn btn-default btn-green" href="{{ action('UserController@destroy', array($user->id)) }}" data-token="{{ Session::getToken() }}" data-method="delete">{{trans('pages.actiondelete')}}</button>
            </td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
  </div>
</div>
@stop



</body>




@stop

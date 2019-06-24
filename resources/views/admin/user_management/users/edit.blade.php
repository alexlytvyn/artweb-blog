@extends('admin.layouts.app_admin')

@section('content')
	<div class="container">
		@component('admin.components.breadcrumbs')
			@slot('title') Редагування користувача	@endslot
			@slot('parent') Головна	@endslot
			@slot('active') Користувачі	@endslot
		@endcomponent

		<hr>

		<form class="form-horizontal" action="{{route('admin.user_management.user.update', $user)}}" method="post">
			{{csrf_field()}}
			{{method_field('PUT')}}

			{{-- Form Template --}}
			@include('admin.user_management.users.partials.form')
		</form>

	</div>
@endsection

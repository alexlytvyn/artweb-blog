@extends('admin.layouts.app_admin')

@section('content')
	<div class="container">
		@component('admin.components.breadcrumbs')
			@slot('title') Додавання користувача	@endslot
			@slot('parent') Головна	@endslot
			@slot('active') Користувачі	@endslot
		@endcomponent

		<hr>

		<form class="form-horizontal" action="{{route('admin.user_management.user.store')}}" method="post">
			{{csrf_field()}}

			{{-- Form Template --}}
			@include('admin.user_management.users.partials.form')
		</form>

	</div>
@endsection

@extends('admin.layouts.app_admin')

@section('content')
	<div class="container">
		@component('admin.components.breadcrumbs')
			@slot('title') Додавання категорії	@endslot
			@slot('parent') Головна	@endslot
			@slot('active') Категорії	@endslot
		@endcomponent

		<hr>

		<form class="form-horizontal" action="{{route('admin.category.store')}}" method="post">
			{{csrf_field()}}

			{{-- Form Template --}}
			@include('admin.categories.partials.form')
		</form>

	</div>
@endsection

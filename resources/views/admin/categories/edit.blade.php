@extends('admin.layouts.app_admin')

@section('content')
	<div class="container">
		@component('admin.components.breadcrumbs')
			@slot('title') Редагування категорії	@endslot
			@slot('parent') Головна	@endslot
			@slot('active') Категорії	@endslot
		@endcomponent

		<hr>

		<form class="form-horizontal" action="{{route('admin.category.update', $category)}}" method="post">
			{{csrf_field()}}
			{{method_field('PUT')}}

			{{-- Form Template --}}
			@include('admin.categories.partials.form')
		</form>

	</div>
@endsection

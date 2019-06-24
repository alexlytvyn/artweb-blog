@extends('admin.layouts.app_admin')

@section('content')
	<div class="container">
		@component('admin.components.breadcrumbs')
			@slot('title') Редагування статті	@endslot
			@slot('parent') Головна	@endslot
			@slot('active') Статті	@endslot
		@endcomponent

		<hr>

		<form class="form-horizontal" action="{{route('admin.article.update', $article)}}" method="post">
			{{csrf_field()}}
			{{method_field('PUT')}}

			{{-- Form Template --}}
			@include('admin.articles.partials.form')

			<input type="hidden" name="modified_by" value="{{Auth::id()}}">
		</form>

	</div>
@endsection

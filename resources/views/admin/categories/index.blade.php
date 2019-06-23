@extends('admin.layouts.app_admin')

@section('content')
	<div class="container">
		@component('admin.components.breadcrumbs')
			@slot('title') Список категорій @endslot
			@slot('parent') Головна @endslot
			@slot('active') Категорії @endslot
		@endcomponent

	<hr>

	<a href="{{route('admin.category.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i> Додати категорію</a>
	<table class="table table-striped">
		<thead>
			<th>Назва</th>
			<th>Опубліковано</th>
			<th class="text-right">Дія</th>
		</thead>
		<tbody>
			@forelse ($categories as $category)
				<tr>
					<td>{{$category->title}}</td>
					<td>{{$category->is_published}}</td>
					<td>
						<a href="{{route('admin.category.edit', $category)}}" class=""><i class="fa fa-edit"></i></a>
					</td>
				</tr>
			@empty
				<td colspan="3" class="text-center"><h2>Дані про категорії відсутні!</h2></td>
			@endforelse
		</tbody>
		<tfoot>
			<tr>
				<td colspan="3">
					<ul class="pagination pull-right">
						{{$categories->links()}}
					</ul>
				</td>
			</tr>
		</tfoot>
	</table>
	</div>
@endsection

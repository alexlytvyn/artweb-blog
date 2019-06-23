@extends('admin.layouts.app_admin')

@section('content')
	<div class="container">
		@component('admin.components.breadcrumbs')
			@slot('title') Список статей @endslot
			@slot('parent') Головна @endslot
			@slot('active') Статті @endslot
		@endcomponent

	<hr>

	<a href="{{route('admin.article.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i> Додати статтю</a>
	<table class="table table-striped">
		<thead>
			<th>Назва</th>
			<th>Опубліковано</th>
			<th class="text-right">Дія</th>
		</thead>
		<tbody>
			@forelse ($articles as $article)
				<tr>
					<td>{{$article->title}}</td>
					<td>{{$article->is_published}}</td>
					<td class="text-right">
						<form onsubmit="if(confirm('Ви справді хочете видалити статтю?')){return true;} else {return false;}" action="{{route('admin.article.destroy', $article)}}" method="post">
							{{csrf_field()}}
							{{method_field('DELETE')}}
							<a href="{{route('admin.article.edit', $article)}}" class="btn btn-default"><i class="fa fa-edit"></i></a>
							<button type="submit" name="button" class="btn"><i class="fa fa-trash-o"></i></button>
						</form>
					</td>
				</tr>
			@empty
				<td colspan="3" class="text-center"><h2>Дані про статті відсутні!</h2></td>
			@endforelse
		</tbody>
		<tfoot>
			<tr>
				<td colspan="3">
					<ul class="pagination pull-right">
						{{$articles->links()}}
					</ul>
				</td>
			</tr>
		</tfoot>
	</table>
	</div>
@endsection

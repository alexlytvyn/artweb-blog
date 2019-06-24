@extends('admin.layouts.app_admin')

@section('content')
	<div class="container">
		@component('admin.components.breadcrumbs')
			@slot('title') Список користувачів @endslot
			@slot('parent') Головна @endslot
			@slot('active') Користувачі @endslot
		@endcomponent

	<hr>

	<a href="{{route('admin.user_management.user.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i> Додати користувача</a>
	<table class="table table-striped">
		<thead>
			<th>Ім'я</th>
			<th>E-mail</th>
			<th class="text-right">Дія</th>
		</thead>
		<tbody>
			@forelse ($users as $user)
				<tr>
					<td>{{$user->name}}</td>
					<td>{{$user->email}}</td>
					<td class="text-right">
						<form onsubmit="if(confirm('Ви справді хочете видалити користувача?')){return true;} else {return false;}" action="{{route('admin.user_management.user.destroy', $user)}}" method="post">
							{{csrf_field()}}
							{{method_field('DELETE')}}
							<a href="{{route('admin.user_management.user.edit', $user)}}" class="btn btn-default"><i class="fa fa-edit"></i></a>
							<button type="submit" name="button" class="btn"><i class="fa fa-trash-o"></i></button>
						</form>
					</td>
				</tr>
			@empty
				<td colspan="3" class="text-center"><h2>Дані про користувачів відсутні!</h2></td>
			@endforelse
		</tbody>
		<tfoot>
			<tr>
				<td colspan="3">
					<ul class="pagination pull-right">
						{{$users->links()}}
					</ul>
				</td>
			</tr>
		</tfoot>
	</table>
	</div>
@endsection

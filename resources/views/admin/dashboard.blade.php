@extends('admin.layouts.app_admin')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="jumbotron">
					<p><span class="label label-primary">Категорій: 0</span></p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="jumbotron">
					<p><span class="label label-primary">Статей: 0</span></p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="jumbotron">
					<p><span class="label label-primary">Відвідувачів: 0</span></p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="jumbotron">
					<p><span class="label label-primary">Сьогодні: 0</span></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<a href="#" class="btn btn-block btn-default">Додати категорію</a>
				<a href="#" class="list-group-item">
				<h4 class="list-group-item-heading">Категорія перша</h4>
				<p class="list-group-item-text">Кількість статей: </p>
				</a></div>
			<div class="col-md-6">
				<a href="#" class="btn btn-block btn-default">Додати статтю</a>
				<a href="#" class="list-group-item">
				<h4 class="list-group-item-heading">Стаття перша</h4>
				<p class="list-group-item-text">Категорія</p>
				</a></div>
		</div>
	</div>
@endsection

@extends('admin.layouts.app_admin')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="jumbotron text-center">
					<p><span class="label label-primary">Категорій: {{$categories_count}}</span></p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="jumbotron text-center">
					<p><span class="label label-primary">Статей: {{$articles_count}}</span></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<a href="{{route('admin.category.create')}}" class="btn btn-block btn-default">Додати категорію</a>
				@foreach ($categories as $category)
					<a href="{{route('admin.category.edit', $category)}}" class="list-group-item">
					<h4 class="list-group-item-heading">{{$category->title}}</h4>
					<p class="list-group-item-text">{{$category->articles()->count()}}</p>
					</a>
				@endforeach
			</div>
			<div class="col-md-6">
				<a href="{{route('admin.article.create')}}" class="btn btn-block btn-default">Додати статтю</a>
				@foreach ($articles as $article)
					<a href="{{route('admin.article.edit', $article)}}" class="list-group-item">
					<h4 class="list-group-item-heading">{{$article->title}}</h4>
					<p class="list-group-item-text">{{$article->categories()->pluck('title')->implode(', ')}}</p>
					</a>
				@endforeach
			</div>
		</div>
	</div>
@endsection

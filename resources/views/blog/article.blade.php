@extends('layouts.app')

@section('title', $article->meta_title)
@section('description', $article->meta_description)
@section('keywords', $article->meta_keywords)

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>{{$article->title}}</h1>
				<p>{!! $article->description_full !!}</p>
			</div>
		</div>
	</div>
@endsection

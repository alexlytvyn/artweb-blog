@foreach ($categories as $category_list_item)
	<option value="{{$category_list_item->id or ""}}"
		@isset($category->id)
			@if ($category->parent_id == $category_list_item->id)
				selected
			@endif
			@if ($category->id == $category_list_item->id)
				hidden
			@endif
		@endisset
		>
		{!! $delimiter or "" !!}{{$category_list_item->title or ""}}
	</option>

	@if (count($category_list_item->children) > 0)
		@include('admin.categories.partials.categories', [
			'categories' => $category_list_item->children,
			'delimiter' => ' - ' . $delimiter
		])
	@endif

@endforeach

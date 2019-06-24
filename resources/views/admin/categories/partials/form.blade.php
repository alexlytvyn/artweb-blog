<label for="">Статус</label>
<select class="form-control" name="is_published">
	@if (isset($category->id))
		<option value="0" @if ($category->is_published == 0) selected="" @endif>Не опубліковано</option>
		<option value="1" @if ($category->is_published == 1) selected="" @endif>Опубліковано</option>
	@else
		<option value="0">Не опубліковано</option>
		<option value="1">Опубліковано</option>
	@endif
</select>

<label for="">Назва</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок категорії" value="{{$category->title or ""}}" required>

<label for="">Slug</label>
<input type="text" class="form-control" name="slug" placeholder="Автоматчне заповнення" value="{{$category->slug or ""}}" readonly>

<label for="">"Батьківська" категорія</label>
<select class="form-control" name="parent_id">
	<option value="0">-- без батьківської категорії --</option>
	@include('admin.categories.partials.categories', ['categories' => $categories])
</select>

<hr>

<input style="margin-bottom:20px;" type="submit" class="btn btn-primary" value="Зберегти">

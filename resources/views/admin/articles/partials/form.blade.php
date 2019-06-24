<label for="">Статус</label>
<select class="form-control" name="is_published">
	@if (isset($article->id))
		<option value="0" @if ($article->is_published == 0) selected="" @endif>Не опубліковано</option>
		<option value="1" @if ($article->is_published == 1) selected="" @endif>Опубліковано</option>
	@else
		<option value="0">Не опубліковано</option>
		<option value="1">Опубліковано</option>
	@endif
</select>

<label for="">Назва</label>
<input type="text" class="form-control" name="title" placeholder="Назва статті" value="{{$article->title or ""}}" required>

<label for="">Slug (унікальний ідентифікатор)</label>
<input type="text" class="form-control" name="slug" placeholder="Автоматчне заповнення" value="{{$article->slug or ""}}" readonly>

<label for="">"Батьківська" категорія</label>
<select class="form-control" name="categories[]" multiple>
	@include('admin.articles.partials.categories', ['categories' => $categories])
</select>

<label for="">Короткий зміст</label>
<textarea class="form-control" id="description_short" name="description_short">{{$article->description_short or ""}}</textarea>

<label for="">Повний зміст</label>
<textarea class="form-control" id="description_full" name="description_full">{{$article->description_full or ""}}</textarea>
<hr>

<label for="">Meta-заголовок</label>
<input type="text" class="form-control" name="meta_title" placeholder="Meta-заголовок" value="{{$article->meta_title or ""}}">

<label for="">Meta-опис</label>
<input type="text" class="form-control" name="meta_description" placeholder="Meta-опис" value="{{$article->meta_description or ""}}">

<label for="">Ключові слова</label>
<input type="text" class="form-control" name="meta_keywords" placeholder="Ключові слова, через кому" value="{{$article->meta_keywords or ""}}">

<hr>

<input style="margin-bottom:20px;" type="submit" class="btn btn-primary" value="Зберегти">

@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
@endif

<label for="">Ім'я користувача</label>
<input type="text" class="form-control" name="name" placeholder="Ім'я користувача" value="@if (old('name')) {{old('name')}} @else {{$user->name or ""}} @endif" required>

<label for="">E-mail користувача</label>
<input type="email" class="form-control" name="email" placeholder="E-mail користувача" value="@if (old('email')) {{old('email')}} @else {{$user->email or ""}} @endif" required>

<label for="">Пароль</label>
<input type="password" class="form-control" name="password" placeholder="Пароль" required>

<label for="">Підтвердження пароля</label>
<input type="password" class="form-control" name="password_confirmation" placeholder="Повторіть пароль" required>

<hr>

<input style="margin-bottom:20px;" type="submit" class="btn btn-primary" value="Зберегти">

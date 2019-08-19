<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

</head>
<body>
<form method="post" action="{{ route('client.update', $client->id) }}">
	  
	  @csrf
	  @method('PATCH')


	{{ csrf_field() }}


	<input type="text" name="code" required placeholder="code" value="{{$client->code}}"><br>
	<br>
	<input type="text" name="fullname" required placeholder="fullname" value="{{$client->fullname}}"><br>
     <br>
     <input type="date" name="birthdate" required placeholder="birthdate" value="{{$client->birthdate}}"><br>
     <br>
      <select name="is_active">
	 	<option value="1">activo</option>
	 	<option value="0">inactivo</option>
	 </select>


		<br>
	<input type="submit" name="Guardar" required><br>
</form>
</body>
</html>
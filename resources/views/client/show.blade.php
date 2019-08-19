
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
   <dl>
   	<dt>code</dt><dd>{{ $client->code }}</dd>
   <dt>fullname</dt><dd>{{ $client->fullname}}</dd>
  	<dt>birthdate</dt><dd>{{ $client->birthdate }}</dd>
  	<dt>is_active</dt><dd>{{ $client->is_active}}</dd>
   </dl>

<a href="{{ route('client.index') }}">Lista</a>
<a href="{{ route('client.edit', $client->id) }}">Edit</a>

<form action="{{ route('client.destroy', $client->id) }}" method="post">
	
	@csrf
	@method('DELETE')
	<input type="submit" value="Borrar">

</form>

</body>
</html>
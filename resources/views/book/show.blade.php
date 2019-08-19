


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
   <dl>
   	<dt>name</dt><dd>{{ $book->name }}</dd>
   <dt>autor</dt><dd>{{ $book->autor }}</dd>
  	<dt>page</dt><dd>{{ $book->page }}</dd>
  	<dt>total_copies</dt><dd>{{ $book->total_copies }}</dd>
  	<dt>available_copies</dt><dd>{{ $book->available_copies }}</dd>
   </dl>

<a href="{{ route('book.index') }}">Lista</a>
<a href="{{ route('book.edit', $book->id) }}">Edit</a>

<form action="{{ route('book.destroy', $book->id) }}" method="post">
	
	@csrf
	@method('DELETE')
	<input type="submit" value="Borrar">

</form>

</body>
</html>
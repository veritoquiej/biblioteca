<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

</head>
<body>
<form method="post" action="{{ route('book.update', $book->id) }}">
	  
	  @csrf
	  @method('PATCH')


	{{ csrf_field() }}
	<input type="text" name="name" required placeholder="name" value="{{$book->name}}"><br>
	<input type="text"subjectname" required placeholder="autor" value="{{$book->autor}}"><br>
	<input type="text" name="page" required placeholder="page" value="{{$book->page}}"><br>
	<input type="text" name="total_copies" required placeholder="total_copies" value="{{$book->total_copies}}"><br>
		<input type="text" name="available_copies" required placeholder="available_copies" value="{{$book->available_copies}}"><br>
		<br>
	<input type="submit" name="Guardar" required><br>
</form>
</body>
</html>
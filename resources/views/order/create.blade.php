<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
 <table>
       {{ Session::get('books')}}

		<tr>
			<th>name</th>
			<th>autor</th>
			<th>page</th>
			<th>available</th>
		</tr>

		@foreach($books as $book)
<tr>

	<td>{{ $book->name }}</td>
	<td>{{ $book->autor}}</td>
	<td>{{ $book->page}}</td>
	<td>{{ $book->available_copies}}</td>
	<td><a href="/add/{{ $book->id}}"class="button is dark">Agregar ala orden</a></td>
</tr>

@endforeach
</table>
</body>
</html>
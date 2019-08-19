<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
 <table>
		<tr>
			<th>code</th>
			<th>fullname</th>
			<th>birthdate</th>
			<th>is_sactive</th>
		</tr>

		@foreach($clients as $client)
<tr>

	<td>{{ $client->code}}</td>
	<td>{{ $client->fullname}}</td>
	<td>{{ $client->birthdate}}</td>
	<td>{{ $client->is_active}}</td>
	
	<td><a href="{{ route('client.show', $client->id) }}">Detalle</a></td>
</tr>

@endforeach
</table>
</body>
</html>
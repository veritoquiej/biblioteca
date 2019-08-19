<!DOCTYPE html>
<html>
<head lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<form method="post" action="{{ route('client.store') }}">
	
	{{ csrf_field() }}

  


	<input type="text" name="code" required placeholder="code"><br>
	<br>
	<input type="text" name="fullname" required placeholder="fullname"><br>
     <br>
     <input type="date" name="birthdate" required placeholder="birthdate"><br>
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
<!DOCTYPE html>
<html>
<head lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<form method="post" action="{{ route('book.store') }}">
	
	{{ csrf_field() }}

  

 
    /**
     * [type description]
     * @type {String}
     */
	<input type="text" name="name" required placeholder="name"><br>
	<br>
	<input type="text" name="autor" required placeholder="autor"><br>
     <br>
     <input type="text" name="page" required placeholder="page"><br>
     <br>
     <input type="text" name="total_copies" required placeholder="total_copies"><br>
     <br>
     <input type="text" name="available_copies" required placeholder="available_copies"><br>


    
   <br>
  
	<input type="submit" name="Guardar" required><br>

	 
</form>

</body>
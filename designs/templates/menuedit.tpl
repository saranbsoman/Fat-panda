<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="web/css/bootstrap.css">
	<title></title>
</head>
<body>
	<center>
	<h1>ADD MENU</h1>
	<form method="post" action="">
	<table border="2" class="table">

	{foreach from=$update item='b'}
	<input type="hidden" name="hide" value="h">
	<tr>
		<td>Category</td><td><input type="radio" name="cat" value="Veg" >Veg
							<input type="radio" name="cat" value="Non-Veg" checked="checked">Non-Veg</td>
	</tr>
	<tr><td>Name</td><td><input type="text" name="name" value="{$b.name}" required=""></td></tr>
	<tr><td>Amount</td><td><input type="text" name="amt" value="{$b.amount}" required=""></td></tr>
	<tr><td>Details</td><td><input type="text" name="det" value="{$b.details}" required=""></td></tr>
	<tr><td>Add Photo</td><td><input type="file" name="img" value="{$b.image}" required=""></td></tr>	
	<tr><td><input type="submit" value="update"></td></tr>
	{/foreach}
	</table>
	</form>
	</center>	


</body>
</html>
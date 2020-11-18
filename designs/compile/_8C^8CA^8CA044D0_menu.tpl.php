<?php /* Smarty version 2.6.26, created on 2019-11-02 08:32:17
         compiled from menu.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
	<h1>ADD MENU</h1>
	<form method="post" action="" enctype="multipart/form-data">
	<table class="table">
	<input type="hidden" name="hide" value="h">
	<tr><td>Category</td><td><input type="radio" name="cat" value="Veg" >Veg
							<input type="radio" name="cat" value="Non-Veg" checked="checked">Non-Veg</td>
	</tr>
	<tr><td>Name</td><td><input type="text" name="name" required=""></td></tr>
	<tr><td>Amount</td><td><input type="text" name="amt" required=""></td></tr>
	<tr><td>Details</td><td><input type="text" name="det" required=""></td></tr>
	<tr><td>Add Photo</td><td><input type="file" name="img" required=""></td></tr>
	</table>	
	<a href="menu.php"><Button class="btn btn-outline-success">Add</Button></a>
	</form>
	</center>	


</body>
</html>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="web/css/bootstrap.css">
	<title></title>
</head>
<body>
		<table border="2" class="table">
		<tr><th>Category</th><th>Name</th><th>Amount</th><th>Details</th></tr>
	{foreach from=$view item='b'}
	<tr><td>{$b.category}</td>
	<td>{$b.name}</td>
	<td>{$b.amount}</td>
	<td>{$b.details}</td>
	<td>{$b.image}</td>
	<td><a href="deletemenu.php?v={$b.mkey}"><Button class="btn btn-outline-danger btn-sm">Delete</Button></a></td>
	<td><a href="menuedit.php?v={$b.mkey}"><Button class="btn btn-outline-success btn-sm">Update</Button></a></td>			
	{/foreach}
</body>
</html>

<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="web/css/bootstrap.css">

	<title></title>
</head>
<body>
	<table class="table">
		{foreach from=$view item='b'}
		
			<tr><td>Panchayath License</td><td><a href="{$b.path}"  target="_blank">Licence</a></td></tr>
			<tr><td>Food Safety</td><td><a href="{$b.path1}" download="">Food safety</a></td></tr>
			<tr><td>Quality Management</td><td><a href="{$b.path2}" download="">Quality Management</a></td></tr>
			<tr><td>ISO certificate</td><td><a href="{$b.path3}" download="">ISO</a></td></tr>
			<tr><td>Pollution Certificate</td><td><a href="{$b.path4}" download="">Certificate</a></td></tr>
			{/foreach}	
			
	</table>

</body>
</html>
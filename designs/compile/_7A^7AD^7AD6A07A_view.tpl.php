<?php /* Smarty version 2.6.26, created on 2019-09-21 08:53:47
         compiled from view.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="web/css/bootstrap.css">
	<title></title>
</head>
<body>
	<table class="table">
		<tr><th>Id</th><th>Register No</th><th>Name</th><th>Address</th><th>Pin Code</th><th>District</th><th>City</th><th>Phone no</th></tr>
		<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b']):
?>
		<tr>
			<td><?php echo $this->_tpl_vars['b']['id']; ?>
</td>
			<td><?php echo $this->_tpl_vars['b']['regno']; ?>
</td>
			<td><?php echo $this->_tpl_vars['b']['restname']; ?>
</td>
			<td><?php echo $this->_tpl_vars['b']['address']; ?>
</td>
			<td><?php echo $this->_tpl_vars['b']['pincode']; ?>
</td>
			<td><?php echo $this->_tpl_vars['b']['district']; ?>
</td>
			<td><?php echo $this->_tpl_vars['b']['city']; ?>
</td>
			<td><?php echo $this->_tpl_vars['b']['contactno']; ?>
</td>	
			<td><a href="approve.php?v=<?php echo $this->_tpl_vars['b']['lkey']; ?>
"><Button class="btn btn-outline-success btn-sm">Approve</Button></a></td>
			<td><a href="reject.php?v=<?php echo $this->_tpl_vars['b']['lkey']; ?>
"><Button class="btn btn-outline-danger btn-sm">Reject</Button></a></td>
			<?php endforeach; endif; unset($_from); ?>	
		</tr>	
	</table>
</body>
</html>
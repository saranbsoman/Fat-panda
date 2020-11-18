<?php /* Smarty version 2.6.26, created on 2020-01-04 06:52:33
         compiled from menuview.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="web/css/bootstrap.css">
	<title></title>
</head>
<body>
		<table border="2" class="table">
		<tr><th>Category</th><th>Name</th><th>Amount</th><th>Details</th></tr>
	<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b']):
?>
	<tr><td><?php echo $this->_tpl_vars['b']['category']; ?>
</td>
	<td><?php echo $this->_tpl_vars['b']['name']; ?>
</td>
	<td><?php echo $this->_tpl_vars['b']['amount']; ?>
</td>
	<td><?php echo $this->_tpl_vars['b']['details']; ?>
</td>
	<td><?php echo $this->_tpl_vars['b']['image']; ?>
</td>
	<td><a href="deletemenu.php?v=<?php echo $this->_tpl_vars['b']['mkey']; ?>
"><Button class="btn btn-outline-danger btn-sm">Delete</Button></a></td>
	<td><a href="menuedit.php?v=<?php echo $this->_tpl_vars['b']['mkey']; ?>
"><Button class="btn btn-outline-success btn-sm">Update</Button></a></td>			
	<?php endforeach; endif; unset($_from); ?>
</body>
</html>
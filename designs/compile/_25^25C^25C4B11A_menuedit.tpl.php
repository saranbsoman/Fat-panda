<?php /* Smarty version 2.6.26, created on 2019-10-19 12:17:02
         compiled from menuedit.tpl */ ?>
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

	<?php $_from = $this->_tpl_vars['update']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b']):
?>
	<input type="hidden" name="hide" value="h">
	<tr>
		<td>Category</td><td><input type="radio" name="cat" value="Veg" >Veg
							<input type="radio" name="cat" value="Non-Veg" checked="checked">Non-Veg</td>
	</tr>
	<tr><td>Name</td><td><input type="text" name="name" value="<?php echo $this->_tpl_vars['b']['name']; ?>
" required=""></td></tr>
	<tr><td>Amount</td><td><input type="text" name="amt" value="<?php echo $this->_tpl_vars['b']['amount']; ?>
" required=""></td></tr>
	<tr><td>Details</td><td><input type="text" name="det" value="<?php echo $this->_tpl_vars['b']['details']; ?>
" required=""></td></tr>
		
	<tr><td><input type="submit" value="update"></td></tr>
	<?php endforeach; endif; unset($_from); ?>
	</table>
	</form>
	</center>	


</body>
</html>
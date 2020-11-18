<?php /* Smarty version 2.6.26, created on 2019-09-29 13:46:00
         compiled from adminfileview.tpl */ ?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="web/css/bootstrap.css">

	<title></title>
</head>
<body>
	<table class="table">
		<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b']):
?>
		
			<tr><td>Panchayath License</td><td><a href="<?php echo $this->_tpl_vars['b']['path']; ?>
"  target="_blank">Licence</a></td></tr>
			<tr><td>Food Safety</td><td><a href="<?php echo $this->_tpl_vars['b']['path1']; ?>
" >Food safety</a></td></tr>
			<tr><td>Quality Management</td><td><a href="<?php echo $this->_tpl_vars['b']['path2']; ?>
" download="">Quality Management</a></td></tr>
			<tr><td>ISO certificate</td><td><a href="<?php echo $this->_tpl_vars['b']['path3']; ?>
" download="">ISO</a></td></tr>
			<tr><td>Pollution Certificate</td><td><a href="<?php echo $this->_tpl_vars['b']['path4']; ?>
" download="">Certificate</a></td></tr>
			<?php endforeach; endif; unset($_from); ?>	
			
	</table>

</body>
</html>
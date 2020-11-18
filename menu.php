<?php
include_once("classes/userclass.php");
include_once("settings/settings.php");
$obj=new userclass();
$rkey=$_GET['v'];
session_start();
if(isset($_COOKIE['login'])&&($_COOKIE['login'])==1)
{
$fid=$_COOKIE["lkey"];

	$obj->staffmenuadd($rkey);	
												

// $smartyObj->display('restheader.tpl');
// $smartyObj->display('menu.tpl');
// $smartyObj->display('restfooter.tpl');
}
else
{
	header("location:loginindex.php");
}
?>

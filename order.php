<?php
include_once("classes/userclass.php");
include_once("settings/settings.php");
$obj=new userclass();
session_start();
if(isset($_COOKIE['login'])&&($_COOKIE['login'])==1)
{
	$rrkey=$_GET['v'];
	$lkey=$_COOKIE['lkey'];
	$s=$obj->orderview($lkey,$rrkey);
	$smartyObj->assign('view4',$s);
	$smartyObj->display('order.tpl');
}
else
{
	header("location:loginindex.php");
}
?>
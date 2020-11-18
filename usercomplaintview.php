<?php
include_once("classes/userclass.php");
include_once("settings/settings.php");
$obj=new userclass();
session_start();
if(isset($_COOKIE['login'])&&($_COOKIE['login'])==1)
{
	$id=$_COOKIE['lkey'];	
	$s=$obj->usercomplaintview($id);
	$smartyObj->assign('view',$s);
	
//$smartyObj->display('userheader.tpl');
$smartyObj->display('usercomplaintview.tpl');
//$smartyObj->display('userfooter.tpl');
}
else
{
	header("location:loginindex.php");
}
?>
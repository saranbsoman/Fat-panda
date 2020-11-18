<?php
include_once("classes/userclass.php");
include_once("settings/settings.php");
$obj=new userclass();
session_start();
if(isset($_COOKIE['login'])&&($_COOKIE['login'])==1)
{
$s=$obj->filedisp();
$smartyObj->assign('view',$s);
//$smartyObj->display('adminheader.tpl');
$smartyObj->display('adminfileview.tpl');
//$smartyObj->display('adminfooter.tpl');
}
else
{
	header("location:loginindex.php");
}
?>
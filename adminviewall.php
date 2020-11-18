<?php
include_once("classes/userclass.php");
include_once("settings/settings.php");

$obj=new userclass();
session_start();
if(isset($_COOKIE['login'])&&($_COOKIE['login'])==1)
{
$s=$obj->rejectedview();
$smartyObj->assign('view',$s);
$ss=$obj->count();
$smartyObj->assign('count',$ss);
$smartyObj->display('adminheader.tpl');
$smartyObj->display('adminviewall.tpl');
$smartyObj->display('adminfooter.tpl');
}
else
{
	header("location:loginindex.php");
}
?>
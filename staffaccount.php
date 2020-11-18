<?php
include_once("classes/userclass.php");
include_once("settings/settings.php");
$obj=new userclass();
session_start();
if(isset($_COOKIE['login'])&&($_COOKIE['login'])==1)
{
$key=$_COOKIE['lkey'];
$s=$obj->staffview($key);	
$smartyObj->assign("view",$s);
$smartyObj->display('staffaccount.tpl');
}
else
{
	header("location:loginindex.php");
}
?>
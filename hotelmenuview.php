<?php
include_once("classes/userclass.php");
include_once("settings/settings.php");
$obj=new userclass();
session_start();
if(isset($_COOKIE['login'])&&($_COOKIE['login'])==1)
{
$fid=$_COOKIE['lkey'];
$s=$obj->hotelmenudisp($fid);
$smartyObj->assign('view',$s);
$smartyObj->display('menuview.tpl');
}
else
{
	header("location:loginindex.php");
}
?>
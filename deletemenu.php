<?php
include_once("classes/userclass.php");
include_once("settings/settings.php");
$obj=new userclass();
session_start();
if(isset($_COOKIE['login'])&&($_COOKIE['login'])==1)
{
$id=$_GET["v"];
$obj->deletemenu($id);
$smartyObj->display('menuview.tpl');
}
else
{
	header("location:loginindex.php");
}
?>
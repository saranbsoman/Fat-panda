<?php
include_once("classes/userclass.php");
include_once("settings/settings.php");
$obj=new userclass();
session_start();
if(isset($_COOKIE['login'])&&($_COOKIE['login'])==1)
{
$smartyObj->display('uservisit.tpl');
}
else
{
	header("location:loginindex.php");
}
?>
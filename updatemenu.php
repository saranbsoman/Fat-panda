<?php
include_once("classes/userclass.php");
include_once("settings/settings.php");
$obj=new userclass();
session_start();
if(isset($_COOKIE['login'])&&($_COOKIE['login'])==1)
{
$id=$_GET["v"];
$obj->updatemenu($id);
$smartyObj->display('menu.tpl');

}
else
{
	header("location:loginindex.php");
}
?>
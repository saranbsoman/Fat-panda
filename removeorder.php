<?php
include_once("classes/userclass.php");
include_once("settings/settings.php");
$obj=new userclass();
session_start();
if(isset($_COOKIE['login'])&&($_COOKIE['login'])==1)
{
	$okey=$_GET['v'];
	$lkey=$_COOKIE['lkey'];
	$s=$obj->removeorder($okey,$lkey);

}
else
{
	header("location:loginindex.php");
}
?>
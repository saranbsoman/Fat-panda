<?php
include_once("classes/userclass.php");
include_once("settings/settings.php");
$obj=new userclass();
session_start();
if(isset($_COOKIE['login'])&&($_COOKIE['login'])==1)
{
$fid=$_COOKIE["lkey"];
if(isset($_POST["hide"])AND($_POST["hide"])=="h")
{
		$obj->addoffer($_FILES['offer'],$fid);	
												
}

$smartyObj->display('restheader.tpl');
$smartyObj->display('offer.tpl');
$smartyObj->display('restfooter.tpl');
}
else
{
	header("location:loginindex.php");
}
?>
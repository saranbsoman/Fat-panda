<?php
include_once("classes/userclass.php");
include_once("settings/settings.php");
$obj=new userclass();
session_start();
if(isset($_COOKIE['login'])&&($_COOKIE['login'])==1)
{
	$fid=$_COOKIE['lkey'];
	if(isset($_POST["hide"])AND($_POST["hide"])=="h")
	{
	
		$obj->restimageupload($_FILES,$fid);	
								
	}

$smartyObj->display('restimageupload.tpl');

}
else
{
	header("location:loginindex.php");
}
?>
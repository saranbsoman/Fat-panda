<?php
include_once("settings/settings.php");
include_once("classes/userclass.php");
$obj=new userclass();
session_start();
	if(isset($_COOKIE['login'])&&($_COOKIE['login'])==1)
	{
$login=$_COOKIE['lkey'];
if(isset($_POST['hide']) AND isset($_POST['hide'])=="h")
{

	//$a=trim($_POST['name']);
	$obj->Insert_multile_file($_FILES,$login);
	
}
$smartyObj->display("formupload.tpl");
}
?>

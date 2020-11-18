<?php
include_once("classes/userclass.php");
include_once("settings/settings.php");
$obj=new userclass();
session_start();
	if(isset($_COOKIE['login'])&&($_COOKIE['login'])==1)
	{
		if(isset($_POST['hide']) AND ($_POST['hide']=='h'))
		{
			$amt=$_GET['v'];
			$mkey=$_GET['w'];
			$key=$_COOKIE['lkey'];
			$name=trim($_POST["name"]);
			$cno=trim($_POST["cno"]);
			$cvv=trim($_POST["cvv"]);
			$m=trim($_POST["m"]);
			$y=trim($_POST["y"]);

			$obj->cardupload($key,$name,$cno,$cvv,$m,$y,$amt,$mkey);
			
		}
	}		
$smartyObj->display('payment.tpl');
?>
<?php 
include_once("classes/userclass.php");
include_once("settings/settings.php");
$obj=new userclass();
session_start();
//echo "hello";exit;
	
		//echo "hello";exit;
if(isset($_POST['hide'])AND($_POST['hide']=='h'))
{
	if(isset($_POST['mail'])AND($_POST['mail'])!=null)
	{
		if(isset($_POST['pass'])AND($_POST['pass'])!=null)
		{
			$mail=trim($_POST['mail']);
			$pass=trim($_POST['pass']);
			$obj->login($mail,$pass);
		}
		else echo"<script>alert('password field is mandatory')</script>";
	}
	else echo"<script>alert('email field is mandatory')</script>";
}
$smartyObj->display('loginindex.tpl');


?>
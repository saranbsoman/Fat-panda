<?php 
include_once("classes/userclass.php");
include_once("settings/settings.php");
$obj=new userclass();
$lkey=$_COOKIE['lkey'];
session_start();
if(isset($_COOKIE['login'])&&($_COOKIE['login'])==1)
	{
if(isset($_POST['hide'])AND($_POST['hide']=='h'))
{
	if(isset($_POST['opass'])AND($_POST['opass'])!=null)
	{
		// if(isset($_POST['opass'])AND($_POST['opass'])!=null)
		// {
		if(isset($_POST['npass'])AND($_POST['npass'])!=null)
			{
				if(isset($_POST['cpass'])AND($_POST['cpass'])!=null)
				{
					$opass=trim($_POST['opass']);
					// $opass=trim($_POST['opass']);
					$npass=trim($_POST['npass']);
					$cpass=trim($_POST['cpass']);
					$obj->changepassword($opass,$npass,$cpass,$lkey);
				}
				else echo"<script>alert('password field is mandatory')</script>";
			}
			else echo"<script>alert('password field is mandatory')</script>";
		// }
	}
}
$smartyObj->display('changepassword.tpl');
}

?>
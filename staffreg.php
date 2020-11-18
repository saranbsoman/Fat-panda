<?php
include_once("classes/userclass.php");
include_once("settings/settings.php");
$obj=new userclass();
session_start();


 if(isset($_COOKIE['login'])&&($_COOKIE['login'])==1)
 {
// echo "hello";exit;
if(isset($_POST["hide"])AND($_POST["hide"])=='h')
{//echo "hello";exit;
	if(isset($_POST["name"])AND($_POST["name"])!=null)
	{
		if(isset($_POST["add"])AND($_POST["add"])!=null)
		{
			if(isset($_POST["hid"])AND($_POST["hid"])!=null)
			{
				if(isset($_POST["no"])AND($_POST["no"])!=null)
				{
					if(isset($_POST["gender"])AND($_POST["gender"])!=null)
					{
						if(isset($_POST["age"])AND($_POST["age"])!=null)
						{
							if(isset($_POST["mail"])AND($_POST["mail"])!=null)
							{
								if(isset($_POST["pass"])AND($_POST["pass"])!=null)
								{
									$name=trim($_POST["name"]);
									$no=trim($_POST["no"]);
									$add=trim($_POST["add"]);
									$gender=trim($_POST["gender"]);
									$hid=trim($_POST["hid"]);
									$age=trim($_POST["age"]);
									$mail=trim($_POST["mail"]);
									$pass=trim($_POST["pass"]);
									$obj->staffreg($name,$add,$hid,$no,$gender,$age,$_FILES['img'],$mail,$pass);	
								}
								else echo"<script>alert('password field is mandatory')</script>";	
							}
							else echo"<script>alert('email field is mandatory')</script>";
						}
						else echo"<script>alert('age field is mandatory')</script>";
					}
					else echo "<script>alert('gender is mandatory')</script>";
				}
				else echo "<script>alert('number is mandatory')</script>";	
			}
			else echo "<script>alert('hotelname is mandatory')</script>";
		}
		else echo "<script>alert('address is mandatory')</script>";
	}
	else echo "<script>alert('name is mandatory')</script>";
 }


$s=$obj->restview();
$smartyObj->assign('view',$s);
$smartyObj->display('staffreg.tpl');

}
else
{
	header("location:loginindex.php");
}
?>
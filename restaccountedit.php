<?php
include_once("classes/userclass.php");
include_once("settings/settings.php");
$obj=new userclass();

session_start();

if(isset($_COOKIE['login'])&&($_COOKIE['login'])==1)
{

  
$key=$_COOKIE['lkey'];
$s=$obj->restprofileview($key);	
$smartyObj->assign("view",$s);
if(isset($_POST['hide'])AND($_POST['hide'])=="h")
{ //echo "hi";exit;
	if(isset($_POST['name'])AND($_POST['name'])!=null)
	{
		if(isset($_POST['add'])AND($_POST['add'])!=null)
		{
			if(isset($_POST['pin'])AND($_POST['pin'])!=null)
			{
				if(isset($_POST['cno'])AND($_POST['cno'])!=null)
				{
					if(isset($_POST['dist'])AND($_POST['dist'])!=null)
					{
						if(isset($_POST['city'])AND($_POST['city'])!=null)
						{
							if(isset($_POST['reser'])AND($_POST['reser'])!=null)
							{
								if(isset($_POST['seat'])AND($_POST['seat'])!=null)
								{
									if(isset($_POST['park'])AND($_POST['park'])!=null)
								{
									$name=trim($_POST['name']);
									$cno=trim($_POST['cno']);
									$pin=trim($_POST['pin']);
									$add=trim($_POST['add']);
									$city=trim($_POST['city']);
									$dist=trim($_POST['dist']);
									$reser=trim($_POST['reser']);
									$seat=trim($_POST['seat']);
									$park=trim($_POST['park']);
									$s=$obj->restaccountedit($name,$add,$pin,$dist,$city,$cno,$reser,$seat,$park,$_FILES['img'],$key);
									$smartyObj->assign("view",$s);
								}
							}
							}
						}
					}				
				}
				else echo"<script>alert('password field is mandatory')</script>";
			}
			else echo"<script>alert('password field is mandatory')</script>";
		}
	}
}
$smartyObj->display('restaccountedit.tpl');
}
else
{
	header("location:loginindex.php");
}
?>
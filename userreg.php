<?php
include_once("classes/userclass.php");
include_once("settings/settings.php");
$obj=new userclass();

if(isset($_POST["hide"])AND($_POST["hide"])=="h")
{
	if(isset($_POST["name"])AND($_POST["name"])!=null)
	{
		if(isset($_POST["no"])AND($_POST["no"])!=null)
		{
			if(isset($_POST["pin"])AND($_POST["pin"])!=null)
			{
				if(isset($_POST["gender"])AND($_POST["gender"])!=null)
				{
					if(isset($_POST["mail"])AND($_POST["mail"])!=null)
					{
						if(isset($_POST["pass"])AND($_POST["pass"])!=null)
						{
							if(isset($_POST["cpass"])AND($_POST["cpass"])!=null)
							{
								$name=trim($_POST["name"]);
								$no=trim($_POST["no"]);
								$pin=trim($_POST["pin"]);
								$gender=trim($_POST["gender"]);
								$mail=trim($_POST["mail"]);
								$pass=trim($_POST["pass"]);
								$obj->userreg($name,$no,$pin,$gender,$_FILES['img'],$mail,$pass);	
							}
							else echo"<script>alert('confirm password field is mandatory')</script>";
						}
						else echo"<script>alert('password field is mandatory')</script>";
					}
					else echo "<script>alert('email is mandatory')</script>";
				}
				else echo "<script>alert('gender is mandatory')</script>";	
			}
			else echo "<script>alert('pincode is mandatory')</script>";
		}
		else echo "<script>alert('contact no is mandatory')</script>";
	}
	else echo "<script>alert('name is mandatory')</script>";
}
$smartyObj->display('userreg.tpl');

?>
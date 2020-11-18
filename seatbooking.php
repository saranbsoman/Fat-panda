<?php 
include_once("classes/userclass.php");
include_once("settings/settings.php");
$obj=new userclass();
$key=$_COOKIE['lkey'];
if(isset($_POST['hide']) AND ($_POST['hide']=='h'))
{
	$hkey=$_GET['v'];
		//echo $hkey;exit;
			if(isset($_POST['email'])AND ($_POST['email'])!=null)
			{
				if(isset($_POST['contact'])AND ($_POST['contact'])!=null)
				{
					if(isset($_POST['date'])AND ($_POST['date'])!=null)
				{
					if(isset($_POST['time'])AND ($_POST['time'])!=null)
				{
					if(isset($_POST['password'])AND ($_POST['password'])!=null)
					{
						if(isset($_POST['seats1']))
						{
						 	if(isset($_POST['seats']))
						 {
							if(isset($_POST['message']))
							{

								$seats=trim($_POST['seats1']);
								//echo $seats;exit;
										if($seats=='other')
										{

											$email=trim($_POST['email']);
										$contact=trim($_POST['contact']);
										$date=trim($_POST['date']);
										$time=trim($_POST['time']);
										$password=trim($_POST['password']);
											$seats=trim($_POST['seats']);
											$message=trim($_POST['message']);
											$obj->seatbooking($email,$contact,$date,$time,$password,$seats,$message,$key,$hkey);
										}
										else
										{
											$email=trim($_POST['email']);
										$contact=trim($_POST['contact']);
										$date=trim($_POST['date']);
										$time=trim($_POST['time']);
										$password=trim($_POST['password']);
											$seats=trim($_POST['seats1']);
											$message=trim($_POST['message']);
											$obj->seatbooking($email,$contact,$date,$time,$password,$seats,$message,$key,$hkey);
										}


										
										
										
									}
							
							}
						}
						
					}
				}
			}
					
				}	
				
			}
		
		
	}	


$smartyObj->display('seatbooking.tpl');
//$smartyObj->display('restfooter.tpl');

?>
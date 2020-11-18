<?php
include_once("classes/userclass.php");
include_once("settings/settings.php");
$obj=new userclass();
$id=$_COOKIE["lkey"];
$obj->deactivate($id);
$smartyObj->display('index.tpl');
?>
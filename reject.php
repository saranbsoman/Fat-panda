<?php
include_once("classes/userclass.php");
include_once("settings/settings.php");
$obj=new userclass();
$id=$_GET["v"];
$obj->reject($id);
$smartyObj->display('view.tpl');
?>
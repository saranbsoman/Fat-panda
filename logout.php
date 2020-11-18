<?php
session_unset();
session_destroy();
setcookie('login',null);
header("Location:index.php");
?>
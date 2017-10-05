<?php
define("__CONFIG__",true);
require_once("conf/config.php");
forceLogin();


echo $_SESSION['user_id']. " is your user id.";
exit();


?>
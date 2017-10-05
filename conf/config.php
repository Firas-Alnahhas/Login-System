<?php

if(!defined('__CONFIG__')){
    exit("You do not have promission to access the file!");
}


//our config here....

//sessions are always turned on
if(!isset($_SESSION)){
    session_start();
}

/*
//including our php file for accessing the db
require_once("DB.php");
//for preventing sql injection...
require_once("filter.php");
$connection=DB::getConnection();
*/
$dbhost="localhost";
$dbuser="root";
$dbpassword="empoleon_10";

$connection=mysqli_connect($dbhost,$dbuser,$dbpassword);
if(!$connection){
    die("couldn't connect to the database!");
}

$db=mysqli_select_db($connection,"login_system");

?>
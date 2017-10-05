<?php
define("__CONFIG__",true);
require_once("conf/config.php");
forceLogin();

$userId=$_SESSION['user_id'];
$userInfo=mysqli_query($connection,"select email,reg_time from users where user_id='$userId' limit 1;");

if(mysqli_affected_rows($connection)==1){
    //user is perfectly fine...
    $info=mysqli_fetch_array($userInfo,MYSQLI_NUM);

}

else{
    //despite of forceLogin() which will check if the user is logged in but what if his info was deleted from teh databse like for example the user was banned, so we want him to logout 
    header("Location: logout.php");
    exit();//for safe only.
}


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Profile Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
                integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
                crossorigin="anonymous"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
                integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
                crossorigin="anonymous"></script>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
              integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"/>



    </head>
    <body>

        <div class="container" style="margin-top:200px">
        <h2>Dashboard</h2>
            <br/>
        <div class="alert alert-success">Welcome <?php
            echo $info[0].", Your registeration date is: ".$info[1];
            ?>
    </div>
            <a href="logout.php">Logout</a>
        </div>
    </body>
    </html>

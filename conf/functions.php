<?php

function forceLogin(){

    if(isset($_SESSION['user_id'])){
        //user allowed here...
    }
    else{
        //user not allowed here....
        header("Location: login-form.php");
    }

}
function forceDashboard(){
    if(isset($_SESSION['user_id'])){
        //user already loged in
        header("Location: dashboard.php");
    }
    else{

    }
}



?>
<?php

define("__CONFIG__",true);
require_once("../conf/config.php");



if($_SERVER['REQUEST_METHOD']=='POST'){

    //always return json object
    header("Content-Type:application/json");


    $email=mysqli_real_escape_string($connection,$_POST['email']);
    $firstName=mysqli_real_escape_string($connection,$_POST['firstName']);

    $password=mysqli_real_escape_string($connection,$_POST['password']);
    //$password=password_hash($password,PASSWORD_DEFAULT);




    $checkUserExist=mysqli_query($connection,"select user_id,password from users where email= '$email' limit 1");

    if(mysqli_affected_rows($connection)==1){
        //means the user does exist

        $user=mysqli_fetch_array($checkUserExist,MYSQLI_NUM);
        if(password_verify($password,$user[1])){
            //password match, login the user to his profile
            $_SESSION['user_id']=$user[0];
            
            $data['redirect']="dashboard.php";
            echo json_encode($data);
            exit();
            
        }
        else{
            $data=array("error"=>"Password incorrect!");
            echo json_encode($data);
            exit();
        }

    }
    else{
        //couldn't find the email
        $data=array("error"=>"Email was not found!");
        echo json_encode($data);
        exit();
    }


}
else{
    //something like exit,or redirect the user....
    $data=array("error"=>"post method wasn't used!");
    echo json_encode($data);
}




?>
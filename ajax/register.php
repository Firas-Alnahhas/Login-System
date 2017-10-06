<?php

define("__CONFIG__",true);
require_once("../conf/config.php");



if($_SERVER['REQUEST_METHOD']=='POST'){

    //always return json object
    header("Content-Type:application/json");



    //some validation goes here....make sure the user email doesn't exist

    $email=mysqli_real_escape_string($connection,$_POST['email']);
    $firstName=mysqli_real_escape_string($connection,$_POST['firstName']);
    $lastName=mysqli_real_escape_string($connection,$_POST['lastName']);
    $gender=($_POST['gender']=='M'?0:1);//0 for male and 1 for female
    $password=mysqli_real_escape_string($connection,$_POST['password']);
    $password=password_hash($password,PASSWORD_DEFAULT);



    $checkUserExist=mysqli_query($connection,"select user_id from users where email= '$email' limit 1");

    if(mysqli_affected_rows($connection)==1){
        //means the user does exist
        $data=array("error"=>"User email does exist!");
        echo json_encode($data);
        exit();
    }
    else{

        $res=mysqli_query($connection,"insert into users(password,email,firstName,lastName,gender) values('$password','$email','$firstName','$lastName','$gender')");

        //inserted successfully
        if(!$res){
            $data=array("error"=>mysqli_error($connection));
            echo json_encode($data);
            exit();
        }
        
        $data=array("message"=>"User Registered Successfully. redirecting to login page.....",
                   "redirect"=>"login-form.php");
        echo json_encode($data);
        exit();


    }

    //pdo not working....
    /*

   $email=FILTER::Email($_POST['email']);//filter class is just like mysqli_real_escape_string of mysqli..

    $res=$connection->query("select * from users");


    while($row=$res->fetch()){
        echo $row['firstName']." ".$row['lastName']." ".$row['gender']." ".$row['email']." <br/>";
    }
    //to here it's all fine...

    $findEmail=$connection->prepare("select user_id from users where email= :email limit 1");//limit clause in sql means that if find a match stop searching right away no need to continue searching
    $findEmail->bindParam(":email",$email,PDO::PARAM_STR);
    $findEmail->execute();

    if($findEmail->rowCount()==1){
        //user exist
        $data=array("error"=>"User email does exist!");
        echo json_encode($data);

    }
    else{

        //user does not exist so, add it to the database and complete his registeration
        $firstName=FILTER::String($_POST['firstName']);
        $lastName=FILTER::String($_POST['lastName']);
        $password=password_hash($_POST['pass'],PASSWORD_DEFAULT);
        $gender=(isset($_POST['M'])?0:1);//0 for male and 1 for female

        $addUser=$connection->prepare("insert into users(password,email,firstName,lastName,gender) values(:password,:email,:firstName,:lastName,:gender)");
        $addUser->bindParam(':password',$password,PDO::PARAM_STR);
        $addUser->bindParam(':email',$email,PDO::PARAM_STR);
        $addUser->bindParam(':firstName',$firstName,PDO::PARAM_STR);
        $addUser->bindParam(':lastName',$lastName,PDO::PARAM_STR);
        $addUser->bindParam(':gender',$gender,PDO::PARAM_BOOL);
        $addUser->execute();

        $userId=$connection->lastInsertId();

        $_SESSION["user_id"]=(int) $userId;
        $data=array("message"=>"you have been successfully registered! your id is: ".$_SESSION["user_id"]);
        echo json_encode($data);


    }*/




}
else{
    //something like exit,or redirect the user....
    $data=array("error"=>"post method wasn't used!");
    echo json_encode($data);
}




?>
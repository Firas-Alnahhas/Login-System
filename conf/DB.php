<?php

if(!defined('__CONFIG__')){
    exit("You do not have promission to access the file!");
}


class DB
{

    protected static $conn;

    public function __construct()
    {
        
            self::$conn = new PDO("mysql:charset=utf8mb4;host=localhost;port:3306;dbname=login_system", "root", "empoleon_10");
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$conn->setAttribute(PDO::ATTR_PERSISTENT, false);
            //echo"successfully connected to database";
     
    }

    public static function getConnection(){

        if(!self::$conn){
            new DB();
        }

        return self::$conn;
    }
}

/*

to execute a query we could use:
$res=$con->query("query");
while($row=$res->fetch()){
echo $row['columns name'];
}

but when we want to use variables...then we use prepare and execute methods to prevent sql injection..
note: we replace the variables with a placeholder in the prepare method(the variable starts with ':')
*/


?>
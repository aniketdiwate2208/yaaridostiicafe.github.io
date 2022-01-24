<?php

//db connection
// login:
// 1)username
// 2)password

// db parameter
// 1) servername = "localhost" 
// 2) username = "root"
// 3) password =" "
// 4) db name = "test"

// 1) mysqli connect();
// 2) 4 parameter

$server_name = "localhost";
$username = "root";
$password = "";
$db ="test";

$con = mysqli_connect($server_name,$username,$password,$db);
if(!$con){
    echo "DB connection is not sucessful";
}
else
{ 
    echo"DB connection is successful";
}
?>


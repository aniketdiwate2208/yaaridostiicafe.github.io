<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "yaaridostii";

$con = mysqli_connect($servername,$username,$password,$db);

if(!$con)
{
    echo "DB Connection is not successful !!";
}
else
{
    echo "DB Connection successful !!";
}

?>
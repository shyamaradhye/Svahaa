<?php

$servername = "localhost";
$username = "root";
$dbpass = "";
$database = "login_db";

$con = mysqli_connect($servername,$username,$dbpass,$database);

if(!$con)
{
    die("Failed to connect!"); 
}



?>
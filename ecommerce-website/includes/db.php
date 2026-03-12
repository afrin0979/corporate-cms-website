<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "company_website";

$conn = mysqli_connect($host,$user,$password,$db);

if(!$conn){
die("Database Connection Failed");
}

?>
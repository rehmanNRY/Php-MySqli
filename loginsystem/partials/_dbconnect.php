<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginsystem";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
  die("error" . mysqli_connect_error());
}


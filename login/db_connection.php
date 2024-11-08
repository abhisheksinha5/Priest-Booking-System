<?php

$name= "localhost";
$user= "root";
$password = "";

$db_name = "project";
$_SESSION['success'] = "";
$conn = mysqli_connect($name, $user, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}

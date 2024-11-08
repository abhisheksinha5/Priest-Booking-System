<?php
session_start();
include "db_connection.php";
$_SESSION['success'] = '';

if (isset($_POST['username']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['username']);
	$pass = validate($_POST['password']);

	if (empty($username)) {
		header("Location: index.php?error=Username is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE username='$username' AND password='$pass'";


		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
	
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $pass) {

							// $username = mysqli_real_escape_string($_POST['username']);
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
							// echo $_SESSION['username'] = "You have logged in";
							$_SESSION['user_name'] = $username;
            	header("Location:../rituals/index.php");

		        exit();
            }else{
				header("Location: index.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorect User name or password");
	        exit();
		}
	}

}else{
	header("Location: index.php");
	exit();
}
?>

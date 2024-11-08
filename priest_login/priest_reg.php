<!-- PHP code for signup page -->
<?php
require '../login/db_connection.php';

if(isset($_POST["priest_register"])){
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$username = $_POST["username"];
	$city = $_POST["city"];
	$state = $_POST["state"];
	$zip = $_POST["zip"];
	$experience = $_POST["experience"];
	$specialization = $_POST["specialization"];
	$interview = $_POST["interview"];


	$filename = $_FILES['image']['name'];

	$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	$extensions_arr = array("jpg","jpeg","png","gif");

				$sql = "SELECT * FROM priests WHERE username='$username'";

				$res=mysqli_query($conn,$sql);

				if (mysqli_num_rows($res) > 0) {

					$row = mysqli_fetch_assoc($res);
					if ($username==isset($row['username']))
					{
						echo "<script> alert('username already exists'); </script>";

					}
				}
	else{
		if( in_array($imageFileType,$extensions_arr) ){

		// Upload files and store in database
		if(move_uploaded_file($_FILES["image"]["tmp_name"],'images/'.$filename)){
			// Image db insert sql
			$query = "INSERT into image(file_name,uploaded_on,status) values('$filename',now(),1)";
			if(mysqli_query($conn, $query)){
				echo 'Data inserted successfully';
			}
			else{
				echo 'Error: '.mysqli_error($conn);
			}
		}else{
			echo 'Error in uploading file - '.$_FILES['image']['name'].'<br/>';
		}
		}
		$query = "INSERT INTO priests VALUES('','$fname','$lname','$username','$city','$state','$zip','$experience','$specialization','$interview','$filename')";
		mysqli_query($conn,$query);
		echo "<script> alert('Successfully Registered As Priest'); </script>";
		
		exit();
	}


}

?>

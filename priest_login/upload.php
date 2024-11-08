<!-- PHP code for signup page -->
<?php
require '../login/db_connection.php';

if(isset($_POST['priest_register'])){

	$filename = $_FILES['image']['name'];

	// Select file type
	$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));

	// valid file extensions
	$extensions_arr = array("jpg","jpeg","png","gif");

	// Check extension
	if( in_array($imageFileType,$extensions_arr) ){

	// Upload files and store in database
	if(move_uploaded_file($_FILES["image"]["tmp_name"],'images/'.$filename)){
		// Image db insert sql
		$insert = "INSERT into image(file_name,uploaded_on,status) values('$filename',now(),1)";
		if(mysqli_query($conn, $insert)){
		  echo 'Data inserted successfully';
		}
		else{
		  echo 'Error: '.mysqli_error($conn);
		}
	}else{
		echo 'Error in uploading file - '.$_FILES['image']['name'].'<br/>';
	}
	}
}
?>

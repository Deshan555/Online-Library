<?php 
session_start(); 
include "Connector.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		
		$sql = "SELECT * FROM library_user WHERE SLTC_INDEX = '$uname' AND USER_ID = '$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['SLTC_INDEX'] === $uname && $row['USER_ID'] === $pass) {
            	//$_SESSION['user_name'] = $row['user_name'];
            	//$_SESSION['name'] = $row['name'];
            	//$_SESSION['id'] = $row['id'];
            	header("Location: ../Home.php");
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
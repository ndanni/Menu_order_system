<?php
	session_start();
	$message = "";

	$conn = mysqli_connect("localhost", "root", "", "project");

	if( isset($_POST["sign_in"])){
		$username = $_POST["username"];
		$password = $_POST["password"];

		if($username == ''){
			$message .= "Username Can not be empty";
			echo($message);
		}
		if($password == ''){
			$message .= "Password Can not be empty";
			echo($message);
		}

		if($message == ""){
			$query = "SELECT * FROM  site_owner WHERE username='$username' AND password='$password' ";
			$results = mysqli_query($conn, $query);
			$row = mysqli_fetch_assoc($results);

			$_SESSION['firstname'] = $row['first_name'];
			$_SESSION['email'] = $row['email'];
			header('location: executedOrders.php');
		}
	}





?>
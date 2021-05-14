<?php
	include 'connect.php';
	
	if(isset($_POST['reg'])){
		$email = $_POST['email'];
		$pwd = $_POST['pwd'];
		$re = $_POST['re'];

		$sql = "INSERT INTO `users` (`user_id`, `email`, `password`) VALUES (NULL, '$email', '$pwd');";
		$query = mysqli_query($conn, $sql);

		if($query){
			if($re == $pwd){
				header("Location: ../Views/login.php");
			}
		}
	}	
?>
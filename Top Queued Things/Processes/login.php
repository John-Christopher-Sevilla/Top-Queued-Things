<?php
	include 'connect.php';

	if(isset($_POST['login'])){
		session_start();

		$email = $_POST['email'];
		$pwd = $_POST['pwd'];

		$sql = "SELECT * FROM `users` WHERE `email` LIKE '$email' AND `password` LIKE '$pwd';"; 

		if($query = mysqli_query($conn, $sql)){
			$row = mysqli_fetch_array($query);
				$id = $row['id'];
				$name = $row['email'];

				$_SESSION['id'] = $id;
				$_SESSION['name'] = $name;

				header("Location: ../index.php");
		}
	}

?>
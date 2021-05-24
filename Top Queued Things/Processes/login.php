<?php
	include 'connect.php';

	if(isset($_POST['login'])){
		session_start();

		$email = $_POST['email'];
		$pwd = $_POST['pwd'];
		$pos = $_POST['pos'];

		$sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$pwd' AND `position` = '$pos';"; 

		if($query = mysqli_query($conn, $sql)){
			$row = mysqli_fetch_array($query);
				$id = $row['user_id'];
				$email = $row['email'];
				$pwd = $row['password'];
				$name = $row['fname'];
				$lname = $row['lname'];

				$_SESSION['id'] = $id;
				$_SESSION['email'] = $email;
				$_SESSION['name'] = $name;
				$_SESSION['lname'] = $lname;
			if($pos == 'B'){
				header("Location: ../index.php");
			}
			elseif ($pos == 'S') {
				header("Location: ../store.php");
			}
			else{
				echo "ERROR";
			}
		}else{
			echo "Email or Password Incorrect!";
		}
	}
?>
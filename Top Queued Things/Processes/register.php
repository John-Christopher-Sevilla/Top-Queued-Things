<?php
	include 'connect.php';
	
	if(isset($_POST['reg'])){
		$email = $_POST['email'];
		$pwd = $_POST['pwd'];
		$re = $_POST['re'];
		$pos = $_POST['pos'];
		$uname = $_POST['uname'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$age = $_POST['age'];
		$add = $_POST['add'];
		$cont_info = $_POST['cont_info'];

		$sql = "INSERT INTO `users` (`user_id`, `email`, `password`, `position`, `uname`, `fname`, `lname`, `age`, `address`, `cont_info`) VALUES (NULL, '$email', '$pwd', '$pos', '$uname', '$fname', '$lname', '$age', '$add', '$cont_info'); ";


		if(mysqli_query($conn, $sql)){
			if($re == $pwd){
				if($pos == 'B'){
					header("Location: ../Views/login.php");
				}
				elseif ($pos == 'S') {
					header("Location: ../Views/sellerLogin.php");
				}
				elseif ($pos == 'A') {
				header("Location: ../admin.php");
				}
				else{
					echo "ERROR";
				}
			}
		}
	}	
?>
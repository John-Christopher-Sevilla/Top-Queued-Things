<?php
	include 'connect.php';
	session_start();

	if(isset($_POST['out'])){
		$id = $_SESSION['id'];
		$title = $_POST['title'];
		$desc = $_POST['desc'];
		$qty = $_POST['qty'];
		$total = $_POST['total'];
		$price = $_POST['price'];
		$cat_id = $_POST['cat_id'];
		$status = $_POST['status'];

		$total1 = $price*$qty;

		$sql = "INSERT INTO `orders` (`order_id`, `item_id`, `cat_id`, `user_id`, `qty`, `total`, `status`) VALUES (NULL, '$title', '$cat_id', '$id', '$qty', '$total1', '$status');";

		if(mysqli_query($conn, $sql)){
			header("Location: ../Views/profile.php");
		}else{
			echo "ERROR" . mysqli_error($conn);
		}
	}
?>
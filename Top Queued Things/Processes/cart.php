<?php
	include 'connect.php';
	session_start();

	if(isset($_POST['cart'])){
		$id = $_SESSION['id'];
		$item_id = $_POST['item_id'];
		$cat_id = $_POST['cat_id'];
		$qty = $_POST['qty'];
		$status = $_POST['status'];

		$sql = "INSERT INTO `cart` (`cart_id`, `item_id`, `cat_id`, `user_id`, `qty`, `status`) VALUES (NULL, '$item_id', '$cat_id', '$id', '$qty', '$status');";

		if(mysqli_query($conn, $sql)){
			header("Location: ../Views/cart.php");
		}else{
			echo "ERROR " . mysqli_error($conn);
		}
	}
?>
<?php
	include 'connect.php';
	session_start();

	if(isset($_POST['sub'])){
		$id = $_SESSION['id'];
		$cat = $_POST['cat'];
		$name = $_POST['iName'];
		$desc = $_POST['iDesc'];
		$img = $_FILES['file'];
		$price = $_POST['price'];
		$status = $_POST['status'];

		function getRandom($length){
        
	        $str = 'abcdefghijklmnopqrstuvwzyz';
	        $str1= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	        $str2= '0123456789';
	        $shuffled = str_shuffle($str);
	        $shuffled1 = str_shuffle($str1);
	        $shuffled2 = str_shuffle($str2);
	        $total = $shuffled.$shuffled1.$shuffled2;
	        $shuffled3 = str_shuffle($total);
	        $result= substr($shuffled3, 0, $length);

	        return $result; 
	    }

	    $code = getRandom(5);

	    $pname = rand(1000,10000) . "-" . $img['name'];
		$tname = $img['tmp_name'];

		$upload_dir = "../Uploads/". $pname;
		move_uploaded_file($tname, $upload_dir);

		$sql = "INSERT INTO `items` (`item_id`, `seller_id`, `cat_id`, `item_name`, `item_desc`, `item_img`, `item_code`, `item_price`, `status`) VALUES (NULL, '$id', '$cat', '$name', '$desc', '$pname', '$code', '$price', '$status');";

		if(mysqli_query($conn, $sql)){
			header("Location: ../store.php");
		}else{
			echo "ERROR " . mysqli_error($conn);
		}
	}

?>
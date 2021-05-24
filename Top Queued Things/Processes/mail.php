<?php
	include 'connect.php';

	if(isset($_POST['send'])){
		$to = $_POST['to'];
		$from = $_POST['from'];
		$field = $_POST['field'];
		$attach = $_FILES['attach'];

		$pname = rand(1000,10000) . "-" . $attach['name'];
		$tname = $attach['tmp_name'];

		$upload_dir = "../Uploads/". $pname;
		move_uploaded_file($tname, $upload_dir);

		$sql = "INSERT INTO `mails` (`mail_id`, `sent_to`, `sent_from`, `body`, `attach`) VALUES (NULL, '$to', '$from', '$field', '$pname');";

		if(mysqli_query($conn, $sql)){
			header("Location: ../Views/profile.php");
		}else{
			echo "ERROR";
		}
	}

?>
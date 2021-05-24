<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../Templates/style.css">
	<link rel="stylesheet" type="text/css" href="../Templates/profile.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<title>Top Queued Things</title>
	
</head>
<body>
<header class="p-3 bg-dark text-white">

  	<div class="container">

    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <div class="logo">
      	<div class= "d-flex flex-wrap align-items-left">
      	<h2>Top Queued Things</h2>
      	</div>
  	</div>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="../index.php" class="nav-link px-2 text-secondary">Home</a></li>
        <li><a href="#Featured" class="nav-link px-2 text-white">Features</a></li>


      </ul>
		<form method="POST" action="#" style="padding-right: 200px;">
	        <input type="search" class="form-control" placeholder="Search..." style="float: left;">
	        <input type="submit" name="search" value="Search" class="btn btn-outline-warning" style="float: right;">
     	</form>
      <a href="cart.php"><svg xmlns="http://www.w3.org/2000/svg"  width="30" height="30" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16" > 
  		<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path></a>
		</svg>
	<?php
			session_start();
			
			if(isset($_SESSION['name'])){
				$id = $_SESSION['id'];
	?>
	 		<div class="text-end ses_start">
				<h5>Hello <?php echo $_SESSION['name'] . " " . $_SESSION['lname']; ?></h5>
				<a href="profile.php" class="btn btn-outline-warning">Profile</a>
				<a href="../Processes/logout.php" class="btn btn-outline-warning">Logout</a>
			</div>
	<?php
		}else{
	?>
		<div class="text-end ses_start">
			<h5>Hello Guest</h5>
			<a href="Views/login.php" class="btn btn-outline-warning">Login</a>
			<a href="Views/register.php" class="btn btn-outline-warning">Register</a>
		</div>
	<?php
		}

	?>
			</a>
		</div>
	</div>
</header>
<div class="content" align="center">
	<div class="tab">
		<button class="tablinks" onclick="openTab(event, 'Profile')">Profile</button>
		<button class="tablinks" onclick="openTab(event, 'Messaging')">Messaging</button>
		<button class="tablinks" onclick="openTab(event, 'MyOrder')">My Orders</button>
	</div>

	<!-- Tab content -->
	<div id="Profile" class="tabcontent">
	  	<h3>Profile</h3>
	  	<table class="table table-secondary">
	  		<thead>
	  			<tr>
	  				<th scope="col">
	  					Username
	  				</th>
	  				<th scope="col">
	  					First Name
	  				</th>
	  				<th scope="col">
	  					Last Name
	  				</th>
	  				<th scope="col">
	  					Address
	  				</th>
	  				<th scope="col">
	  					Age
	  				</th>
	  				<th scope="col">
	  					E-mail Address
	  				</th>
	  				<th scope="col">
	  					Contact Number
	  				</th>
	  				<th colspan="2">
	  					Options
	  				</th>
	  			</tr>
	  		</thead>
	  		<?php
	  			include '../Processes/connect.php';
	  			$id = $_SESSION['id'];

	  			$sql = "SELECT * FROM `users` WHERE `user_id` = '$id';";
	  			$query = mysqli_query($conn, $sql);

	  			while ($row = mysqli_fetch_array($query)) {
	  				$user = $row['uname'];
	  				$fname = $row['fname'];
	  				$lname = $row['lname'];
	  				$email = $row['email'];
	  				$age = $row['age'];
	  				$add = $row['address'];
	  				$info = $row['cont_info'];
	  		?>
	  		<tbody>
	  			<tr>
	  				<td>
	  					<?php echo $user; ?>
	  				</td>
	  				<td>
	  					<?php echo $fname; ?>
	  				</td>
	  				<td>
	  					<?php echo $lname; ?>
	  				</td>
	  				<td>
	  					<?php echo $add; ?>
	  				</td>
	  				<td>
	  					<?php echo $age; ?>
	  				</td>
	  				<td>
	  					<?php echo $email; ?>
	  				</td>
	  				<td>
	  					<?php echo $info; ?>
	  				</td>
	  				<td>
	  					<a href="#" class="btn btn-link">Edit</a>
	  				</td>
	  			</tr>
	  		</tbody>
	  		<?php
	  			}
	  		?>
	  	</table>
	</div>

	<div id="Messaging" class="tabcontent" align="left">
	  	<h3>Messaging</h3>
	  	<div class="menu">
			<ul>
				<li>
					<a href="#" onclick="openMsg(), closeInbox(), closeSent()"><?php $title = 'Create Message';?>Create Message</a>
				</li>
				<li>
					<a href="#" onclick="openInbox(), closeMsg(), closeSent()">Inbox</a>
				</li>
				<li>
					<a href="#" onclick="openSent(), closeInbox(), closeMsg()">Sent</a>
				</li>
			</ul>
		</div>
		<br>
		<div class="email" id="email">
			<form action="../Processes/mail.php" method="POST" enctype="multipart/form-data">
				<div class="msg" id="msg">
					<div class="msg_head">
						<div class="msg_head_title">
							<h4><?php print_r($title); ?></h4>
						</div>
						<div class="msg_title">
							<label>To:</label>
							<input type="email" name="to" required="" value="<?php if(isset($_POST['rep'])){echo $from;} ?>"><br>
							<label hidden="">From:</label>
							<input hidden="" type="text" name="from" value="<?php echo $id ?>">
						</div>
					</div>
					<div class="msg_body">
						<label>Message Body:</label><br>
						<textarea wrap="" cols="50" rows="5" name="field"></textarea><br>
						<input type="file" name="attach">
					</div>
					<div class="msg_foot">
						<input type="submit" name="send" value="Send">
						<input type="submit" name="close" value="Close" onclick="closeMsg()">
					</div>
				</div>
			</form>
		</div>
		<div class="inbox" id="inbox">
			<table class="table table-secondary">
		  		<thead>
		  			<tr>
		  				<th scope="col">
		  					From
		  				</th>
		  				<th scope="col">
		  					Body
		  				</th>
		  				<th scope="col">
		  					Attachment
		  				</th>
		  				<th scope="col" colspan="2">
		  					Options
		  				</th>
		  			</tr>
		  		</thead>
		  		<?php
		  			include '../Processes/connect.php';
		  			$email = $_SESSION['email'];

		  			$sql = "SELECT a.sent_to, b.email, a.body, a.attach FROM `mails` a JOIN `users` b ON a.sent_from = b.user_id AND a.sent_to = '$email';";
		  			$query = mysqli_query($conn, $sql);

		  			while($row = mysqli_fetch_array($query)){
		  				$to = $row['sent_to'];
		  				$from = $row['email'];
		  				$body = $row['body'];
		  				$attach = $row['attach'];
		  		?>
		  		<tbody>
		  			<tr>
		  				<td>
		  					<?php echo $from; ?>
		  				</td>
		  				<td>
		  					<?php echo $body; ?>
		  				</td>
		  				<td>
		  					<img src="../Uploads/<?=$attach?>" alt="attached image" width="100" height="100">
		  				</td>
		  				<td>
		  					<a href="#" name="rep" class="btn btn-link" onclick="openMsg(), closeInbox()">Reply</a>
		  				</td>
		  				<td>
		  					<a href="#" class="btn btn-link">Delete</a>
		  				</td>
		  			</tr>
		  		</tbody>
		  		<?php
		  			}
		  		?>
		  	</table>
		</div>
		<div class="sent" id="sent">
			<table class="table table-secondary">
		  		<thead>
		  			<tr>
		  				<th scope="col">
		  					To
		  				</th>
		  				<th scope="col">
		  					Body
		  				</th>
		  				<th scope="col">
		  					Attachment
		  				</th>
		  				<th scope="col">
		  					Options
		  				</th>
		  			</tr>
		  		</thead>
		  		<?php
		  			include '../Processes/connect.php';
		  			$id = $_SESSION['id'];

		  			$sql = "SELECT * FROM `mails` WHERE `sent_from` = '$id';";
		  			$query = mysqli_query($conn, $sql);

		  			while($row = mysqli_fetch_array($query)){
		  				$to = $row['sent_to'];
		  				$body = $row['body'];
		  				$attach = $row['attach'];
		  		?>
		  		<tbody>
		  			<tr>
		  				<td>
		  					<?php echo $to; ?>
		  				</td>
		  				<td>
		  					<?php echo $body; ?>
		  				</td>
		  				<td>
		  					<img src="../Uploads/<?=$attach?>" alt="attached image" width="100" height="100">
		  				</td>
		  				<td>
		  					<a href="#" class="btn btn-link">Delete</a>
		  				</td>
		  			</tr>
		  		</tbody>
		  		<?php
		  			}
		  		?>
		  	</table>
		</div>
	</div>

	<div id="MyOrder" class="tabcontent">
	  	<h3>My Orders</h3>
	  	<table class="table table-secondary">
	  		<thead>
	  			<tr>
	  				<th scope="col">
	  					Item Name
	  				</th>
	  				<th scope="col">
	  					Category
	  				</th>
	  				<th scope="col">
	  					Price
	  				</th>
	  				<th scope="col">
	  					Quantity
	  				</th>
	  				<th scope="col">
	  					Total
	  				</th>
	  				<th scope="col">
	  					Status
	  				</th>
	  			</tr>
	  		</thead>
	  		<tbody>
	  			<?php
	  				include '../Processes/connect.php';
	  				$id = $_SESSION['id'];

	  				$sql = "SELECT b.item_name, d.cat_name, b.item_price, a.qty, a.total, a.status FROM `orders` a JOIN `items` b JOIN `users` c JOIN `category` d ON a.item_id = b.item_id AND a.cat_id = d.cat_id AND a.user_id = c.user_id AND c.user_id = '$id';";
	  				$query = mysqli_query($conn, $sql);
	  				while($row = mysqli_fetch_array($query)){
	  					$item_name = $row['item_name'];
	  					$cat_name = $row['cat_name'];
	  					$item_price = $row['item_price'];
	  					$qty = $row['qty'];
	  					$total = $row['total'];
	  					$status = $row['status'];
	  			?>
	  			<tr>
	  				<td>
	  					<?php echo $item_name; ?>
	  				</td>
	  				<td>
	  					<?php echo $cat_name; ?>
	  				</td>
	  				<td>
	  					<?php echo $item_price; ?>
	  				</td>
	  				<td>
	  					<?php echo $qty; ?>
	  				</td>
	  				<td>
	  					<?php echo $total; ?>
	  				</td>
	  				<td>
	  					<?php echo $status; ?>
	  				</td>
	  			</tr>
	  			<?php
	  				}
	  			?>
	  		</tbody>
	  	</table>
	  </div>	
</div>
<script src="../Templates/profile.js"></script>
</body>
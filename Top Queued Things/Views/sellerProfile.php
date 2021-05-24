<?php
  session_start();

?>
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
        <li><a href="../store.php" class="nav-link px-2 text-secondary">Home</a></li>
        <li><a href="#Featured" class="nav-link px-2 text-white">Products</a></li>  


      </ul>
    <form method="POST" action="#" style="padding-right: 200px;">
          <input type="search" class="form-control" placeholder="Search..." style="float: left;">
          <input type="submit" name="search" value="Search" class="btn btn-outline-warning" style="float: right;">
      </form>
      <a href="#"><svg xmlns="http://www.w3.org/2000/svg"  width="30" height="30" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16" > 
      <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path></a>
    </svg>
  <?php

      	$fname = $_SESSION['name'];
      	$lname = $_SESSION['lname'];
      	$id = $_SESSION['id'];
  ?>
      <div class="text-end ses_start">
          <h5>Hello <?php echo $fname . " " . $lname;?></h5>
          <a href="Views/profile.php" class="btn btn-outline-warning">Profile</a>
          <a href="../Processes/logout.php" class="btn btn-outline-warning">Logout</a>
      </div>
</header>
<div class="content" align="center">
	<div class="tab">
		<button class="tablinks" onclick="openTab(event, 'Profile')">Profile</button>
		<button class="tablinks" onclick="openTab(event, 'Messaging')">Messaging</button>
		<button class="tablinks" onclick="openTab(event, 'MyOrders')">My Products</button>
		<button class="tablinks" onclick="openTab(event, 'MyCart')">Reports</button>
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
					<a href="#" onclick="openMsg(), closeInbox(), closeSent()" class="btn btn-link"><?php $title = 'Create Message';?>Create Message</a>
				</li>
				<li>
					<a href="#" onclick="openInbox(), closeMsg(), closeSent()" class="btn btn-link">Inbox</a>
				</li>
				<li>
					<a href="#" onclick="openSent(), closeInbox(), closeMsg()" class="btn btn-link">Sent</a>
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
							<input type="email" name="to" required=""><br>
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
		  					<a href="#" class="btn btn-link" onclick="openMsg(), closeInbox()">Reply</a>
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

	<div id="MyOrders" class="tabcontent" align="left">
	  	<h3>My Products</h3>
	  	<ul>
	  		<li>
	  			<a href="#" class="btn btn-link" onclick="openList(), closeForm()">Product List</a>
	  		</li>
	  		<li>
	  			<a href="#" class="btn btn-link" onclick="openForm(), closeList()">Add Product</a>
	  		</li>
	  	</ul>
	  	<div id="list" class="product">
	  		<table class="table table-secondary">
	  			<thead>
	  				<tr>
	  					<th>
	  						Item Code
	  					</th>
	  					<th>
	  						Item Name
	  					</th>
	  					<th>
	  						Item Image
	  					</th>
	  					<th>
	  						Item Description
	  					</th>
	  					<th>
	  						Category
	  					</th>
	  					<th>
	  						Price
	  					</th>
	  				</tr>
	  			</thead>
	  			<?php
	  				include '../Processes/connect.php';

	  				$sql = "SELECT a.item_name, a.item_desc, a.item_img, a.item_code, b.cat_name, a.item_price FROM `items` a JOIN `category` b ON a.cat_id = b.cat_id AND a.seller_id = '$id';";
					$query = mysqli_query($conn, $sql);

					while($row = mysqli_fetch_array($query)){
						$name = $row['item_name'];
						$desc = $row['item_desc'];
						$img = $row['item_img'];
						$code = $row['item_code'];
						$cat = $row['cat_name'];
						$price = $row['item_price'];
	  			?>
	  			<tbody>
	  				<tr>
	  					<td>
	  						<?php echo $code; ?>
	  					</td>
	  					<td>
	  						<?php echo $name; ?>
	  					</td>
	  					<td>
	  						<img src="../Uploads/<?=$img?>" alt="attached image" width="100" height="100">
	  					</td>
	  					<td>
	  						<?php echo $desc; ?>
	  					</td>
	  					<td>
	  						<?php echo $cat; ?>
	  					</td>
	  					<td>
	  						<p>&#8369;<?php echo $price . ".00";?></p>
	  					</td>
	  				</tr>
	  			</tbody>
	  			<?php
	  				}
	  			?>
	  		</table>
	  	</div>
	  	<div id="addProduct" class="product">
	  		<form action="../Processes/addItem.php" method="POST" class="mb-3" style="width: 400px;" enctype="multipart/form-data">
	  			<label for="itemName" class="form-label">Item Name</label>
	  			<input type="text" name="iName" class="form-control">
	  			<label for="itemDesc" class="form-label">Item Description</label>
	  			<input type="text" name="iDesc" class="form-control">
	  			<label for="file" class="form-label">File Attachment:</label>
	  			<input type="file" name="file" class="form-control form-control-sm">
	  			<label for="cat" class="form-label">Category</label>
	  			<select name="cat" class="form-select">
	  				<option selected="">Select Category</option>
	  				<?php
	  					include '../Processes/connect.php';

	  					$sql = "SELECT * FROM `category` ORDER BY `cat_name`;";
	  					$query = mysqli_query($conn, $sql);

	  					while ($row = mysqli_fetch_array($query)) {
	  						$cat_id = $row['cat_id'];
	  						$name = $row['cat_name'];
	  				?>
	  				<option value="<?php echo $cat_id ?>"><?php echo $name; ?></option>
	  				<?php
	  					}
	  				?>
	  			</select>
	  			<label for="price" class="form-label">Price</label>
	  			<input type="text" name="price" class="form-control">
	  			<input type="text" hidden="" name="status" value="C"><br>
	  			<input type="submit" name="sub" class="btn btn-outline-dark">
	  		</form>
	  	</div>
	</div>

	<div id="MyCart" class="tabcontent">
	  	<h3>Reports</h3>
	  	<table class="table table-secondary">
	  		<thead>
	  			<tr>
	  				<th>
	  					Item Image
	  				</th>
	  				<th>
	  					Item Code
	  				</th>
	  				<th>
	  					Item Name
	  				</th>
	  				<th>
	  					Quantity
	  				</th>
	  				<th>
	  					Total
	  				</th>
	  			</tr>
	  		</thead>
	  		<tbody>
	  			<?php
	  				include '../Processes/connect.php';

	  				$sql = "SELECT b.item_name, b.item_code, b.item_img, d.cat_name, b.item_price, a.qty, a.total, a.status FROM `orders` a JOIN `items` b JOIN `users` c JOIN `category` d ON a.item_id = b.item_id AND a.cat_id = d.cat_id AND a.user_id = c.user_id AND b.seller_id = '$id';";
	  				$query = mysqli_query($conn, $sql);

	  				while($row = mysqli_fetch_array($query)){
	  					$img = $row['item_img'];
	  					$code = $row['item_code'];
	  					$name = $row['item_name'];
	  					$qty = $row['qty'];
	  					$total = $row['total'];

	  			?>
	  			<tr>
	  				<td>
	  					<img src="../Uploads/<?=$img?>" alt="image file">
	  				</td>
	  				<td>
	  					<?php echo $code; ?>
	  				</td>
	  				<td>
	  					<?php echo $name; ?>
	  				</td>
	  				<td>
	  					<?php echo $qty; ?>
	  				</td>
	  				<td>
	  					&#8369;<?php echo $total . ".00"; ?>
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
<script type="text/javascript">
	function openList(){
	    document.getElementById('list').style.display = "block";
	}
	function closeList(){
	    document.getElementById('list').style.display = "none";
	}
	function openForm(){
	    document.getElementById('addProduct').style.display = "block";
	}
	function closeForm(){
	    document.getElementById('addProduct').style.display = "none";
	}
</script>
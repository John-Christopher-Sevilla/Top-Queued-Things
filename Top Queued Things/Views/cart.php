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
        <li><a href="About.html" class="nav-link px-2 text-white">About</a></li>  


      </ul>
		<form method="POST" action="#" style="padding-right: 200px;">
	        <input type="search" class="form-control" placeholder="Search..." style="float: left;">
	        <input type="submit" name="search" value="Search" class="btn btn-outline-warning" style="float: right;">
     	</form>
      <a href="#"><svg xmlns="http://www.w3.org/2000/svg"  width="30" height="30" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16" > 
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
<main>
	<div class="container marketing">
	    <h2 class="tit">My Cart </h2>
	    <hr class="featurette-divider">
	</div>
	
	<?php
		include '../Processes/connect.php';

		$sql = "SELECT a.cat_id, a.item_id, b.item_img, b.item_name, b.item_desc, b.item_price, a.qty FROM `cart` a JOIN `items` b JOIN `category` c JOIN `users` d ON a.user_id = '$id' AND a.item_id = b.item_id AND a.cat_id = c.cat_id AND a.user_id = d.user_id;";
		$query = mysqli_query($conn, $sql);

		while($row = mysqli_fetch_array($query)){
			$img = $row['item_img'];
			$title = $row['item_name'];
			$desc = $row['item_desc'];
			$price = $row['item_price'];
			$qty = $row['qty'];
			$cat_id = $row['cat_id'];
			$item_id = $row['item_id'];

			$total = $price*$qty;
	?>
	<div class="card mb-3" style="max-width: 540px; margin-left: 10%;">
	  <div class="row g-0">
	    <div class="col-md-4">
	      <img src="../Uploads/<?=$img?>" alt="image file" style="margin-left: 5%;">
	    </div>
	    <div class="col-md-8">
	      <form action="../Processes/checkout.php" method="POST">
	      	<div class="card-body">
		        <h5 class="card-title"><?php echo $title; ?></h5>
		        <input type="text" hidden="" name="title" value="<?php echo $item_id; ?>">
		        <p class="card-text"><?php echo $desc; ?></p>
		        <input type="text" hidden="" name="desc" value="<?php echo $desc; ?>">
		        <p class="card-text">Quantity:<input type="number" name="qty" value="<?php echo $qty;?>" style="width: 50px;"></p>
		        <p class="card-text"><b>Total</b>: &#8369;<?php echo $total . ".00"; ?></p>
		        <input type="text" hidden="" name="total" value="<?php echo $total; ?>">
		        <p class="card-text"><small class="text-muted">&#8369;<?php echo $price . ".00"; ?></small></p>
		        <input type="text" hidden="" name="price" value="<?php echo $price; ?>">
		        <input type="text" hidden="" name="cat_id" value="<?php echo $cat_id; ?>">
		        <input type="text" hidden="" name="status" value="O">
		        <input type="submit" name="out" value="Checkout" class="btn btn-warning">
		      </div>
	      </form>
	    </div>
	  </div>
	</div>
	<?php
		}
	?>
</main>
</body>
</html>
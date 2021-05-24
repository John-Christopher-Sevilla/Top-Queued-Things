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
  <link rel="stylesheet" href="Templates/style.css">
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
        <li><a href="store.php" class="nav-link px-2 text-secondary">Home</a></li>
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
  		$id = $_SESSION['id'];
      $fname = $_SESSION['name'];
      $lname = $_SESSION['lname'];
  ?>
      <div class="text-end ses_start">
          <h5>Hello <?php echo $fname . " " . $lname;?></h5>
          <a href="Views/sellerProfile.php" class="btn btn-outline-warning">Profile</a>
          <a href="Processes/logout.php" class="btn btn-outline-warning">Logout</a>
      </div>
    </a>
  </div>
</div>
</header>
<main>
			<div class="small-container">
			<a name="Featured"></a>
			<h2 class="tit">Products</h2>
      <div class= "row">
	<?php
			include 'Processes/connect.php';

			$sql = "SELECT * FROM `items` WHERE `seller_id` = '$id';";
			$query = mysqli_query($conn, $sql);

			while($row = mysqli_fetch_array($query)){
				$name = $row['item_name'];
				$img = $row['item_img'];
				$price = $row['item_price'];
	?>
			<div class = "col-4">
				<img src= "Uploads/<?=$img?>" alt="attached image">
				<h4><?php echo $name; ?></h4>
				<p> &#8369;<?php echo $price . ".00"; ?></p>
		</div>
		<?php
			}
		?>
</main>
</body>
</html>
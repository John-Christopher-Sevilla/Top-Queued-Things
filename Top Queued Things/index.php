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
        <li><a href="index.php" class="nav-link px-2 text-secondary">Home</a></li>
        <li><a href="#Featured" class="nav-link px-2 text-white">Features</a></li>


      </ul>
		<form method="POST" action="#" style="padding-right: 200px;">
	        <input type="search" class="form-control" placeholder="Search..." style="float: left;">
	        <input type="submit" name="search" value="Search" class="btn btn-outline-warning" style="float: right;">
     	</form>
      <a href="Views/cart.php"><svg xmlns="http://www.w3.org/2000/svg"  width="30" height="30" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16" > 
  		<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path></a>
		</svg>
	<?php
			session_start();
			
			if(isset($_SESSION['name'])){
	?>
	 		<div class="text-end ses_start">
				<h5>Hello <?php echo $_SESSION['name'] . " " . $_SESSION['lname'];?></h5>
				<a href="Views/profile.php" class="btn btn-outline-warning">Profile</a>
				<a href="Processes/logout.php" class="btn btn-outline-warning">Logout</a>
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
			

		
		
		</div>
     </div>
</header>
<main>
  <div class="container marketing">
    <h2 class="tit">Whats Hot! </h2>
    <hr class="featurette-divider">
  
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
      </div>
      <div class="col-md-5">
      	<img src="Images/s2.jpg">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
      </div>
      <div class="col-md-5 order-md-1">
       <img src="Images/s2.jpg">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
      </div>
      <div class="col-md-5">
      	<img src="Images/s2.jpg">
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->
  
<div class="small-container">
		<a name="Featured"> </a>
		<h2 class="tit">Featured Products</h2>
		<div class= "row">
			<?php 
				include 'Processes/connect.php';

				$sql = "SELECT * FROM `items`";
				$query = mysqli_query($conn, $sql);

				while($row = mysqli_fetch_array($query)){
					$name = $row['item_name'];
					$item_id = $row['item_id'];
					$cat = $row['cat_id'];
					$img = $row['item_img'];
					$price = $row['item_price'];
			?>
			<div class = "col-4">
				<img src= "Uploads/<?=$img?>">
				<h4><?php echo $name; ?></h4>
				<p> &#8369;<?php echo $price . ".00"; ?></p>
				<?php
					if(isset($_SESSION['id'])){
				?>
					<form action="Processes/cart.php" method="POST" class="row g-3">
						<input type="text" hidden="" name="item_id" value="<?php echo $item_id; ?>">
						<input type="text" hidden="" name="cat_id" value="<?php echo $cat; ?>">
						<input type="number" name="qty" class="form-control">
						<input type="text" hidden="" name="status" value="C">
						<input type="submit" name="cart" value="Add to Cart" class="btn btn-warning">
					</form>
				<?php
					}else{
				?>
					<form action="#" method="GET" class="row g-3">
						<input disabled="" type="number" name="num" class="form-control">
						<button disabled="" class="btn btn-warning">Add To Cart</button>
					</form>
				<?php
					}
				?>
			</div>
			<?php
				}
			?>
			
	</div>

	
<!----Products----->  
<hr class="featurette-divider">
  
<div class="small-container">
		<h2 class="tit">Buy Now!</h2>
		<div class= "row">
			<div class = "col-4">
				<img src= "Images/s2.jpg ">
				<h4>Pili Nuts 1</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o" ></i>
				</div>
				<p> $50.00</p>
				<?php
					if(isset($_SESSION['id'])){
				?>
					<form action="#" method="GET" class="row g-3">
						<input type="number" name="num" class="form-control">
						<button class="btn btn-warning">Add To Cart</button>
					</form>
				<?php
					}else{
				?>
					<form action="#" method="GET" class="row g-3">
						<input disabled="" type="number" name="num" class="form-control">
						<button disabled="" class="btn btn-warning">Add To Cart</button>
					</form>
				<?php
					}
				?>
			</div>
			<div class = "col-4">
				<img src= "Images/s1.jpg ">
				<h4>Pili Nuts 2</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o" ></i>
				</div>
				<p> ₱ 350.oo</p>
				<?php
					if(isset($_SESSION['id'])){
				?>
					<form action="#" method="GET" class="row g-3">
						<input type="number" name="num" class="form-control">
						<button class="btn btn-warning">Add To Cart</button>
					</form>
				<?php
					}else{
				?>
					<form action="#" method="GET" class="row g-3">
						<input disabled="" type="number" name="num" class="form-control">
						<button disabled="" class="btn btn-warning">Add To Cart</button>
					</form>
				<?php
					}
				?>
			</div>
			<div class = "col-4">
				<img src= "Images/s3.jpg ">
				<h4>Pili Nuts 3</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o" ></i>
				</div>
				<p>  ₱ 250.oo</p>
				<?php
					if(isset($_SESSION['id'])){
				?>
					<form action="#" method="GET" class="row g-3">
						<input type="number" name="num" class="form-control">
						<button class="btn btn-warning">Add To Cart</button>
					</form>
				<?php
					}else{
				?>
					<form action="#" method="GET" class="row g-3">
						<input disabled="" type="number" name="num" class="form-control">
						<button disabled="" class="btn btn-warning">Add To Cart</button>
					</form>
				<?php
					}
				?>
			</div>
			<div class = "col-4">
				<img src= "Images/s4.jpg ">
				<h4>Pili Nuts 4</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o" ></i>
				</div>
				<p> ₱ 150.oo</p>
				<?php
					if(isset($_SESSION['id'])){
				?>
					<form action="#" method="GET" class="row g-3">
						<input type="number" name="num" class="form-control">
						<button class="btn btn-warning">Add To Cart</button>
					</form>
				<?php
					}else{
				?>
					<form action="#" method="GET" class="row g-3">
						<input disabled="" type="number" name="num" class="form-control">
						<button disabled="" class="btn btn-warning">Add To Cart</button>
					</form>
				<?php
					}
				?>
			</div>
      <div class = "col-4">
				<img src= "Images/s1.jpg ">
				<h4>Pili Nuts 2</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o" ></i>
				</div>
				<p> ₱ 350.oo</p>
				<?php
					if(isset($_SESSION['id'])){
				?>
					<form action="#" method="GET" class="row g-3">
						<input type="number" name="num" class="form-control">
						<button class="btn btn-warning">Add To Cart</button>
					</form>
				<?php
					}else{
				?>
					<form action="#" method="GET" class="row g-3">
						<input disabled="" type="number" name="num" class="form-control">
						<button disabled="" class="btn btn-warning">Add To Cart</button>
					</form>
				<?php
					}
				?>
			</div>
      <div class = "col-4">
				<img src= "Images/s1.jpg ">
				<h4>Pili Nuts 2</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o" ></i>
				</div>
				<p> ₱ 350.oo</p>
				<?php
					if(isset($_SESSION['id'])){
				?>
					<form action="#" method="GET" class="row g-3">
						<input type="number" name="num" class="form-control">
						<button class="btn btn-warning">Add To Cart</button>
					</form>
				<?php
					}else{
				?>
					<form action="#" method="GET" class="row g-3">
						<input disabled="" type="number" name="num" class="form-control">
						<button disabled="" class="btn btn-warning">Add To Cart</button>
					</form>
				<?php
					}
				?>
			</div>
      <div class = "col-4">
				<img src= "Images/s1.jpg ">
				<h4>Pili Nuts 2</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o" ></i>
				</div>
				<p> ₱ 350.oo</p>
				<?php
					if(isset($_SESSION['id'])){
				?>
					<form action="#" method="GET" class="row g-3">
						<input type="number" name="num" class="form-control">
						<button class="btn btn-warning">Add To Cart</button>
					</form>
				<?php
					}else{
				?>
					<form action="#" method="GET" class="row g-3">
						<input disabled="" type="number" name="num" class="form-control">
						<button disabled="" class="btn btn-warning">Add To Cart</button>
					</form>
				<?php
					}
				?>
			</div>
      <div class = "col-4">
				<img src= "Images/s1.jpg ">
				<h4>Pili Nuts 2</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o" ></i>
				</div>
				<p> ₱ 350.oo</p>
				<?php
					if(isset($_SESSION['id'])){
				?>
					<form action="#" method="GET" class="row g-3">
						<input type="number" name="num" class="form-control">
						<button class="btn btn-warning">Add To Cart</button>
					</form>
				<?php
					}else{
				?>
					<form action="#" method="GET" class="row g-3">
						<input disabled="" type="number" name="num" class="form-control">
						<button disabled="" class="btn btn-warning">Add To Cart</button>
					</form>
				<?php
					}
				?>
			</div>
      <div class = "col-4">
				<img src= "Images/s1.jpg ">
				<h4>Pili Nuts 2</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o" ></i>
				</div>
				<p> ₱ 350.oo</p>
				<?php
					if(isset($_SESSION['id'])){
				?>
					<form action="#" method="GET" class="row g-3">
						<input type="number" name="num" class="form-control">
						<button class="btn btn-warning">Add To Cart</button>
					</form>
				<?php
					}else{
				?>
					<form action="#" method="GET" class="row g-3">
						<input disabled="" type="number" name="num" class="form-control">
						<button disabled="" class="btn btn-warning">Add To Cart</button>
					</form>
				<?php
					}
				?>
			</div>
      <div class = "col-4">
				<img src= "Images/s1.jpg ">
				<h4>Pili Nuts 2</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o" ></i>
				</div>
				<p> ₱ 350.oo</p>
				<?php
					if(isset($_SESSION['id'])){
				?>
					<form action="#" method="GET" class="row g-3">
						<input type="number" name="num" class="form-control">
						<button class="btn btn-warning">Add To Cart</button>
					</form>
				<?php
					}else{
				?>
					<form action="#" method="GET" class="row g-3">
						<input disabled="" type="number" name="num" class="form-control">
						<button disabled="" class="btn btn-warning">Add To Cart</button>
					</form>
				<?php
					}
				?>
			</div>
      <div class = "col-4">
				<img src= "Images/s1.jpg ">
				<h4>Pili Nuts 2</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o" ></i>
				</div>
				<p> ₱ 350.oo</p>
				<?php
					if(isset($_SESSION['id'])){
				?>
					<form action="#" method="GET" class="row g-3">
						<input type="number" name="num" class="form-control">
						<button class="btn btn-warning">Add To Cart</button>
					</form>
				<?php
					}else{
				?>
					<form action="#" method="GET" class="row g-3">
						<input disabled="" type="number" name="num" class="form-control">
						<button disabled="" class="btn btn-warning">Add To Cart</button>
					</form>
				<?php
					}
				?>
			</div>
      <div class = "col-4">
				<img src= "Images/s1.jpg ">
				<h4>Pili Nuts 2</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o" ></i>
				</div>
				<p> ₱ 350.oo</p>
				<?php
					if(isset($_SESSION['id'])){
				?>
					<form action="#" method="GET" class="row g-3">
						<input type="number" name="num" class="form-control">
						<button class="btn btn-warning">Add To Cart</button>
					</form>
				<?php
					}else{
				?>
					<form action="#" method="GET" class="row g-3">
						<input disabled="" type="number" name="num" class="form-control">
						<button disabled="" class="btn btn-warning">Add To Cart</button>
					</form>
				<?php
					}
				?>
			</div>
		</div>
	</div>
  <div class="page-btn">
				<span>1</span>
				<span>2</span>
				<span>3</span>
				<span>4</span>
				<span>&#8594;</span>
			</div>
		
	</div>

  <!-- FOOTER -->
  <!-- Footer -->
  
<footer class="page-footer font-small blue pt-4">

<!-- Footer Links -->
<div class="container-fluid text-center text-md-left bg-secondary">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-6 mt-md-0 mt-3">

      <!-- Content -->
      <h5 class="text-uppercase">SHOP NOW! TOP THINGS JUST FOR YOU!</h5>
      <p>The best product for you, Albayanos! Tara na, Bili na!</p>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none pb-3">

    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

      <!-- Links -->

      <ul class="list-unstyled">
        <li>
        <i class="bi bi-facebook"></i>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg>
          <a href="www.facebook.com" style="text-decoration: none; color: rgb(0,0,0);">Facebook</a>
        </li>
        <li>
        <i class="bi bi-twitter"></i>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
</svg>
          <a href="#!" style="text-decoration: none; color: rgb(0,0,0);">Twitter</a>
        </li>
        <li>
        <i class="bi bi-envelope"></i>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
</svg>
          <a href="#!" style="text-decoration: none; color: rgb(0,0,0);">Email Us</a>
        </li>
        <li>
        <i class="bi bi-phone"></i>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
  <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
  <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg>
          <a href="" style="text-decoration: none; color: rgb(0,0,0);">Contact US <Br> 09278966369</a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

      <!-- Links -->
      <ul class="list-unstyled">
        <li>      
        	<h3><a href="Views/sellerLogin.php" style="text-decoration: none; color: rgb(0,0,0);">Be a Seller</a></h3>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3 bg-secondary">Copyright &copy; 2021 <a href="admin.php" style="text-decoration: none;
color: #222;">Top Queued Things</a> All rights reserved
  <p class="float-end"><a href="#" style="text-decoration: none; color: rgb(0,0,0);">Back to top</a></p>
</div>
<!-- Copyright -->
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="Templates/session.js"></script>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Top Queued Things</title>
	<link rel="stylesheet" type="text/css" href="../Templates/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	
	<div class="container">
		<div class="img">
		<img class="wave" src="../Images/wave.png">
		</div>
		<div class="login-content" align="center">
			<form action="../Processes/register.php" method="POST">
				<img src="../Images/avatar.svg">
				<h2 class="title">Registration</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input name="email" type="email" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input name="pwd" type="password" class="input">
            	   </div>
            	</div>
              <div class="input-div div-reg">
                 <div class="i"> 
                    <i class="fas fa-lock"></i>
                 </div>
                 <div class="div div-reg">
                    <h5>Re-type Password</h5>
                    <input name="re" type="password" class="reg">
                 </div>
              </div>
<!--             	<a href="#">Forgot Password?</a>
              <a href="#">Register</a>
            	<input name="login" type="submit" class="btn btn-login" value="Login"> -->
              <input type="submit" name="reg" class="btn btn-reg" value="Register">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="main.js"></script>
</body>
</html>

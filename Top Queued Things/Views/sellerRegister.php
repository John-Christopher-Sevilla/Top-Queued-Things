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
				<h2 class="title">Registration</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<input name="email" type="email" class="input" placeholder="Email">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<input name="pwd" type="password" class="input" placeholder="Password">
            	   </div>
            	</div>
              <div class="input-div div-reg">
                 <div class="i"> 
                    <i class="fas fa-lock"></i>
                 </div>
                 <div class="div div-reg">
                    <input name="re" type="password" class="input" placeholder="Re-type Password">
                 </div>
              </div>
              <input type="text" name="pos" hidden="" value="S">
<!--             	<a href="#">Forgot Password?</a>
              <a href="#">Register</a>
            	<input name="login" type="submit" class="btn btn-login" value="Login"> -->
                      <div class="input-div one">
                         <div class="i">
                            <i class="fas fa-user"></i>
                         </div>
                         <div class="div">
                            <input name="uname" type="text" class="input" placeholder="Username">
                         </div>
                      </div>
                      <div class="input-div pass">
                         <div class="i"> 
                            <i class="fas fa-lock"></i>
                         </div>
                         <div class="div">
                            <input name="fname" type="text" class="input" placeholder="First Name">
                         </div>
                      </div>
                      <div class="input-div pass">
                         <div class="i"> 
                            <i class="fas fa-lock"></i>
                         </div>
                         <div class="div">
                            <input name="lname" type="text" class="input" placeholder="Last Name">
                         </div>
                      </div> 
                      <div class="input-div pass">
                         <div class="i"> 
                            <i class="fas fa-lock"></i>
                         </div>
                         <div class="div">
                            <input name="age" type="number" class="input" placeholder="Age">
                         </div>
                      </div> 
                      <div class="input-div pass">
                         <div class="i"> 
                            <i class="fas fa-lock"></i>
                         </div>
                         <div class="div">
                            <input name="add" type="text" class="input" placeholder="Address">
                         </div>
                      </div>
                      <div class="input-div pass">
                         <div class="i"> 
                            <i class="fas fa-lock"></i>
                         </div>
                         <div class="div">
                            <input name="cont_info" type="text" class="input" placeholder="Contact Number">
                         </div>
                      </div>
                      <input name="reg" type="submit" class="btn btn-login" value="Register">
                    </form>
              </div>
        </div>
    </div>
    <script type="text/javascript" src="../Templates/main.js"></script>
</body>
</html>

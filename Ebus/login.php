

<?php 
  include "connect/connect_db.php";
  if (isset($_POST['btn'])) {
      $username = $_POST['Username']; 
      $password = $_POST['Password']; 
    if ($username == "" && $password == "") {
      echo "Vui Lòng nhập đầy đủ thông tin của bạn";
    }else{
      $sql = "SELECT * FROM db_login WHERE Username ='$username' AND Password = '$password'";
     $query = mysqli_query($connect,$sql);
      if (mysqli_num_rows($query) == 0) {
        echo "Tên đăng nhập hoặc mật khẩu không đúng !";
      }else{
        header ("Location: index.php");
      }
    }
  }

?>
<!DOCTYPE html>
<html>
<head>
  	<title>Ebus - Đăng Nhập</title>
  	<link rel="stylesheet" type="text/css" href="css/login_form.css">
  	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form action="login.php" method="POST">
				<img src="img/avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fa fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="Username">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fa fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="Password">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" value="Login" name="btn">
            </form>
        </div>
    </div>
    <script type="text/javascript" >
      const inputs = document.querySelectorAll(".input");

      function addcl(){
        let parent = this.parentNode.parentNode;
        parent.classList.add("focus");
      }

      function remcl(){
        let parent = this.parentNode.parentNode;
        if(this.value == ""){
          parent.classList.remove("focus");
        }
      }

      inputs.forEach(input => {
        input.addEventListener("focus", addcl);
        input.addEventListener("blur", remcl);
      });

	  
    </script>
</body>
</html>
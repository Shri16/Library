<?php
   include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>

  <title>Student Login</title>
  <link rel="stylesheet" type="text/css" href="indexcss.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">





</head>
<body>
<nav class="navbar navbar-expand-sm navbar sticky-top">
	<div class="nav-heading">
		<img src="images/logo.jpeg" alt="" class="logo" height="70" width="90">
		<h1 class="head"><b>Online Library System</b></h1>
		<a href="index.php" class="home">Home</a>
		<a href="student_login.php" class="student-login">Student Login</a>
		<a href="admin_login.html" class="admin-login">Admin Login</a>	
		<a href="feedback.php" class="aboutus">About Us</a>
	</div>
</nav>



<img src="images/book.png" alt="" class="book" height="600" width="600">


<div class="login">
        <h1 style="text-align: center; font-size:40px;font-family: Lucida Console;">Online Library System</h1>
        <h1 style="text-align: center; font-size: 25px;">Student Login Form</h1><br>
      <form name="login" action="" method="post">
          <input class="form-control" type="text" name="username" placeholder="Username" required autofocus> <br><br>

          <input class="form-control" type="password" name="password" placeholder="Password" required><br><br>
        <input class="login-button btn-default" type="submit" name="submit" value="Login" >
</div>
      
      <p class="forgot-password">
        <br><br>
        
        New to this website?<a style="color: blue;" href="registration.php">Sign Up</a>
      </p>
     </form>
    
     

<?php
     if(isset($_POST['submit']))
     {
       $count=0;
       $res=mysqli_query($db,"SELECT * FROM `student` WHERE username ='$_POST[username]' && password= '$_POST[password]';");
       $count=mysqli_num_rows($res);

       if($count==0)
       {
         ?>
          <!-- <script type="text/javascript">
             alert("the username and password doesn't match.")
          </script> -->
          <div class="alert alert-warning" style=" width :700px ; margin-left:330px;text-align:center;background-color:#de1313;color:white;  position: relative ; bottom:520px;">
            <strong>The username and password doesn't match.</strong>
          </div>
         <?php
       }
       else{
         ?>
          <script type="text/javascript">
            window.location="book.html"
          </script>
         <?php
       }
     }
?>
</body>
</html>
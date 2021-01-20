<?php
   include "connection.php";
?>


<!DOCTYPE html>
<html>
<head>

  <title>Student Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  
</head>
<body>
<header style="height: 90px; width: 1365px">
  
<div class="logo">
      <h1 style="color: white; font-size: 25px;word-spacing: 10px; line-height: 80px;margin-top: 20px;">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
</div>

      <nav>
        <ul>
          <li><a href="index.php">HOME</a></li>
          <li><a href="student_login.php">STUDENT-LOGIN</a></li>
          <li><a href="admin_login.html">ADMIN_LOGIN</a></li>
          <li><a href="feedback.php">ABOUT-US</a></li>
        </ul>
      </nav>
</header>
<section>
      <div class="reg_img">
          <div class="box2">
              <h1 style="text-align: center; font-size: 35px; font-family: lucida console;">&nbsp &nbsp Library Management System</h1>
              <h1 style="text-align: center; font-size: 25px;">User Login Form</h1>
              <form name="login" ;action="" method="post">
              
               <div class="login">
                 <input class="form-control" type="text" name="first" placeholder="Fist Name" required>
                 <br>
                 <input class="form-control" type="text" name="last" placeholder="Last Name" required>
                 <br>
                 <input class="form-control" type="text" name="username" placeholder="Username" required>
                 <br>
                 <input class="form-control" type="text" name="roll_no"  placeholder="Roll NO" required>
                <br>
                 <input class="form-control" type="password" name="password" placeholder="Password" required>
                 <br>
                 <input class="form-control" type="email" name="email" placeholder="Email" required>
                 
                 <br>
                 <input class="btn btn-default" type="submit" name="submit" value="Sign-Up" style="color: black; width: 70px; height: 30px;"></div>
                  
               </div>

              </form>
          </div>

      </div>
</section>
 
  <?php

    if(isset($_POST['submit']))  //if button press then show data
     {
       
       if(!mysqli_query($db,"INSERT INTO `student` VALUES('$_POST[first]', '$_POST[last]', '$_POST[username]', '$_POST[password]', '$_POST[roll_no]', '$_POST[email]'); "))
        {
         echo "<script>";
         echo 'alert("not registered")';
         echo "</script>";
        }
        else
        {
          echo "<script>";
          echo 'alert("registration successful")';
          header("refresh:0.01; url=student_login.php");
          echo "</script>";
        }
     } 

  ?>
   
</body>

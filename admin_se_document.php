
<?php
  include "admin_se_fileslogic.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADMIN-SE-Document</title>
  <link rel="stylesheet" href="../book_upload.css">
</head>
<body>
	
  <nav class="navbar navbar-expand-sm navbar sticky-top">
	<div class="nav-heading">
		<img src="../images/logo.jpeg" alt="" class="logo" height="70" width="90">
		<h1 class="head"><b>Online Library System</b></h1>
		<a href="../index.php" class="home">Home</a>
		<a href="../admin_login.html" class="logout"> Logout </a>	
		<a href="feedback.php" class="aboutus">About Us</a>
	</div>
</nav>
  <div class="container">
    <div class="upload">  
      <form action="admin_se_document.php" method="post" enctype="multipart/form-data"><br><br>
       <h3> Select Book File To Upload<h3>
        <input type="file" name="myfile" ><br>
       <button type="submit" name="save" >Upload</button>
     </form>
    </div>

     <div class="row">
         <table>
             <thed>
                <th>FILE NAME</th>
                <th>SIZE (KB)</th>
                <th>ACTION</th>
             </thed>
             <tbody>
               <?php foreach($files as $file): ?>
                <tr align=center>
                  <td><?php echo $file['name']; ?></td>
                  <td><?php echo $file['size'] / 1000?></td>
                  <td>
                    <a href="./uploads/<?php echo $file['name']?>" target="_blank" rel="noopener noreferrer" style="color:white" class="open">Open</a>
                   </td>
               </tr>
                  <?php endforeach;?>
             </tbody>  
         </table>

     </div>
  </div>
</body>
</html>
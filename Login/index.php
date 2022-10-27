<!DOCTYPE html>

<html>

<head>
	<title>SBB Access Login</title>

	<meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">  

	<link rel ="icon" href="../img/forgot_password_30px.png" type="image/x-icon">

	<link rel="stylesheet" type="text/css" href="../CSS/Login.css">
</head>

<body>
     <form action="login.php" method="post">
     	
	 <h2><img src = "../img/internet_30px.png"> SLTC BOOK BUCKET LOGIN</h2>
     	
	 <?php if (isset($_GET['error'])) { ?>


		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>
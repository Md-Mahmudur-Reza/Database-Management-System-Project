<!DOCTYPE html>
<html>
    
<head>
    <title>Log In Page</title>
    <link rel="stylesheet" type="text/css" href="style_P_Login.css" >
    <link type="img/jpg" href="logo.jpg" rel="icon">
</head>

<body>
    <h2 class="header">Form :</h2>
    
    <form method="post" action="P_Check.php" id="form">
        <b>User ID : </b><br>
        <input type = "text" id = "uname" name="uname" Placeholder = "Your ID"><br>
        <b>Password : </b><br>
        <input type = "password" id = "pass" name = "pass" Placeholder = "Your Password"><br><br>
        <input type = "submit" value = "Log In" id = "submit">
    </form>
      
    <?php
        if(isset($_GET['status'])){
				$status=$_GET['status'];
				if($status=='invalid'){
					echo "<script>window.alert('invalid input')</script>";
				}
				else if($status=='dberror'){
					echo "<script>window.alert('Database Connection Error')</script>";
				}
				else if($status=='wrongdata'){
					echo "<script>window.alert('Wrong Username or Password')</script>";
				}
			}
    
    
    ?>
    
</body>

</html>
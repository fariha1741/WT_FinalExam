<?php
	session_start();
	if(isset($_COOKIE['uname'])){
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Home Page</title>
</head>
<body>
<h1>Welcome! <?=$_COOKIE['uname']?></h1> 
	<a href="profile.php">Profile</a>
		<a href="changepass.php">Change Password</a>
				<a href="logout.php">Logut</a>

</body>
</html>
<?php		
	}else{
		header('location: reg.html');
	}
?>
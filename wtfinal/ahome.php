<?php
	session_start();
	require('db.php');
	if(isset($_COOKIE['uname'])){
?>

<html>
<head>
	<title>Admin Home Page</title>
</head>
<body>
<h1>Welcome! <?=$_COOKIE['uname']?></h1> 
<?php
$con= getConnection();
$sql1= "select type from user where username='{$_SESSION['uname']}';";
$resu1t1= mysqli_query($con,$sql1);
$data1= mysqli_fetch_assoc($result1);?>

	<a href="profile.php">Profile</a>
		<a href="changepass.php">Change Password</a>
			<a href="users.html">View Users</a>
				<a href="logout.php">Logut</a>
				

</body>
</html>
<?php

session_start();
$currpass= $newpass= $confirmpass= "";

if(isset($_POST['submit'])){
	$currpass= $newpass= $confirmpass= "";
$currpass=$_POST['password'];
		if($currpass== trim(($_SESSION['pass'])))
			
		{
			$newpass=$_POST['newpassword'];	
		$confirmpass=$_POST['confirmpassword'];

			if($newpass== $confirmpass)
			{
				$_SESSION['password']= $newpass;
				
			 $id= $_SESSION['id'];
			$pass= $_SESSION['pass'] ;
			 $name=	$_SESSION['uname'];
			$email= $_SESSION['email'] ;
			
		$usertype=	$_SESSION['type'];
	

			header('location: ahome.php');
			}	
		else {$confirmpass= "password doesnt match";}
		
		}
		else {$currpass = "Old Password doesnt match";}
	}

?>
<html>
<body>
<form method="POST">
<table align='center'  width=40%>
<tr>
<td align='center' colspan='2'> Change Password </td>
</tr>
<tr>
<td>Current Password </td>
<td > <input type="password" name="pass" placeholder="Enter current password.. " required/> <?php echo $currpass; ?> </td>
</tr>
<tr>
<td> New Password</td>
<td > <input type="password" name="newpassword" placeholder="Enter your new password.. " required/> </td>
</tr>
<tr>
<td> Confirm Password</td>
<td> <input type="password" name="confirmpassword" placeholder="Retype New password.. " required/> <?php echo $confirmpass; ?> </td>
</tr>
<tr>
<td> <input type="submit" name="submit" value="Change"></td>
<td> <a href= "ahome.php">Home </td>
</tr>
</table>
</form>
</body>
</html>

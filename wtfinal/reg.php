<?php
session_start();
require('db.php');
if(isset($_POST['uname']))
{$id= $_POST['id'];
$pass= $_POST['upass'];
$confirmpass= $_POST['cpass'];
$name= $_POST['uname'];
$email= $_POST['email'];
$type= $_POST['type'];
$con= getConnection();
$sql= "insert into user values ('{$id}', {$name}','{$email}','admin')";
 if($result= mysqli_query($con,$sql))
 {
	$_SESSION['uname']=$uname;
	$_SESSION['pass']=$pass;
	
	echo "true";
}
else
{echo "Registration not done ";} 
}
?>
  
<?php
session_start();
require('db.php');
if(isset($_POST['uname']))
{$uname= $_POST['uname'];
$pass= $_POST['upass'];
$con= getConnection();
$sql= "select * from user where username= '{$uname}' and password='{$upass}'";
$result= mysqli_query($con,$sql);
$data= mysqli_fetch_assoc($result);
if(count($data)>0)
{
	$_SESSION['username']=$uname;
	$_SESSION['pass']=$pass;
	echo "true";
}
else
{echo "wrong username or password";}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<script>
function f1()
{  var uname = document.getElementById('uname').value;
 var pass= document.getElementById('upass').value;
 if( uname=="" || pass=="")
{ document.getElementById('login').innerHTML="null submission";}
else
{
var xhttp = new XMLHttpRequest();
				xhttp.open("POST", "login.php", true);
				xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				xhttp.send('uname='+username+'&pass='+pass);
			
				xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
					if(this.responseText=="true")
					{window.location.href='ahome.php';}
					 	else
						{document.getElementById('login').innerHTML = this.responseText;}					 
					}};
}}
</script>
	<form>
<fieldset>
<legend> Registration </legend>
<table>
<tr>
<td>User Id: </td>
<td> <input type= "text" name= "id" id="id"> </td>
</tr>
<tr>
<td>Password: </td>
<td> <input type= "Password" name= "pass" id="upass"> </td>
</tr>

<td> <input type= "checkbox" name= "remember" id="remember"> Remember me</td>
</tr>
<tr>

<td> <input type= "submit" name= "submit"  value="Login" onclick ="f1()"> </td>
<td> <a href= "reg.html"> Register</a> </td>
</tr>
<tr>
<td> <div id= "login"></div> </td>
<td> </td>


</tr>
</table>
</fieldset>
</form>

</body>
</html>
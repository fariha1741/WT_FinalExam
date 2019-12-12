<?php
 function getConnection()
 
 {
	 $con= mysqli_connect('localhost','root','','final');
	 return $con;
	 
 }
?>
<?php 
  
  require_once("config.php");
  $connect = mysqli_connect("localhost","root","","php-exam");
  mysqli_query($connect,"update user set status='Inactive'");
  mysqli_query($connect,"update user set status='Active' where id=".$_POST['id']);
  if (mysqli_affected_rows($connect) > 0) {
	  echo true;
  }
  

?>
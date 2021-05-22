<?php

$server= 'localhost';
$user= 'root';
$password='';
$db= 'coronadb';

$con=mysqli_connect($server, $user, $password, $db);

if($con)
{
?>
  <script>
  	alert("connection sucessful");

  </script>
   <?php
} else{
   ?>
  <script>
  	alert("sucessful fail");

  </script>
   <?php

}

?>

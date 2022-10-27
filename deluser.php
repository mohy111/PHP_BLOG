<?php

 $nm =  $_GET['id'];

require_once("includs/db.php");
mysqli_query($con,"delete from `loginsystem`.`users` where `id`='$nm'");

header("location:dashboardadmin.php");
?>

<?php

 $nm =  $_GET['id'];

require_once("includs/db.php");
mysqli_query($con,"delete from `loginsystem`.`categories` where `id`='$nm'");

header("location:categoriesadmin.php");
?>

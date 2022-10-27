<?php

 $nm =  $_GET['id'];

require_once("includs/db.php");
mysqli_query($con,"delete from `loginsystem`.`blogs` where `id`='$nm'");

header("location:blogadmin.php");
?>
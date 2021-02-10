<?php

$fname=$_POST['fname'];

$path = mysqli_connect("localhost","root","","recharge");


$insert="INSERT INTO wallet SET Ammount='$fname'";
$path->query($insert);

?>
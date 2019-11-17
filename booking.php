<?php
$con= mysqli_connect("localhost","root","","project") or die ("couldn't connect ");
$adv=$_POST["adv"];
$num=$_POST["number"];
$date=$_POST["date"];
$query="insert into booking (regid, type, number, date) VALUES ('', '$adv', '$num', '$date');"
?>
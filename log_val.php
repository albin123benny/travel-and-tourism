<?php
    $con=mysqli_connect("localhost","root","","project") or die("couldn't connect");
    $unmae=$_POST["username"];
    $pass=$_POST["password"];
    $query="select username,password from login where username='$unmae' and password='$pass'";
    $result=mysqli_query($con,$query);
   if ( mysqli_num_rows($result)>0)
   {
       session_start();
       $_SESSION["user"]=$unmae;
       header("location:home.php");
   }
   else
   {
       echo "<center> <h1> username or password is incorrect </cneter>";
   }
?>
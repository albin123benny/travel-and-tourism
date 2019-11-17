<?php
    $con=mysqli_connect("localhost","root","","project") or die("connot conncet!");
    $name=$_POST["name"];
    $gender=$_POST["gender"];
    $email=$_POST["email"];
    $phno=$_POST["phno"];
    $username=$_POST["username"];
    $password=$_POST["password"];

    $query="select username from login where username='$username'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0)
    {
      echo "<center> <h1>username error </center>";
    }
    else{
        mysqli_query($con,$query);
        $query="insert into login(username,password)VALUES('$username','$password')";
        if(mysqli_query($con,$query))
        {
            $id=mysqli_insert_id($con);
            $query="insert into reg(logid,name,gender,email,phno)VALUES($id,'$name','$gender','$email','$phno')";
            mysqli_query($con,$query);
            header("location:page/login.html");
        }
        else{
            echo " error";
        }

    }

    
?>
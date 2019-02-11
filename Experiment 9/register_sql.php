<?php
    $con = mysqli_connect("localhost","root","","experiment_9");
    $username=$_POST['username'];
    $password=$_POST['password'];
    $insert_query = "insert into users values('$username', '$password');";
    $result = mysqli_query($con,$insert_query) or die(mysqli_error($con));
    header("Location:index.php")
?>
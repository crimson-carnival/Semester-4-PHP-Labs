<?php
    session_start();
    $username=$_POST['username'];
    $password=$_POST['password'];
    if (strlen($_POST['password'])==0)
    {
        header("Location: index.php");
        die();
    }
    $con = mysqli_connect("localhost","root","","experiment_9");
    $select_query = "select password from users where username='$username'";
    $result = mysqli_query($con,$select_query) or die(mysqli_error($con));
    $row = mysqli_fetch_array($result);
    if ($password==$row[0])
    {
        $_SESSION['username']=$username;
        setcookie('username',$username,time()+300);
    }
    header("Location:index.php");
?>

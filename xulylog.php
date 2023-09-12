<?php
    require_once 'config.php';
    if(isset($_POST['submit']))
    {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
    }
    $sql = "SELECT * FROM `user` WHERE user = '$user'";
    $result = mysqli_query($connect,$sql)->fetch_assoc();
    if(!$result)
    {
        die("username no valid");
    }
    if($result['pass'] == $pass)
    {
        header("location: http://localhost/PHP/");
    }
    else
    {
        die("Login Failed, check info login !");
    }
?>
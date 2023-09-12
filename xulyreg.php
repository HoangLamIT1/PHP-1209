<?php
    require_once 'config.php';
    if(isset($_POST['submit']))
    {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $email = $_POST['email'];
    }
    else
    {
        echo "Please return to the home page";
    }
    $sql = "INSERT INTO `user`(`ID`, `user`, `pass`, `email`) VALUES (NULL,'$user','$pass','$email')";
    $addinfo = mysqli_query($connect, $sql);
    if($addinfo)
    {
        echo "register successfully";
    }
    else
    {
        echo "register failed";
    }
?>
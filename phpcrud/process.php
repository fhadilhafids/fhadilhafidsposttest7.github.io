<?php
require 'functions.php';
session_start();
    if (isset($_POST['submit'])){
        $username=$_POST['username'];
        $password=$_POST['password'];

        $result = mysqli_query($conn, "SELECT * from user WHERE username='$username'");
        if (mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row['password'])){
                header("Location: landingpage.php");
                exit;
            }   
        }
        $error = true;
        if(isset($error)){
            $_SESSION['akses']=$username;
                echo "<p style='color: red;'>Username / password salah</>";
        }
    }


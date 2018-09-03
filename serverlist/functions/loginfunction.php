<?php
    
    require_once('../config/config.php');

    // Checking in table user in db
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM tbl_user WHERE username = '$username' AND password='$password'";
    $runQuery = mysqli_query($link, $query);

    // Checking is exist or no ?
    if (mysqli_num_rows($runQuery) > 0){
        $_SESSION['user'] = 1;
        header('Location: ../index.php');
    } else {
        echo "Username / password salah, periksa kembali";
    }
   
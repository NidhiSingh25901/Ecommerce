<?php
require_once 'include/session.php';
require_once 'database/connection.php';

if(isset($_GET['token'])){
    $token = $_GET['token'];

    $updatequery = "UPDATE signup SET status='active' WHERE token='$token";

    $query = mysqli_query($con, $updatequery);

    if($query){
        if(isset($_SESSION['msg'])){
            $_SESSION['msg'] = "Account updated successfully";
            header('Location: login.php');
        } else {
            $_SESSION['msg'] = "You are logged out";
            header('Location: login.php');
        }
    } else {
        $_SESSION['msg'] = "Account was not updated";
        header('Location: signup.php');
    }

}

?>
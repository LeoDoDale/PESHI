<?php
session_start();
include_once("connection.php");

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$repassword = filter_input(INPUT_POST, 'passConfirm', FILTER_SANITIZE_STRING);

$_SESSION['email'] = $email;

$result_user = "INSERT INTO users(name , email, password, passConfirm) VALUES('$name', '$email', '$password', '$repassword')";
mysqli_query($conn, $result_user);

if (mysqli_insert_id($conn)){
    header("Location: addMembro.php");
}else{
    header("Location: index.php");
}

?>
<?php
include_once("connection.php");

$email = isset($_POST["email"])? $_POST["email"] : FALSE;
$senha = isset($_POST["password"])? $_POST["password"] : FALSE;


$sql = "SELECT * FROM users WHERE email = '$email' and password = '$senha'";
$rss = mysqli_query($conn, $sql);

if ($email && $senha){
    
}
else{
    echo "<script> alert('A senha ou email estao em branco'); </script> ";
    header("Location: landingpage.php");
}


?>
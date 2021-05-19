<?php
session_start();
include_once("connection.php");

$email = $_SESSION['email'];

$name_member = filter_input(INPUT_POST, 'name_member', FILTER_SANITIZE_STRING);
$type = $_POST['selectName'];
$gender = $_POST['selectGender'];
$fk = "SELECT id FROM users where email = '$email'";
$pintao = mysqli_query($conn, $fk);

if (!$pintao) {
    echo 'Could not run query: ';
    exit;
}
$row = mysqli_fetch_row($pintao);



$result_family = "INSERT INTO membro_familia(nome_membro, tipo_membro, genero_membro, fk_user) VALUES('$name_member', '$type', '$gender', '$row[0]')";
mysqli_query($conn, $result_family);

if (mysqli_insert_id($conn)){
    header("Location: Membros.php");
}else{
    header("Location: home.php");
}


?>
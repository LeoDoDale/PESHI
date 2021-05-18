<?php
session_start();
include_once("connection.php");

$email = $_SESSION['email'];

$fk = "SELECT id, name, email, password, passConfirm FROM users where email = '$email'";
$pintao = mysqli_query($conn, $fk);

if (!$pintao) {
    echo 'Could not run query: ';
    exit;
}
$row = mysqli_fetch_row($pintao);

$fk1 = "SELECT nome_membro, tipo_membro, genero_membro  FROM membro_familia where fk_user = '$row[0]'";
$pintaozin = mysqli_query($conn, $fk1);

if (!$pintaozin) {
    echo 'Could not run query: ';
    exit;
}
$rowzin = mysqli_fetch_row($pintaozin);

?>
<?php
session_start();
include_once("connection.php");

$email = $_SESSION['email'];
$id_membro = $_GET['id'];
$valor = $_POST['valor'];
$descricao = $_POST['descricao'];
$data = $_POST['data'];
$fk = "SELECT id FROM users where email = '$email'";
$pintao = mysqli_query($conn, $fk);

if (!$pintao) {
    echo 'Could not run query: ';
    exit;
}
$row = mysqli_fetch_row($pintao);

$result_family = "INSERT INTO renda(valor_renda, data_renda, descricao, id_membro) VALUES('$valor', '$data', '$descricao', $id_membro)";

mysqli_query($conn, $result_family);

if (mysqli_insert_id($conn)){
    header("Location: ativos.php?id=".$id_membro."");
}else{
    header("Location: index.php");
}
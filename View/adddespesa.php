<?php
session_start();
include_once("connection.php");

$email = $_SESSION['email'];
$id_membro = $_GET['id'];
$valor = $_POST['valor'];
$descricao = $_POST['descricao'];
$data = $_POST['data'];
$fk = "SELECT id FROM users where email = '$email'";
$categoria = "1";
$pintao = mysqli_query($conn, $fk);

if (!$pintao) {
    echo 'Could not run query: ';
    exit;
}
$row = mysqli_fetch_row($pintao);



$result_family = "INSERT INTO despesa(valor_despesa, data_despesa, descricao_despesa, id_membro, Id_categoria) VALUES('$valor', '$data', '$descricao', $id_membro, '$categoria')";

mysqli_query($conn, $result_family);

if (mysqli_insert_id($conn)){
    header("Location: despesas.php?id=".$id_membro."");
}else{
    header("Location: Membros.php");
}
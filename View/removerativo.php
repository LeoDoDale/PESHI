<?php
session_start();
include_once("connection.php");

$id = $_GET['id'];
$id_membro = $_GET['id_membro'];
$rem = "DELETE FROM renda WHERE id_renda = $id";
mysqli_query($conn, $rem);

header("Location: ativos.php?id=".$id_membro."");



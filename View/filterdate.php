<?php 
session_start();
$datai = $_GET['data1'];
$dataf = $_GET['data2'];

    header("Location: relatorio.php?data1=".$datai."&data2=".$dataf."");
?>
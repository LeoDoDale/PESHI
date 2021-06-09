<?php
include_once("connection.php");

$email = $_SESSION['email'];
$img_homem = "../Resources/img/homem.png";
$img_mulher = "../Resources/img/mulher.png";


$fk = "SELECT id FROM users where email = '$email'";
$pintao = mysqli_query($conn, $fk);


if (!$pintao) {
    echo 'Could not run query: ';
    exit;
}
$row = mysqli_fetch_row($pintao);

$fk1 = "SELECT id_membro ,nome_membro, genero_membro  FROM membro_familia where fk_user = '$row[0]'";
$pintaozin = mysqli_query($conn, $fk1) or print(mysqli_error($conn));
while ($rs = mysqli_fetch_array($pintaozin)){

    if ($rs["genero_membro"] == "Homem")
        {$url = $img_homem;}
    else 
        {$url = $img_mulher;}
    echo "                        
    <div class='col-xl-4 col-sm-6 mt-2'>
        <div class='card '>
            <div class='row no-gutters'>
                <div class='col-lg-5 d-flex justify-content-center '>
                    <img src='".$url." '
                        class='perfil-img' alt='...'>
                </div>
                <div class='col-lg-7'>
                    <div class='card-body'>
                        <h5 class='card-title'> ". $rs["nome_membro"] ." </h5>
                        <p class='card-text nowrap'>Saldo: R$3234.00
                        </p>
                        <p class='card-text nowrap'>Despesas: R$2323.32</p>
                        <p class='card-text nowrap'>Renda: R$3213.32</p>
                        <a href='ativos.php?id=".$rs["id_membro"]."' class='btn btn-success bg-green'>Ver ativos</a>
                        <a href='despesas.php?id=".$rs["id_membro"]."' class='btn btn-danger'>Ver Despesas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>";
}

?>
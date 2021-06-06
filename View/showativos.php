<?php
include_once("connection.php");


$id_membro = $_GET['id'];
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

$fk1 = "SELECT id_renda, valor_renda, data_renda, descricao  FROM renda where id_membro = ".$id_membro."";
// echo $fk1;
$pintaozin = mysqli_query($conn, $fk1) or print(mysqli_error($conn));
while ($rs = mysqli_fetch_array($pintaozin)){
    echo "
    <tr>
        <form method='POST' action='removerativo.php?id=".$rs[0]."&id_membro=".$id_membro."' >
            <td style='max-width: 150px' >".$rs[0]."</td>
            <td style='max-width: 150px'>".$rs[1]."</td>
            <td style='max-width: 150px'>".$rs[2]."</td>
            <td style='max-width: 150px'>".$rs[3]."</td>
            <td><button type='button' class='btn btn-success'>Editar</button> <button type='button' class='btn btn-danger' data-toggle='modal'
            data-target='#modal-remover'>Excluir</button></td>
            <div class='modal fade' id='modal-remover' tabindex='-1' role='dialog'>
            <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title'>Excluir ativo</h5>
                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <div class='modal-body'>
                        <p>Tem certeza que deseja remover este ativo?</p>
                    </div>
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancelar</button>
                        <button type='submit' class='btn btn-danger'>Remover</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </tr>                        
    ";
}



?>

<!-- <div class='col-xl-4 col-sm-6 mt-2'>
        <div class='card '>
            <div class='row no-gutters'>
                <div class='col-lg-5 d-flex justify-content-center '>
                    <img src='../Resources/img/dinheiro.png' class='perfil-img' alt='...'>
                </div>
                <div class='col-lg-7'>
                    <div class='card-body'>
                        <h5 class='card-title'> Ativo de Marcia </h5>
                        <p class='card-text nowrap'>Valor: R$ ".$rs["valor_renda"]."</p>
                        <p class='card-text nowrap'>Data: ".$rs["data_renda"]."
                        </p> -->
                        <!-- <p class='card-text nowrap'>Renda: R$2323.32</p> -->
                        <!-- <a href='#' class='btn btn-success bg-green stretched-link'>Editar</a>
                        <a href='#' class='btn btn-danger stretched-link'>Excluir</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
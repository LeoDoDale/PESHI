<?php
include_once("connection.php");


$id_membro = $_GET['id'];
$email = $_SESSION['email'];



$fk = "SELECT id FROM users where email = '$email'";
$pintao = mysqli_query($conn, $fk);


if (!$pintao) {
    echo 'Could not run query: ';
    exit;
}
$row = mysqli_fetch_row($pintao);

$fk1 = "SELECT id_despesa, valor_despesa, data_despesa, descricao_despesa  FROM despesa where id_membro = ".$id_membro."";
// echo $fk1;
$pintaozin = mysqli_query($conn, $fk1) or print(mysqli_error($conn));
while ($rs = mysqli_fetch_array($pintaozin)){
    echo "
    <tr>
        <form method='POST' action='removerdespesa.php?id=".$rs[0]."&id_membro=".$id_membro."' >
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
                        <h5 class='modal-title'>Excluir despesaa</h5>
                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <div class='modal-body'>
                        <p>Tem certeza que deseja remover este despesaa?</p>
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
<?php
include_once("connection.php");


$email = $_SESSION['email'];
$sl = "SELECT id FROM users where email = '$email'";
$id_user = mysqli_query($conn, $sl) or print(mysqli_error($conn));
$rowUser = mysqli_fetch_assoc($id_user);
$idUser = $rowUser['id'];
$sl2 = "SELECT id_membro FROM membro_familia WHERE fk_user = $idUser";
$id_membro = mysqli_query($conn, $sl2);
while ($rs = mysqli_fetch_array($id_membro)){
    $geral = 
        "SELECT *  FROM 
        (SELECT 
            id_despesa as 'id',
            valor_despesa as 'valor',
            data_despesa as 'data',
            descricao_despesa as 'desc',
            id_categoria as 'tipo'
            FROM despesa
            WHERE id_membro = ".$rs['id_membro']. "
            UNION ALL
        SELECT 
            id_renda as 'id',
            valor_renda as 'valor',
            data_renda as 'data',
            descricao as 'desc',
            NULL as 'tipo'
            FROM renda
            WHERE id_membro = ".$rs['id_membro'].") geral
            ORDER BY data
            ";
    $tb = mysqli_query($conn, $geral);
    while($morte = mysqli_fetch_array($tb))
    {
        $tipo = ($morte["tipo"]==NULL) ? 'Receita' : 'Despesa';
        echo "  <tr>
                    <th scope='row'>".$morte["id"]."</th>
                    <td>".$morte["valor"]."</td>
                    <td>".$morte["data"]."</td>
                    <td>".$morte["desc"]."</td>
                    <td>".$tipo."</td>
                </tr>";
    } 
}
?>

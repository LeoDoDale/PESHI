<?php
include_once("connection.php");

$email = $_SESSION['email'];

echo "                <div class='mt-5'>
<div class='row bg-white'>
    <div class='col-xl-3 col-lg-5 rounded d-flex justify-content-center mt-4'>
        <img src='../Resources/img/homem.png' style='height: 250px;' class='img-fluid'>
    </div>

    <div class='col container'>
        <p class='display-4 my-3 text-center'>Meu Perfil</p>
        <div class='form-group'>
            <label for='exampleInputEmail1'>Endereco de email:</label>
            <input type='email' class='form-control' value='".$email."' id='exampleInputEmail1'
                aria-describedby='emailHelp' disabled>
        </div>
        <div class='form-group'>
            <label for='exampleInputPassword1'>Senha</label>
            <input type='password' class='form-control' value='***********'
                id='exampleInputPassword1' disabled>
        </div>


        <div class='form-row'>
            <div class='form-group col-md-6'>
                <label for='inputEmail4'>Genero:</label>
                <input type='text' class='form-control' id='inputEmail4'  value='Homem' disabled>
            </div>
            <div class='form-group col-md-6'>
                <label for='inputPassword4'>Tipo:</label>
                <input type='text' class='form-control' id='inputPassword4'  value='Administrador'
                disabled>
            </div>
        </div>

    </div>
</div>
</div>"

?>
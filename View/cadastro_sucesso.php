<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="../resources/css/owl.carousel.min.css">
        <link rel="stylesheet" href="../resources/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="../resources/css/style.css">
    <title>Sucesso</title>
</head>
<body>
<nav class="navbar navbar-expand-lg py-lg-5 bg-green navbar-light" id="navbar">
        <div class="container">
            
            <a href="home.php" class="navbar-brand" href="#"><img class="img-responsive" style="height: 50px"
                    src="../resources/img/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbardropdown"
                aria-controls="navbardropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbardropdown">

                <ul class="navbar-nav mx-auto ">
                    <li class="nav-item ">
                        <a class="nav-link h5 text-white teste " href="#">TEAM</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link h5 text-white " href="#sobre">SOBRE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link h5 text-white " href="#">CONTATO</a>
                    </li>

                </ul>

                <a href="login.php">
                    <button class="btn btn-outline-success btn-outline-green  mr-2 font-weight-bold"
                        type="submit">Login</button>
                </a>
                <a href="cadastro.php">  
                    <button  class="btn btn-outline-success btn-outline-green font-weight-bold"
                        type="submit">Cadastrar-se</button>
                        </a>

            </div>
        </div>

    </nav>
    <div class="bg-green">
        <div class="container">
            <p class="text-center">Cadastro realizado com sucesso!</p>
            <form method="POST" action="membros_ex.php">
                <div id="emailHelp" class="form-text font-weight-bold text-center">Cadastre os membros da sua familia</div>
                <div class="mb-3 text-center">
                    <label for="exampleInputEmail1" class="form-label font-weight-bold">Nome do membro</label><br>
                    <input type="text" class="txt-box" name="name_member" aria-describedby="emailHelp">
                    
                </div>
                <div class="mb-3 text-center">
                    <label for="exampleInputEmail1" class="form-label font-weight-bold">Tipo do membro</label><br>
                    <select name="selectName">
                        <option value="Dependente">Dependente</option>
                        <option value="Nao dependente">Nao dependente</option>
                    </select>
                </div>

                <div class="mb-3 text-center">
                    <label for="exampleInputEmail1" class="form-label font-weight-bold">Genero</label><br>
                    <select name="selectGender">
                        <option value="Homem">Homem</option>
                        <option value="Mulher">Mulher</option>
                        <option value="Outro">Outro</option>
                    </select>
                </div>

                <div class="mb-3 form-check text-center">
                    <input type="checkbox" class="form-check-input font-weight-bold" id="Check">
                    <label class="form-check-label font-weight-bold" for="exampleCheck1">Check me out</label>
                </div>
                <div class="text-center pb-3">
                    <button type="submit" class="btn btn-outline-success btn-outline-green mr-2 font-weight-bold">Enviar</button>
                    <a href="home.php">
                        <button type="submit" class="btn btn-outline-success btn-outline-green mr-2 font-weight-bold">Outro membro</button>
                    </a>
                </div>
                </form>
        </div>
    </div>
</body>
</html>
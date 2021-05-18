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

    <title>Cadastro</title>
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
    
    <div class="bg-green py-3 pt-lg-5" style="padding-bottom: 10px; margin-bottom: 110px; ">
        <div class="container">
                <form method="POST" action="cadastro_ex.php">
                <div id="emailHelp" class="form-text font-weight-bold text-center">Seus dados nao serao compartilhados com mais ninguem</div>
                <div class="mb-3 text-center">
                    <label for="exampleInputEmail1" class="form-label font-weight-bold">Nome</label><br>
                    <input type="text" class="txt-box" name="name" aria-describedby="emailHelp">
                    
                </div>
                <div class="mb-3 text-center">
                    <label for="exampleInputEmail1" class="form-label font-weight-bold">Email</label><br>
                    <input type="email" class="txt-box" name="email" aria-describedby="emailHelp">
                    
                </div>
                <div class="mb-3 text-center">
                    <label for="exampleInputPassword1" class="form-label font-weight-bold">Senha</label><br>
                    <input type="password" class="txt-box" name="password">
                </div>
                <div class="mb-3 text-center">
                    <label for="exampleInputPassword1" class="form-label font-weight-bold">Digite novamente a senha</label><br>
                    <input type="password" class="txt-box" name="passConfirm">
                </div>
                <div class="mb-3 form-check text-center">
                    <input type="checkbox" class="form-check-input font-weight-bold" id="Check">
                    <label class="form-check-label font-weight-bold" for="exampleCheck1">Check me out</label>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-outline-success btn-outline-green mr-2 font-weight-bold">Enviar</button>
                    <a href="home.php">
                        <button class="btn btn-outline-success btn-outline-green mr-2 font-weight-bold">Retornar</button>
                    </a>
                </div>
                </form>
                </div>
                
        </div>
    
</body>
</html>
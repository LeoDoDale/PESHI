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


    <title>Login</title>
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

                <button class="btn btn-outline-success btn-outline-green  mr-2 font-weight-bold"
                    type="submit">Login</button>
                <a href="cadastro.php">  
                    <button  class="btn btn-outline-success btn-outline-green font-weight-bold"
                        type="submit">Cadastrar-se</button>
                        </a>

            </div>
        </div>

    </nav>

    <div class="bg-green" style="padding-top: 25px;padding-bottom:25px;">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <div class="font-weight-bold"> Login <br>
                    <input type="email" placeholder="e-mail" class="text-center txt-box"> 
                    </div>
                </div> 
            </div>
            <div class="row text-center">
                <div class="col" style="margin-top:10px;">
                    <div class="font-weight-bold"> Senha <br>
                        <input type="password" placeholder="senha" class="text-center txt-box">
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col" style="margin-top:20px;">
                    <div>
                        <button class="btn btn-outline-success btn-outline-green font-weight-bold">Conectar</button>
                        <a href="home.php">
                            <button style="margin-left: 5px;" class="btn btn-outline-success btn-outline-green font-weight-bold">Retornar</button>
                        </a>
                    </div>
                </div>
            </div>   
        </div>
    </div>
    
</body>
</html>
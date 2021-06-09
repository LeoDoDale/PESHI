<?php
include_once("connection.php");

$email = isset($_POST["email"])? $_POST["email"] : FALSE;
$senha = isset($_POST["password"])? $_POST["password"] : FALSE;

$sql = "SELECT * FROM users WHERE email = '$email' and password = '$senha'";
$rss = mysqli_query($conn, $sql);


if ($email && $senha){
    if (mysqli_num_rows($rss) > 0){
        $rs = mysqli_fetch_array($rss);
        session_start();
        $_SESSION['email'] = $rs["email"];
        header("Location: index.php");
    }

    else {
        echo "<script> alert('A senha ou email estao errados'); </script> ";
        echo "<meta http-equiv='refresh' content='1; url=landingpage.php'>";
    }
}

else {
    echo "<script> alert('A senha ou email estao em branco'); </script> ";
    header("Location: landingpage.php");
}

?>
 
    
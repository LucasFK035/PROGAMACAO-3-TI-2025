<?php
if(isset($_POST['botao'])){
    require_once __DIR__."/vendor/autoload.php";
    $x = new Usuario($_POST['email'],$_POST['senha']);
    if($x->authenticate()){
        header("location: livraria.php");
    }else{
        header("location: index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de usuário</title>
</head>
<body>
    <a href='formCadUsuario.php'></a>
    <a href='formCadUsuario.php'>Favoritar livro</a>
</body>
</html>
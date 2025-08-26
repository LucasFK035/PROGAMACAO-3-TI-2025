<?php
session_start();
require_once 'src/MySQL.php';
if(isset($_POST['idLivro']) && isset($_SESSION['idUsuario'])){
    $idLivro = intval($_POST['idLivro']);
    $idPessoa = intval($_SESSION['idUsuario']);
    $conectar = new MySQL();
    $sql = "DELETE FROM favoritos WHERE idLivro = $idLivro AND idPessoa = $idPessoa";
    $conectar->executar($sql);
}
header("Location: listaFav.php");
exit;
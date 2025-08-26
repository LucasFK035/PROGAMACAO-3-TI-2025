<?php
session_start();
require_once 'src/MySQL.php';
if(isset($_POST['idLivro']) && isset($_SESSION['idUsuario'])){
    $idLivro = intval($_POST['idLivro']);
    $idPessoa = intval($_SESSION['idUsuario']);
    $conectar = new MySQL();
    $sql = "INSERT INTO favoritos (idLivro, idPessoa) VALUES ($idLivro, $idPessoa)";
    $conectar->executar($sql);
}
header("Location: livraria.php");
exit;
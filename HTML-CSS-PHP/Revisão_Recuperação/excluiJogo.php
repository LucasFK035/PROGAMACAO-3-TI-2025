<?php
// 1. Conexão com o banco
$conexao = new mysqli("localhost", "usuario", "senha", "nome_do_banco");
if ($conexao->connect_error) {
    exit("Erro de conexão: " . $conexao->connect_error);
}

// 2. Recebe o id pela URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// 3. Exclui o jogo
if ($id > 0) {
    $sql = "DELETE FROM jogo WHERE id = $id";
    $conexao->query($sql);
}

// 4. Redireciona para index.php
header("Location: index.php");
exit;
?>
<?php
session_start();
if(!isset($_SESSION['idUsuario'])){
    header("location:index1.php");
    exit;
}
require_once 'src/MySQL.php';

$idUsuario = $_SESSION['idUsuario'];
$conectar = new MySQL();
$sql = "SELECT l.idLivro, l.titulo, l.link FROM livros l
        INNER JOIN favoritos f ON l.idLivro = f.idLivro
        WHERE f.idPessoa = {$idUsuario}";
$favoritos = $conectar->consultar($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Livros Favoritos</title>
</head>
<body>
<h1>Meus Livros Favoritos</h1>
<table>
    <tr>
        <td>Título</td>
        <td>Capa</td>
        <td>Remover</td>
    </tr>
    <?php foreach($favoritos as $livro): ?>
        <tr>
        <td>
            <img src="capas/<?= htmlspecialchars($livro['link']) ?>" alt="<?= htmlspecialchars($livro['titulo']) ?>" width="80">
        </td>
            <td>
                <form method="post" action="removerFavorito.php">
                    <input type="hidden" name="idLivro" value="<?= $livro['idLivro'] ?>">
                    <button type="submit">Remover</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<a href='livraria.php'>Voltar para lista geral</a> | 
<a href='exit.php'>Sair</a>
</body>
</html>
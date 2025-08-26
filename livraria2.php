<?php
session_start();
if(!isset($_SESSION['idUsuario'])){
    header("location:index1.php");
    exit;
}
require_once 'src/MySQL.php';

// Buscar livros que NÃO estão nos favoritos do usuário
$conectar = new MySQL();
$idUsuario = $_SESSION['idUsuario'];
$sql = "SELECT * FROM livros WHERE idLivro NOT IN (SELECT idLivro FROM favoritos WHERE idPessoa = {$idUsuario})";
$livros = $conectar->consultar($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Livros disponíveis</title>
</head>
<body>
<h1>Livros disponíveis</h1>
<table>
    <tr>
        <td>Título</td>
        <td>Capa</td>
        <td>Favoritar</td>
    </tr>
     <?php foreach($livros as $livro): ?>
        <tr>
        <td>
            <?= htmlspecialchars($livro['titulo']) ?>
        </td>
            <td>
                <img src="capas/<?= htmlspecialchars($livro['link']) ?>" alt="<?= htmlspecialchars($livro['titulo']) ?>" width="80">
            </td>
            <td>
                <form method="post" action="favoritar.php">
                    <input type="hidden" name="idLivro" value="<?= $livro['idLivro'] ?>">
                    <button type="submit">Favoritar</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<a href='listaFav.php'>Ver meus favoritos</a> | 
<a href='exit.php'>Sair</a>
</body>
</html>
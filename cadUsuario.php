<?php
require_once 'src/MySQL.php';
require_once 'src/Usuario.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if ($nome && $email && $senha) {
        $usuario = new Usuario($email, $senha);
        $usuario->save();
        // Aqui você pode salvar o nome na tabela pessoa se quiser, mas o login é pelo usuário
        header('Location: index1.php');
        exit;
    } else {
        $erro = "Preencha todos os campos!";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro</h1>
    <?php if (isset($erro)) echo "<p>$erro</p>"; ?>
    <form method="post">
        <label>Nome: <input type="text" name="nome" required></label><br>
        <label>Email: <input type="email" name="email" required></label><br>
        <label>Senha: <input type="password" name="senha" required></label><br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
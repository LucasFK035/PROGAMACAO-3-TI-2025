<?php
// 1. Conexão com o banco
$conexao = new mysqli("localhost", "usuario", "senha", "nome_do_banco");
if ($conexao->connect_error) {
    exit("Erro de conexão: " . $conexao->connect_error);
}

// 2. Receber dados do formulário
$titulo = $_POST['titulo'];
$genero = $_POST['genero'];
$plataforma = implode(", ", $_POST['plataforma']);
$situacao = $_POST['situacao'];

// 3. Upload da imagem
$mes = date("m");
$ano = date("Y");
$nomeImagem = $mes . "_" . $ano . ".png";
$caminho = "capas/" . $nomeImagem;

if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
    move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho);
} else {
    $nomeImagem = ""; // Caso não tenha imagem
}

// 4. Inserir no banco
$sql = "INSERT INTO jogo (titulo, genero, plataforma, situacao, imagem) VALUES ('$titulo', $genero, '$plataforma', '$situacao', '$nomeImagem')";
$conexao->query($sql);

// 5. Redirecionar para index.php
header("Location: index.php");
exit;
?>
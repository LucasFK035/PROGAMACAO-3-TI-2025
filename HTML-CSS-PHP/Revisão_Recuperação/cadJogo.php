<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca de Jogos</title>
</head>
<body>
    <form action="index.php" method="post">
    <p>Título:</p>
    <label>
        <input type="text" name="titulo" id="titulo" required>
    </label>
    <br>
    <p>Gênero:</p>
    <label>
    <select name="genero" id="genero" required>
        <option value="acao">Ação</option>
        <option value="aventura">Aventura</option>
        <option value="rpg">RPG</option>
        <option value="estrategia">Estratégia</option>
        <option value="fps">FPS</option>
        <option value="roguelike">RogueLike</option>
        <option value="terror">Terror</option>
        <option value="esporte">Esporte</option>
    </select>
    </label>
    <p>Plataforma:</p>
    <label>
        <input type="checkbox" name="plataforma" id="p1" value="Computador" required>
        <input type="checkbox" name="plataforma" id="p2" value="Videogame" required>
    </label>
    <p>Situação:</p>
    <label>
        </input type="radio" name="situacao" id="s1" value="Disponível" required>
        <input type="radio" name="situacao" id="s2" value="Indisponível" required>
    </label>
    <p>Imagem da Capa:</p>
    <label>
        <input type="button" name="botaoArquivo" id="file" value="Selecione o arquivo">
        <input type="button" name="botaoEnviar" value="Submeter">
    </label>
   
    </form>
</body>
</html>

<?php

?>
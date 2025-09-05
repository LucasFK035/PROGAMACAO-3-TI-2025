<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca de Jogos</title>
</head>
<body>
    <form action="cadJogo.php" method="post">
    <p>Título:</p>
    <label>
        <input type="text" name="titulo" id="titulo" required>
    </label>
    <br>
    <p>Gênero:</p>
    <label>
    <select name="genero" id="genero" required>
        <option value="1">Ação</option>
        <option value="1">Aventura</option>
        <option value="3">RPG</option>
        <option value="4">Estratégia</option>
        <option value="5">FPS</option>
        <option value="6">RogueLike</option>
        <option value="7">Terror</option>
        <option value="8">Esporte</option>
    </select>
    </label>
    <p>Plataforma:</p>
    <label>
        <input type="checkbox" name="plataforma[]" id="p1" value="Computador" required>
        <input type="checkbox" name="plataforma[]" id="p2" value="Videogame" required>
    </label>
    <p>Situação:</p>
    <label>
        </input type="radio" name="situacao" id="s1" value="Disponível" required>
        <input type="radio" name="situacao" id="s2" value="Indisponível" required>
    </label>
    <p>Imagem da Capa:</p>
        <input type="file" name="accept" id="file" accept="image/*" value="Selecione o arquivo">
        <br>
        <input type="button" name="botaoEnviar" value="Submeter">

    </form>
</body>
</html>
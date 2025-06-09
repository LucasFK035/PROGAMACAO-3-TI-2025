<?php
if($_POST["r2"] === "o" || $_POST["r2"] === "O" || $_POST["r2"] === "A letra O"){
    $_SESSION["p2"] = true;
} else {
    header("location: enigma2.php")
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESCAPE ROOM - DESCUBRA O 3º ENIGMA:</title>
</head>
<body>
    <h1>3º ENIGMA:</h1>
    <br>
    <h3>Descubra em que continente esse país fica...</h3>
    <br>
    <p>Nome do país: Nova Caledônia</p>
    <br>
    <input type="radio" name="opcoes" value="c1"> América
    <input type="radio" name="opcoes" value="c2"> África
    <input type="radio" name="opcoes" value="c3"> Europa
    <input type="radio" name="opcoes" value="c4"> Ásia
    <input type="radio" name="opcoes" value="c5"> Antártica
    <input type="radio" name="opcoes" value="c6"> Oceania

    <input type="submit" value="Enviar">
</body>
</html>
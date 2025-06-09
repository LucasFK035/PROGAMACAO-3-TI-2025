<?php
if($_POST["r1"] === "html" || "HTML"){
    $_SESSION["p1"] = true;
} else {
    header("location: index.html")
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESCAPE ROOM - DESCUBRA O 2º ENIGMA:</title>
</head>
<body>
    <h1>2º ENIGMA:</h1>
    <br>
    <h3>Descubra a resposta da charada...</h3>
    <br>
    <p>O que é, o que é? Todo mês tem, menos abril.
    </p>
    <br>
    <form method="post" action="enigma3.php">
    <input type="text" name="p2" required id="p2">
    <input type="submit" value="Enviar">
    </form>
</body>
</html>
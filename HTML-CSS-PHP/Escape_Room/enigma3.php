<?php
session_start();

if (isset($_POST["r2"])) {
    $resposta = $_POST["r2"];
    if ($resposta === "o" || $resposta === "O" || $resposta === "A letra O") {
        $_SESSION["p2"] = true;
        header("Location: enigma3.php");
        exit;
    }else{
        header("Location: enigma2.php");
        exit;
        }
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
    <section>
    <div class="item">
    <form method="post" action="index.php">
    <h1>3º ENIGMA:</h1>
    <br>
    <h3>Descubra em que continentes esses países e territórios ultramarinos ficam...</h3>
    <br>
    <p>Nomes do países: Nova Caledônia, Burundi, Santa Lúcia, Brunei, Armênia, Essuatíni, <br>
       Ilha Heard e Ilhas McDonald, Kuwait, São Tomé e Princípe, Quiguistão, Turks e Caicos.</p>
    <br>
    <input type="radio" name="opcoes" value="c1"> Oceania, Ásia, América, Ásia, Europa, África, Oceania, África, América, Ásia, Europa.
    <br>
    <input type="radio" name="opcoes" value="c2"> Ásia, África, África, Oceania, Ásia, América, Antártica, Ásia, Europa, Europa, América.
    <br>
    <input type="radio" name="opcoes" value="c3"> América, África, América, Europa, Ásia, África, Ásia, Ásia, África, Ásia, Oceania
    <br>
    <input type="radio" name="opcoes" value="c4"> Oceania, América, América, Ásia, Ásia, África, África, Ásia, África, Europa, América
    <br>
    <input type="radio" name="opcoes" value="c5"> Oceania, África, América, Ásia, Ásia, América, Antártica, Europa, África, Ásia, América
    <br>
    <input type="radio" name="opcoes" value="c6"> Oceania, África, América, Ásia, Ásia, África, Antártica, Ásia, África, Ásia e América.
    <br>

    <input type="submit" value="Enviar">
    </form>
    </section>
    </div>
</body>
</html>
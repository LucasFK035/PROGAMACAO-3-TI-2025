<?php

if ($_POST["r3"] === "Oceania"){
    $_SESSION["p3"] = true;
} else {
    header("location: enigma3.php")
    exit;
}

if ($_SESSION["p1"] && $_SESSION["p2"] && $_SESSION["p3"]) {
    echo "<h1>Você terminou todos os enigmas! Parabéns!</h1>"
} else {
        echo "<h1>Erro! Você não respondeu os enigmas de forma certa!</h1>"
}
?>
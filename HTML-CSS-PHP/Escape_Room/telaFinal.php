<?php
session_start();

if (isset($_POST["opcoes"])) {
    $resposta = $_POST["opcoes"];
    if ($resposta === "c6") {
        $_SESSION["p3"] = true;
        header("Location: final.php");
        exit;
    }else{
        header("Location: enigma3.php");
        exit;
        }
    }
?>

<?php
if ($_SESSION["p1"] && $_SESSION["p2"] && $_SESSION["p3"]) {
    echo "<h1>Você terminou todos os enigmas! Parabéns!</h1>"
} else {
        echo "<h1>Erro! Você não respondeu os enigmas de forma certa!</h1>"
}
?>
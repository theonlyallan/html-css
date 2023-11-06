<?php
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if (isset($_GET["nome"])) {
        $nome = $_GET["nome"];
        echo "Nome: " . $nome . "<br>";
    }

    if (isset($_GET["media"])) {
        $media = $_GET["media"];
        echo "Média: " . $media . "<br>";
    }

    if (isset($_GET["mes"])) {
        $mes = $_GET["mes"];
        echo "Período Letivo: " . $mes . "<br>";
    }

    if (isset($_GET["dia"])) {
        $dia = $_GET["dia"];
        echo "Dia da Prova: " . $dia . "<br>";
    }

    if (isset($_GET["hora"])) {
        $hora = $_GET["hora"];
        echo "Horário da Prova: " . $hora . "<br>";
    }
}
?>

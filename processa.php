<?php
    echo "<a href='index.html'>Voltar</a><br><br>";
    // if ($_POST["botao"] === "Somar" ) {
    //     $result = $_POST["first-number"] + $_POST["second-number"];
    //     echo $result;
    // };
    // if ($_POST["botao"] === "Subtrair" ) {
    //     $result = $_POST["first-number"] - $_POST["second-number"];
    //     echo $result;
    // };
    // if ($_POST["botao"] === "Dividir" ) {
    //     $result = $_POST["first-number"] / $_POST["second-number"];
    //     echo $result;
    // };
    // else {
    //     $result = $_POST["first-number"] * $_POST["second-number"];
    //     echo $result;
    // };
    
    if (isset($_POST["operations"])) {
        if ($_POST["operations"] == "soma") {
            $result = $_POST["first-number"] + $_POST["second-number"];
            echo "Soma de ".$_POST["first-number"]." com ".$_POST["second-number"]." é " .$result;
        }
        else if ($_POST["operations"] == "sub") {
            $result = $_POST["first-number"] - $_POST["second-number"];
            echo "Subtração de ".$_POST["first-number"]." com ".$_POST["second-number"]." é " .$result;
        }
        else if ($_POST["operations"] == "mult") {
            $result = $_POST["first-number"] * $_POST["second-number"];
            echo "Multiplicação de ".$_POST["first-number"]." por ".$_POST["second-number"]." é " .$result;
        }
        else {
            $result = $_POST["first-number"] / $_POST["second-number"];
            echo "Divisão de ".$_POST["first-number"]." por ".$_POST["second-number"]." é " .$result;
        }
    };
?>


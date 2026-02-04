<?php

$nome = filter_input(INPUT_POST,"nome", FILTER_DEFAULT);
$email = filter_input(INPUT_POST,"email", FILTER_DEFAULT);
$telefone = filter_input(INPUT_POST,"telefone", FILTER_DEFAULT);
$curso = filter_input(INPUT_POST,"curso", FILTER_DEFAULT);

if(trim($nome) === "" || $nome === null ||
    trim($email) === "" || $email === null ||
    trim($telefone) === "" || $telefone === null ||
    trim($curso) === "" || $curso === null){
        header("formArray.php");
        exit;
    }

$nomeSeguro = htmlspecialchars($nome,ENT_QUOTES,"UTF-8");
$emailSeguro = htmlspecialchars($email,ENT_QUOTES,"UTF-8");
$telefoneSeguro = htmlspecialchars($telefone,ENT_QUOTES,"UTF-8");
$cursoSeguro = htmlspecialchars($curso,ENT_QUOTES,"UTF-8");

echo "Obrigado por cadastrar seu interesse <br>";
echo "<span> <strong> Nome: </strong>" . $nomeSeguro . "</span> <br>";
echo "<span> <strong> E-mail: </strong>" . $emailSeguro . "</span> <br>";
echo "<span> <strong> Telefone: </strong>" . $telefoneSeguro . "</span> <br>";
echo "<span> <strong> Curso: </strong>" . $cursoSeguro . "</span> <br>";

if(isset($_POST["periodo"])){
    $periodo = implode(',' , array_filter($_POST["periodo"]));
    echo "<span> <strong> Periodo: </strong>" . $periodo . "</span> <br>";
}
<?php
    include "Funcao.php";

    $nome = $_POST ["nome"];
    $email = $_POST["email"];
    $nascimento = $_POST["nascimento"];

    $nascimento_corrigido = implode('/', array_reverse(explode('-', $nascimento)));
    $idade = calcularIdade($nascimento);
    
    $anoAtual = date("y");
    $mesAtual = date("n");
    $diaAtual = date("d");

    echo "<html>";
    echo "<head>";
    echo "<link rel = 'stylesheet' type = 'text/css' href = 'estilos.css'>";
    echo "</head>";
    echo "<body>";
    echo "<div class = 'principal'>";
    echo "Nome: $nome <br>";
    echo "Email: $email <br>";
    echo "Data de Nascimento: $nascimento <br>";
    echo "Idade: $idade <br>";
    echo "<p><a href = 'index.html'> Clique aqui </a> Para retornar</p>";
    echo "</div>";
    echo "</body>";
    echo "</html>"
?>
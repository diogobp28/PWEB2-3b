<?php

$conexao = mysqli_connect("localhost", "root", "");
if (!$conexao) die("<h1>Falha na conexão com o Banco de Dados!</h1>");

$db = mysqli_select_db($connect, "pweb");

?>
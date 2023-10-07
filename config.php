<?php

$host = "localhost"; // nome do servidor MySQL
$user = "id21364199_cristaindsm2023"; // usuário do MySQL
$pass = "123Tulio!"; // senha do MySQL
$dbname = "id21364199_cristiandsm2023"; // nome do banco de dados

// Conexão com o banco de dados MySQL
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Verifica se houve erro na conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

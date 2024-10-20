<?php

$servidor = "localhost";
$dbusuario = "root";
$dbsenha = "";
//inserir o nome do banco de dados
$dbname = "geradordecracha";
$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
mysqli_set_charset($conn,  'utf8');
if ($conn) {
    // echo "Coxexão OK";
} else {
    echo "Conexão com o banco Falhou";
}

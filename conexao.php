<?php
//Informações pra conexão
$hostname = "localhost";
$bancodedados = "bancodedados";
$usuario = "root";
$senha = "";

//Instânciando objeto do tipo mysql e fazendo conexão
$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

//Caso erro:
if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>
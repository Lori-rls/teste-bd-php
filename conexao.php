<?php
//Informações pra conexão
$hostname = "localhost";
$bancodedados = "bancodedados";
$usuario = "root";
$senha = "";

//Instânciando objeto do tipo mysql e fazendo conexão
$conn = mysqli_connect($hostname, $usuario, $senha, $bancodedados);

//Caso erro:
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Conexão feita com sucesso \o/";

$sql = "INSERT INTO usuarios (nome, idade) VALUES ('Carla', '69')";

if (mysqli_query($conn, $sql)) {
    echo "\nNovo cadastro feito com sucesso \o/";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
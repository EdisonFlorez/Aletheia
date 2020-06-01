<?php
$host="a2plcpnl0127.prod.iad2.secureserver.net";
$user="EFlorez-B";
$password="Lamxzcpc98.";
$dataBase="Aletheia";

$conectar = mysqli_connect($host,$user,$password,$dataBase,3306);

if (!$conectar) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


//pedir Información
$pedirInfo = "SELECT DISTINCT InfoDesconocida from Enciclopedia";
$resultado = mysqli_query($conectar, $pedirInfo)
		or die ("Insert Error");

while ($row = mysqli_fetch_array($resultado)) {
      echo $row[0]."</br>";
    
};
?>



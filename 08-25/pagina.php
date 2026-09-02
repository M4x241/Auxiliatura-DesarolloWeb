<?php
session_start();
if(isset($_SESSION["vistas"])){
    $_SESSION["vistas"] = 1+ $_SESSION["vistas"];
}else{
    $_SESSION["vistas"] = 0;
}

$nombre = "";
$_GET["nombre"];
$nFavorito = 0;
$tamTabla = $_GET["tam"];

if($_GET["nombre"] != "" ){
    $nombre = $_GET["nombre"];
}else{
    $nombre = "No se envio el campo requerido";
}

if($_GET["favorito"] != "" ){
    $nFavorito = $_GET["favorito"];
}else{
    $nFavorito = "No se envio un numero diferente de 0";
}
echo $nombre;
echo "<br>";
echo $nFavorito;
echo "<br>";
echo $_SESSION["visitas"];
echo "<br>";


echo "<table border='1px'>";
for($j = 0; $j<$tamTabla; $j++){
  echo "<tr>";
    for($i = 0; $i<$tamTabla; $i++){
        echo "<td> $i </td>";
    }
  echo "</tr>";
}
echo "</table>";



?>
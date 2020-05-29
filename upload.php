<?php
include 'conexion.php';

$directorio = 'uploads/';
$archivo = $_FILES['file']['name'];
$direccion = $directorio.basename($archivo);

$archivoGuardar = $_FILES["file"]["tmp_name"];
move_uploaded_file($archivoGuardar, $direccion);


$documento = new DOMDocument();
$documento->loadHTMLFile($direccion);

$clase = 'bookmark bm-color-blue';
$infoDesconocida = array('');
$seleccionEtiqueta = $documento->getElementsByTagName('div');
//creamos el iterador para guardar las palabras en un arreglo
$i=0;
$insertar = "";
foreach ($seleccionEtiqueta as $div) {
    if($div->getAttribute('class')==$clase){
      $palabraDesconocida = $div->getElementsByTagName('p')->item(1)->textContent;
      $infoDesconocida[$i] = $palabraDesconocida;
      $insertar = "INSERT INTO Enciclopedia(InfoDesconocida) VALUES ('$palabraDesconocida')";
      $query  = mysqli_query($conectar,$insertar);
      echo $palabraDesconocida. "<br/>";

    $i++;
    }
}

?>

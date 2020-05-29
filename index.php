<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=DM+Mono:ital,wght@1,300&family=Slabo+27px&display=swap" rel="stylesheet">
    <title> Alétheia  </title>


</head>
<body>
    <h1>Alétheia Enciclopedia</h1>



<table border="2">
    <tr id="header-row" >
        <td>Desconocido</td>
        <td>Aletheia</td>

    </tr>

</table>
    <!--Debería crear una función que compare si hay palabras repetidas y que elimine cualquiera de las dos entradas en caso de que sea correcto-->

<form action="upload.php" method="POST"
      enctype="multipart/form-data">  <!-- ¡No olvides el enctype! -->
  <!-- Campo de selección de archivo -->
  <input  type="file" name="file">
  <input  type="submit" value="Subir documento">

</form>
<div>
<button type="button" onclick="getdestinos()">¡Adentrarse en lo desconocido!</button>
</div>
    <script>

       const rowNames = new Array();


        function getdestinos() {


          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

              let resultadoBusqueda = this.responseText;


              let palabras = resultadoBusqueda.split("</br>");

              let tamaño = palabras.length;
              console.log(tamaño);

              for(let i=0; i<(tamaño-1); i++){
                rowNames[i] = "row"+(1+i);
                var principalTableRows = document.createElement('tr');
                principalTableRows.id = rowNames[i];
                document.querySelector('tbody').appendChild(principalTableRows);

                var principalColumn = document.createElement('td');
                principalColumn.className = "column1";
                principalColumn.style.textTransform = "capitalize";
                //en esta parte creamos el contenido de las filas con los valores
                principalColumn.textContent  = palabras[i];
                document.querySelector('#'+rowNames[i]).appendChild(principalColumn);
            }


            }
          };
          xhttp.open("GET", "conexion.php", true);
          xhttp.send();

        };

    </script>


</div>
<!--

 <canvas id="picker" width="300" height="300" style="border: 2px solid #000000;"></canvas>
    <script>
        var canvasPicker = document.getElementById("picker");
        var ctx = canvasPicker.getContext("2d");

        // Create gradient
        var grd = ctx.createLinearGradient(0,0,100,200)
        grd.addColorStop(0, "red");
        grd.addColorStop(1, "white");

        // Fill with gradient
        ctx.fillStyle = grd;
        ctx.fillRect(10, 10, 150, 80);

    </script>
    -->


</body>

</html>

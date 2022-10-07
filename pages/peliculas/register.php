<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registro</title>
</head>
<body>
   
  <h1>Proceso de registro exitoso</h1>
  <?php

      include '../../bd/conexion.php';

      $id = $_POST['codigoP'];
      $nombre = $_POST['nombreP'];
      $genero = $_POST['generoP'];
      $precio = $_POST['precioP'];

      $sql = "INSERT INTO pelicula(idPelicula, nombrePelicula, generoPelicula, precioTaquilla)
            values ('$id', '$nombre','$genero','$precio')";


        if ($conexion->query($sql) == TRUE) {
          echo "inserción exitosa";
        }
        else{
          echo "inserción rechazada";
        }

    ?>

</body>
</html>

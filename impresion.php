

<?php

include 'estilos.php';
    $codidoPel = $_POST['codigoP'];
    $nombrePel = $_POST['nombreP'];
    $generoPel = $_POST['generoP'];
    $precioPel = $_POST['precioP'];

?>


<h5 class="card-title">Resumen de su pedido</h5>
<p class="card-text">
    <strong>Codigo: </strong> <?php echo $codidoPel ?> <br>
    <strong>Nombre: </strong> <?php echo  $nombrePel ?> <br>
    <strong>Genero: </strong> <?php echo $generoPel ?> <br>
    <strong>Precio:</strong> <?php echo $precioPel ?> <br>
</p>


<?php
    //Manejo de archivos
$file = fopen("impresion.txt","a");
fwrite($file, $codidoPel.";".$nombrePel.";".$generoPel.";".$precioPel.PHP_EOL);
fclose($file);
?>
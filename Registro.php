
 




  <?php
     $nombre= array("william");
$apellido= array("quezada");
$estatus= array("activo");
$carrera= array("Software");
$favorito = array("matematicas");
  ?>
  

<?php 

error_reporting(0);

require_once 'cosas.php';


?>

<?php

$crip5 = serialize($favorito);
  setcookie("migalletas",$crip5 ,time()+86400*365); 
  $devolver5 = unserialize($_COOKIE['migalletas']);
  
$crip6 = serialize($imagen);
setcookie("migalletass",$crip6 ,time()+86400*365); 
$devolver6 = unserialize($_COOKIE['migalletass']);


$crip = serialize($nombre);
  setcookie("migalleta",$crip ,time()+86400*365); 
  $devolver = unserialize($_COOKIE['migalleta']);

$crip2 = serialize($apellido);
  setcookie("mi",$crip2 ,time()+86400*365); 
  $devolver2 = unserialize($_COOKIE['mi']);

$crip3 = serialize($estatus);
  setcookie("miga",$crip3 ,time()+86400*365); 
  $devolver3 = unserialize($_COOKIE['miga']);

$crip4 = serialize($carrera);
  setcookie("migalle",$crip4 ,time()+86400*365); 
  $devolver4 = unserialize($_COOKIE['migalle']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <h4 align= "Center"> Registro de estudiantes:<h4/>
    
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>
   

</head>

<body style="background-color:grey;">
<div id="seccionRecargar"></div>
<form action="#" method="POST">
  
<p>Nombre: <input type="text"  id="nombre" name="nombre" /></p>
<p>Apellido:  <input type="text" id="apellido" name="apellido" /></p>
<p>favorito:  <input type="text" id="favorito" name="favorito" />
Estatus:<input type="checkbox" id="estatus"name="estatus">
<p>Carreras: <select  id ="carrera" name="carrera">
  
<option selected disabled value="">Escoge</option>
<option>Redes</option>
        <option>Software</option>
        <option>Multimedia</option>
        <option>Mecatronica</option>
        <option>Seguridad informatica</option>
</select></p>

<label>Seleccione una imagen:</label><br />
        <input type="file" name="imagen" />

<p><input type="submit"  class="btn btn-primary" name="guardar" onclick="return foo();" value="Aceptar/editar"/>
<input type="reset"  class="btn btn-warning" value="reiniciar">
</p>

</form>


  
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Estado</th>
        <th scope="col">Carrera</th>
        <th scope="col">favorito</th>
        <th scope="col">opciones.</th>
        
      
      </tr>
      </thead>
        <tbody>
        
        
        
      <?php
     

    
    foreach ($devolver as $actual)  { 
    echo "<tr>";
  
    echo "<td>".$actual."</td>";
    }
    foreach($devolver2 as $actual2){  
    echo "<td>".$actual2."</td>";
   }
   foreach($devolver3 as $actual3){   
    echo "<td>".$actual3."</td>";
    }
    ?>
   
    <?php 
     foreach($devolver4 as $actual4)  ?> 
    <?php echo "<td>".$actual4."</td>";?>{  
   <?php foreach($devolver5 as $actual5) ?>{
    <?php echo "<td>".$actual5."</td>";?>
   }
  
    <td>
                           
                            <button id="dos"  name="eliminar"  class="btn btn-danger btn-sm">
                                <i class="material-icons md-18">eliminar</i>
                            </button>
                        </td>
  <?php echo "</tr>"; ?>
  }



 
    
  
   <?php
  
  
  ?>
 
  </tbody>
</table>
 

</div>




 </script>
 <script src="//code.jquery.com/jquery-latest.min.js"></script>
<script src="//norfipc.com/js/jquery.cookie.js"></script>
<script src="//norfipc.com/js/cookiecompliance.js"></script>




<?php 
//index.php 
 
//ubicacion csv 
define('CSV', '100Records.csv'); 
 
//leer csv 
$readCsv = array_map('str_getcsv', file(CSV)); 
?> 
<html> 
 <table border="1"> 
 <?php 
 //recorremos filas del csv 
 foreach ($readCsv as $itemCsv) { 
   echo '<tr>'; 
   //recorremos celdas del csv 
    foreach ($itemCsv as $elementoItemCSV) { 
     echo '<td>'; 
     //mostramos la celda 
     echo $elementoItemCSV; 
     echo '</td>'; 
    } 
    echo '</tr>'; 
   } 
  ?> 
 </table> 
</html> 






<style>
    .md-18{
        font-size: 18px;
    }
</style>
</body>
</html>


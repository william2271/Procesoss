
 




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
    <h4 align= "Center"> Procesos:<h4/>
    
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>
   

</head>

<body style="background-color:grey;">


<h4>En la tabla de abajo se visualiza la informacion de un csv:</h4>


  
 




 </script>
 <script src="//code.jquery.com/jquery-latest.min.js"></script>
<script src="//norfipc.com/js/jquery.cookie.js"></script>
<script src="//norfipc.com/js/cookiecompliance.js"></script>




<?php 

 
define('CSV', '100Records.csv'); 
 

$readCsv = array_map('str_getcsv', file(CSV)); 
?> 

 <table class="table table-dark" border="1"> 
 <?php 
 
 foreach ($readCsv as $itemCsv) { 
   echo '<tr>'; 
   
    foreach ($itemCsv as $elementoItemCSV) { 
     echo '<td>'; 
     
     echo $elementoItemCSV; 
     echo '</td>'; 
    } 
    echo '</tr>'; 
   } 
  ?> 
 </table> 


<a href="100Records.csv">Descargar csv.</a>


<h4>Aqui abajo vemos la informacion de un json:</h4>

<?php 

 
define('JSONlocal', 'json.json');

 

$readJSON = array_map('str_getcsv', file(JSONlocal)); 
?> 

 <table border="1"> 
 <?php 
 
 foreach ($readJSON as $itemCsv) { 
   echo '<tr>'; 
   
    foreach ($itemCsv as $elementoItemCSV) { 
     echo '<td>'; 
     
     echo $elementoItemCSV; 
     echo '</td>'; 
    } 
    echo '</tr>'; 
   } 
  ?> 
 </table> 
 <a href="json.json">Descargar json.</a>
<?php
 $csv = serialize($readCsv); 
  $json = serialize($readJSON);
  

?>
<style>
    .md-18{
        font-size: 18px;
    }
</style>
</body>
</html>


<?php
include 'Registro.php';
error_reporting(0);
$data = array( 
  $_POST['ID'], 
  $_POST['FECHA'], 
  $_POST['Monto'],
  $_POST['Descripcion']
); 


$fp = fopen('100Records.csv', 'a'); 

fputcsv($fp, $data); 

 
fclose($fp); 
header('Location: Registro.php');
?>


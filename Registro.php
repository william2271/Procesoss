<script>

    </script>


<?php 

error_reporting(0);

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


<form action = "cosas.php" onsubmit=location.reload() method = "post">  
              
               <input type = "text" id="ID" name = "ID" hidden />  
                        
              <br><br>  
                    
               <input type = "text" id="Fecha" name = "FECHA" value="<?php  echo date("d-m-Y\ h:i:s");?> " hidden />  
                        
              <br><br> 
                    
              MONTO: <input type = "text" name = "Monto" />  
              <br><br> 
                    
              <input type = "text" id = "Descripcion" name = "Descripcion" hidden />
                    
              <input type = "submit" class="btn btn-outline-warning" onclick= aumentar(); name = "submit" value = "Agregar">  
          </form>  


<h4>En la tabla de abajo se visualiza la informacion de un csv:</h4>

 
 <script src="//code.jquery.com/jquery-latest.min.js"></script>
<script src="//norfipc.com/js/jquery.cookie.js"></script>
<script src="//norfipc.com/js/cookiecompliance.js"></script>
 <script>
document.getElementById("Descripcion").value = "Guardado";
var yo=3;
function aumentar(){


    
yo++
    
    document.getElementById("ID").value = yo;
;
}

</script>


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
 <?php
 
?>
<div> 
<a href="100Records.csv">Descargar csv.</a>

<form action = "convertir.php" onsubmit=location.reload() method = "post">  
           
              <input type = "submit" class="btn btn-danger" name = "submit" value = "Convertir a json">  
          </form>  
          <form action = "serial.php" onsubmit=location.reload() method = "post">  
           
              <input type = "submit" class="btn btn-primary" name = "submit" value = "Convertir a Serializacion">  
          </form>  
</div>
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

<script>
if (window.history.replaceState) { 
    window.history.replaceState(null, null, window.location.href);
}
</script>
<style>
    .md-18{
        font-size: 18px;
    }
</style>
</body>
</html>


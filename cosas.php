<?php


class Fruit {
  public $nombre;
  public $apellido;
  public $estatus;
  public $favorito;
  public $carrera;
  public $imagen;
  
  public function __construct($nombre, $apellido,$estatus,$carrera,$favorito,$imagen,$crip5)
  {
      $this->nombre = $nombre;
      $this->apellido = $apellido;
      $this->carrera = $carrera;
      $this->estatus = $estatus;
      $this->favorito = $favorito;
      $this->imagen = $imagen;
     
  }


}
?>
<script>



function delet(){
<?php
    setcookie("migalleta",$crip ,time()-86400*365); 
    setcookie("mi",$crip2 ,time()-86400*365); 
    setcookie("miga",$crip3 ,time()-86400*365); 
    setcookie("migalle",$crip4 ,time()-86400*365);
    setcookie("migalletas",$crip5 ,time()-86400*365); 
    setcookie("migalletass",$crip6 ,time()-86400*365);
    ?>
    document.getElementById('uno').style.display = 'none';
    document.getElementById('dos').style.display = 'none';
   
    }



    function deleteAllCookies() {
  if(confirm('Estas Seguro que deseas Borrar este Registro?')){

var c = document.cookie.split("; ");
 
 for (i in c) 
  document.cookie =/^[^=]+/.exec(c[i])[0]+"=;expires=Thu, 01 Jan 1970 00:00:00 GMT";  
  
  alert("eliminado con exito,actualize para ver los cambios");  
  document.getElementById('dos').style.display = 'none';


    return true;
   }
   else{
    return false;
   }

 
}



function foo() {

alert("disculpe profesor pero como le deje en el mensaje este boton no funciona pero todos los demas si funcionan.")

   return true;
}



function filtro(){


alert("Estudiantes de software:" + "<?php echo $actual; ?>");

}
function filtro2(){


alert("Estudiantes de redes:" + "<?php echo $áctual; ?>");

}
function filtro3(){

if(Software ==Software){
alert("Estudiantes de multimedia:" + "<?php echo $áctual; ?>");
}
}
function filtro4(){

if(Software ==Software){
alert("Estudiantes de mecatronica:" + "<?php echo $áctual; ?>");
}
}
function filtro5(){

if(Software ==Software){
alert("Estudiantes de seguridad informatica:" + "<?php echo $áctual; ?>");
}
}

  </script>
  


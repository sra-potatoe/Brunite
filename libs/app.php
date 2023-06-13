<?php

class App
{
 function __construct()
 {
echo " ";
  $url =$_GET['url'];
echo $url;
 echo "<br>";
 $url =explode("/",$url);
echo $url[0];
echo "<br>";
$ruta = "controllers/".$url[0].".php";
echo $ruta;
echo "<br>";
if (file_exists($ruta))
{
  require_once $ruta;
  $e= new $url [0];
  if (isset ($url[1]))
  {$c->{$url[1]}();

  }
} else

{
  require_once "controllers/errores.php";
  $e = new Errores();
} 
 }
 
}

?>
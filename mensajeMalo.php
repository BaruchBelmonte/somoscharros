<?php
 
//Establecer el encabezado de actualización utilizando PHP.
header("refresh:3;url=index.php");
 
//Imprima algunos contenidos por ejemplo.

$mensaje = "<h1>Error en el registro. El email ya existe en la base de datos. <br> Espere un momento, será redirigido automáticamente</h1>";
echo $mensaje;
?>
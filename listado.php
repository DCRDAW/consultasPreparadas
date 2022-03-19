
<?php
    require 'php/funciones.php';
    $control=new Funciones();
   
?>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8" >
        <title>Listado de personas</title> 
    </head>
    <body>
       <header>
           <h1>Listado de personas</h1>
       </header>

       <?php
        $array= $control->listado();
        foreach ($array as $key => $elemento) {
            echo "<p>"; 
            echo "nombre=".$elemento["nombre"];
            echo "<br />";
            echo "apellido=".$elemento["apellido"];
            echo "</p>"; 
        }
       ?>
        <a href="index.php"><button>Volver atras</button></a>
    </body>
</html>



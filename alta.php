
<?php
    require 'php/funciones.php';
    $control=new Funciones();
    if(isset($_POST['envio'])){
      $nombre= $_POST["nombre"];
      $apellido= $_POST["apellido"];
      $control->altaPersona($nombre,$apellido);
    }
?>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8" >
        <title>Alta de Personas</title> 
    </head>
    <body>
       <header>
           <h1>Alta de Personas</h1>
       </header>

       <form method="post"  enctype="multipart/form-data" action="" >
           
            <label for="nombre">Nombre</label><br />
            <input type="text" placeholder="Introduce el nombre" name="nombre" required><br />
        
            <label for="imagen">Apellido</label><br />
            <input type="text" name="apellido"><br />
        
            <input type="submit" id="enviar" name="envio">
        </form>
        <a href="index.php"><button>Volver atras</button></a>
    </body>
</html>



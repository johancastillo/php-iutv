<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hola Mundo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles.css">

  </head>
  <body>

    <?php
         //COMENTARIOS
         //VERIFICAR SI EL ENLACE ESTA CORRECTO

         //echo "bienvenidos a php";

         // RECIBIR MENSAJE POR PARTE DEL FORMULARIO
         $nombre = $_POST['name'];
         $apellido = $_POST['lastname'];
         $cedula = $_POST['cedula'];
         $fecha = $_POST['fecha_nacimiento'];

         echo "<h1>Hola <b>$nombre $apellido</b> su cedula es <b>$cedula</b> y naciste el <b>$fecha</b></h1>";
    ?>


  </body>
</html>

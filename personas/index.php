<?php
  require('../libs/conex.php');
  require('../libs/ciudades.lib.php');
  require('../libs/personas.lib.php');
  $link=conectar();
  //print_r($_POST);
  //print_r($_GET);
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Personas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>

  <body>
    <div class="container mt-4">
      <?php
        if (!($_POST) && !($_GET))
        {
          include('list.php');
        }
        elseif ($_GET['mod']=="new")
        {
          $ciudades=mostrarCiudades($link);
          include('form.php');
        }
        elseif ($_GET['mod']=="edit")
        {
          if ($_GET['id'])
          {
            $ciudades=mostrarCiudades($link);
            $res=mostrarPorId($link,$_GET['id']);
            include('form.php');
          }
        }
        elseif ($_GET['mod']=="delete")
        {
          if ($_GET['id']) {
            borrarPersona($link,$_GET);
            include('list.php');
          }

        }elseif ($_POST) {
          if ($_POST['id']==-1)
          {
            $salida= agregarPersona($link,$_POST);
            include('list.php');
            //echo $salida;
          } 
          elseif ($_POST['id']!='') {
            $salida= editarPersona($link,$_POST);
            include('list.php');
          }
        }

        ?>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
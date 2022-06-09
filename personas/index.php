<?php
  require('../libs/conex.php');
  require('../libs/ciudades.lib.php');
  require('../libs/personas.lib.php');
  $link=conectar();
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
    <?php
      include('../libs/menu.php');
    ?>
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
            $errores=[];
            $error=0;

            if ($_POST['cin']=='') {
              $error++;
              array_push($errores, 'El CIN no puede estar vacio');
            }

            if ($_POST['apellido']=='') {
              $error++;
              array_push($errores, 'El apellido no puede estar vacio');
            }

            if ($_POST['nombre']=='') {
              $error++;
              array_push($errores, 'El nombre no puede estar vacio');
            }

            if ($_POST['fenac']=='') {
              $error++;
              array_push($errores,"Debe cargar una fecha");
            }

            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
              $error++;
              array_push($errores,"El email debe ser valido");
            }

            if ($_POST['ciudad_id']=='Elija una opcion') {
              $error++;
              array_push($errores,"Debe seleccionar una ciudad");
            }

            if ($error>0) {
              echo "<div class='container errors' style='margin-top:50px; margin-bottom:30px; padding: 10px; border-radius: 7px; background-color: grey'><center><img src='https://cdn-icons-png.flaticon.com/512/753/753345.png' width='50px'/> <h4 style='color: white;'>Errores encontrados</h4><p style='color: white;'>";
              $cont=count($errores);
              for($i=0; $i<$cont; $i++){
                echo "<span style='text-align: left;'>".$i." ❌ ".$errores[$i]."</span><br>";
              }
              echo "</p></center></div>";
            }else{
              $salida= agregarPersona($link,$_POST);
              include('list.php');
              //echo $salida;
            }
          } elseif ($_POST['id']!='') {
            $errores=[];
            $error=0;

            if ($_POST['cin']=='') {
              $error++;
              array_push($errores, 'El CIN no puede estar vacio');
            }

            if ($_POST['apellido']=='') {
              $error++;
              array_push($errores, 'El apellido no puede estar vacio');
            }

            if ($_POST['nombre']=='') {
              $error++;
              array_push($errores, 'El nombre no puede estar vacio');
            }

            if ($_POST['fenac']=='') {
              $error++;
              array_push($errores,"Debe cargar una fecha");
            }

            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
              $error++;
              array_push($errores,"El email debe ser valido");
            }

            if ($_POST['ciudad_id']=='Elija una opcion') {
              $error++;
              array_push($errores,"Debe seleccionar una ciudad");
            }

            if ($error>0) {
              echo "<div class='container errors' style='margin-top:50px; margin-bottom:30px; padding: 10px; border-radius: 7px; background-color: grey'><center><img src='https://cdn-icons-png.flaticon.com/512/753/753345.png' width='50px'/> <h4 style='color: white;'>Errores encontrados</h4><p style='color: white;'>";
              $cont=count($errores);
              for($i=0; $i<$cont; $i++){
                echo "<span style='text-align: left;'>".$i." ❌ ".$errores[$i]."</span><br>";
              }
              echo "</p></center></div>";
              echo "<div class='mb-3 mt-3'> 
              <a href='$_SERVER[HTTP_REFERER]' class='btn btn-outline-primary col-4'>Ok, volver</a>
              </div>";
            }else{
              $salida= editarPersona($link,$_POST);
              include('list.php');
            }
          }
        }

        ?>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
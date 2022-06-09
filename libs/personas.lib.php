<?php
  function mostrarTodos($link) {
    $sql="SELECT * FROM personas order by id ";
    $resultado = mysqli_query($link, $sql);
    if ($resultado) {
      return $resultado;
    }
  }

  function mostrarPorId($link,$id){
    $sql="SELECT * FROM personas WHERE id=".$id;
    $resultado = mysqli_query($link, $sql);
    if ($resultado) {
      return $resultado;
    }
  }

  function agregarPersona($link,$datos){
    $sql='INSERT INTO personas (cin, nombre, apellido, fenac, email, ciudad_id) values ("'.$datos['cin'] .'", "'.$datos['nombre'] .'", "'.$datos['apellido'] .'", "'.$datos['fenac'] .'", "'.$datos['email'] .'", "'.$datos['ciudad_id'] .'") ';
    $resultado = mysqli_query($link, $sql);
    if ($resultado) { 
      return 1; 
    } else { 
      return 0; 
    }
  }

  function editarPersona($link,$datos){
    $sql='update personas set cin="'.$datos['cin'].'", nombre="'.$datos['nombre'].'", apellido="'.$datos['apellido'].'", fenac="'.$datos['fenac'].'", email="'.$datos['email'].'", ciudad_id="'.$datos['ciudad_id'].'" where id='.$datos['id'];
    $resultado = mysqli_query($link, $sql);
    if ($resultado) {
      return 1; 
    } else { 
      return 0; 
    }
  }

  function borrarPersona($link,$datos ){
    $sql="delete from personas where id=".$datos['id'];
    $resultado = mysqli_query($link, $sql);
    if ($resultado) {
      return 1; 
    } else { 
      return 0; 
    }
  }
?>

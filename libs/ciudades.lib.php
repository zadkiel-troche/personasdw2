<?php
  function mostrarCiudades($link) {
    $sql="SELECT * FROM ciudades order by id ";
    $resultado = mysqli_query($link, $sql);
    if ($resultado) {
      return $resultado;
    }
  }

  function mostrarCiudad($link,$id){
    $sql="SELECT * FROM ciudades WHERE id=".$id;
    $resultado = mysqli_query($link, $sql);
    if ($resultado) {
      return $resultado;
    }
  }

  function agregarCiudad($link,$datos){
    $sql='INSERT INTO ciudades (ciudad) values ("'.$datos['ciudad'] .'") ';
    $resultado = mysqli_query($link, $sql);
    if ($resultado) { 
      return 1; 
    } else { 
      return 0; 
    }
  }

  function editarCiudad($link,$datos){
    $sql='update ciudades set ciudad="'.$datos['ciudad'].'" where id='.$datos['id'];
    $resultado = mysqli_query($link, $sql);
    if ($resultado) {
      return 1; 
    } else { 
      return 0; 
    }
  }

  function borrarCiudad($link,$datos ){
    $sql="delete from ciudades where id=".$datos['id'];
    $resultado = mysqli_query($link, $sql);
    if ($resultado) { 
      return 1; 
    } else { 
      return 0; 
    }
  }

  function nombreCiudad($link,$id){
    $sql="SELECT ciudad  FROM ciudades WHERE id=".$id;
    $resultado = mysqli_query($link, $sql);
    if ($resultado) {
      $d=mysqli_fetch_array($resultado);
      return $d['ciudad'];
    }
  }
?>

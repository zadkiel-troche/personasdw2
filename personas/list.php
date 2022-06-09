<?php
  $res=mostrarTodos($link);
?>

<h3>Personas</h3>


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">CI Nº</th>
      <th scope="col">Apellido</th>
      <th scope="col">Nombre</th>
      <th scope="col">F. Nacimiento</th>
      <th scope="col">Email</th>
      <th scope="col">Ciudad</th>
      <th colspan="2"><a class='btn btn-primary' href="index.php?mod=new">Nuevo</a></th>
    </tr>
  </thead>
  <tbody>
    <?php
      if ($res) {  
        while ($data=mysqli_fetch_array($res))
        {
          echo "<tr><th scope='row'>".$data['id']."</th><td>".$data['cin']."</td><td>".$data['apellido']."</td><td>".$data['nombre']."</td><td>".$data['fenac']."</td><td>".$data['email']."</td><td>".nombreCiudad($link,$data['ciudad_id'])."</td><td><a class='btn btn-warning' href='index.php?mod=edit&id=".$data["id"]."'>Editar</a></td><td><a class='btn btn-danger' href='index.php?mod=delete&id=".$data["id"]."'>Borrar</a></td></tr>";
        }
      }
    ?>
  </tbody>
</table>

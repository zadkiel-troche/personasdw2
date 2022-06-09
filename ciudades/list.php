<?php
  $res=mostrarCiudades($link);
?>

<h3>Ciudades</h3>
<table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Ciudad</th>
      <th colspan="2"><a class='btn btn-primary' href="index.php?mod=new">Nuevo</a></th>
    </tr>
  </thead>
  <tbody>
    <?php
      if ($res) {
        while ($data=mysqli_fetch_array($res))
        {
          echo "<tr><td>".$data[0]."</td><td>".$data['ciudad']."</td><td><a class='btn btn-warning' href='index.php?mod=edit&id=".$data["id"]."'>Editar</a></td><td><a class='btn btn-danger' href='index.php?mod=delete&id=".$data["id"]."'>Borrar</a></td></tr>";
        }
      }
    ?>
  </tbody>
</table>

<?php
  $res=mostrarCiudades($link);
?>

<h3>Ciudades</h3>
<table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Ciudad</th>
      <th colspan="1">
        <a class='btn btn-primary' href="index.php?mod=new" title="agregar">
          <i class='bx bxs-comment-add'></i>
        </a>
      </th>
      <th colspan="1">
        <a class='btn btn-primary' href="./json.php" title="JSON">
          <i class='bx bxs-file-json'></i>
        </a>
      </th>
    </tr>
  </thead>
  <tbody>
    <?php
      if ($res) {
        while ($data=mysqli_fetch_array($res))
        {
          echo "<tr><td>".$data[0]."</td><td>".$data['ciudad']."</td><td><a class='btn btn-warning' title='editar' href='index.php?mod=edit&id=".$data["id"]."'><i class='bx bx-edit-alt' ></i></a></td><td><a class='btn btn-outline-info' title='JSON' href='./json.php?id=".$data["id"]."'><i class='bx bxs-file-json'></i></a></td><td><a class='btn btn-danger' title='eliminar' href='index.php?mod=delete&id=".$data["id"]."'><i class='bx bx-trash' ></i></a></td></tr>";
        }
      }
    ?>
  </tbody>
</table>

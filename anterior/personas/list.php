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
      <th colspan="1"><a class='btn btn-primary' href="index.php?mod=new" title="nuevo"><i class='bx bxs-comment-add'></i></a></th>
      <th colspan="1"><a class='btn btn-outline-info' href="./json.php" title="JSON"><i class='bx bxs-file-json'></i></a></th>
    </tr>
  </thead>
  <tbody>
    <?php
      if ($res) {  
        while ($data=mysqli_fetch_array($res))
        {
          echo "<tr><th scope='row'>".$data['id']."</th><td>".$data['cin']."</td><td>".$data['apellido']."</td><td>".$data['nombre']."</td><td>".$data['fenac']."</td><td>".$data['email']."</td><td>".nombreCiudad($link,$data['ciudad_id'])."</td><td><a class='btn btn-warning' title='editar' href='index.php?mod=edit&id=".$data["id"]."'><i class='bx bx-edit-alt' ></i></a></td><td><a class='btn btn-outline-info' title='JSON' href='./json.php?id=".$data["id"]."'><i class='bx bxs-file-json'></i></a></td><td><a class='btn btn-danger' href='index.php?mod=delete&id=".$data["id"]."'><i class='bx bx-trash' ></i></a></td></tr>";
        }
      }
    ?>
  </tbody>
</table>

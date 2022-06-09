<?php
  if ($res){
    $data=mysqli_fetch_array($res);
  }
?>

<h3>Personas</h3>
<form class="form-control mb-4" action="index.php" method="post">
  <input type="hidden" name="id" value="<?php if ($data['id']){ echo $data['id'];  } else { echo -1;} ?>">  <br>

  <label for="cin">CI Nº</label><br>
  <input class="form-control" type="text" name="cin" value="<?php if ($data['cin']){ echo $data['cin'];} ?>"><br>

  <label for="apellido">Apellido</label><br>
  <input class="form-control" type="text" name="apellido" value="<?php if ($data['apellido']){ echo $data['apellido'];} ?>"><br>

  <label for="nombre">Nombre</label><br>
  <input class="form-control" type="text" name="nombre" value="<?php if ($data['nombre']){ echo $data['nombre'];} ?>"><br>

  <label for="fenac">F. Nacimiento</label><br>
  <input class="form-control" type="date" name="fenac" value="<?php if ($data['fenac']){ echo $data['fenac'];} ?>"><br>

  <label for="email">Email</label><br>
  <input class="form-control" type="text" name="email" value="<?php if ($data['email']){ echo $data['email'];} ?>"><br>

  <label for="ciudad_id">Ciudad</label><br>
  <input class="form-control" type="text" name="ciudad_id" value="<?php if ($data['ciudad_id']){ echo $data['ciudad_id'];} ?>" hidden>
  <select class="form-control mb-3" name="ciudad_id">
    <option>Elija una opcion</option>
    <?php
    while ($d=mysqli_fetch_array($ciudades))
    {
      $sel='';
      if ($data['ciudad_id'] & ($d['id']==$data['ciudad_id']) )
        { $sel="selected='true'";}
      echo "<option  value='".$d['id']."'".$sel.">".$d['ciudad']."</option>";
    }
     ?>
  </select>
  <div class="container mb-3">
    <div class="row" align="center">
      <button type="submit" class="btn btn-primary col-5">Guardar</button>
      <div class="col-2"></div>
      <a href="index.php" class="btn btn-outline-secondary col-5">Volver</a>
    </div>
  </div>
</form>

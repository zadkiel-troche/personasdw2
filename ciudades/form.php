<?php
  if ($res){
    $data=mysqli_fetch_array($res);
  }
?>

<h3>Ciudad</h3>
<form class="form-control" action="index.php" method="post">
  <input type="hidden" name="id" value="<?php if ($data['id']){ echo $data['id'];  } else { echo -1;} ?>">  <br>
  
  <div class="mb-3">
    <label for="ciudad" class="form-label">Ciudad</label>
    <input type="text" name="ciudad" class="form-control" id="ciudad" value="<?php if ($data['ciudad']){ echo $data['ciudad'];} ?>">
  </div>
  <div class="container mb-3">
    <div class="row" align="center">
      <button type="submit" class="btn btn-primary col-5">Guardar</button>
      <div class="col-2"></div>
      <a href="index.php" class="btn btn-outline-secondary col-5">Volver</a>
    </div>
  </div>
</form>

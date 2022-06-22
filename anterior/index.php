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
      <h3>Bienvenido</h3>
      <p>Elija una opcion del menú principal</p>

      <div class="container">
        <div class="row">

          <div class="col-6">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Personas</h5>
                <h6 class="card-subtitle mb-2 text-muted">Puede Cargar/Editar/Borrar</h6>
                <p class="card-text">Aqui podra ver la lista de personas registradas en su base de datos.</p>
                <a href="personas/index.php" class="card-link btn btn-primary col-12">Ir a Personas</a>
              </div>
            </div> 
          </div>

          <div class="col-6">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Ciudades</h5>
                <h6 class="card-subtitle mb-2 text-muted">Puede Cargar/Editar/Borrar</h6>
                <p class="card-text">Aqui podra ver la lista de ciudades registradas en su base de datos.</p>
                <a href="ciudades/index.php" class="card-link btn btn-primary col-12">Ir a Ciudades</a>
              </div>
            </div> 
          </div>

        </div>
      </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
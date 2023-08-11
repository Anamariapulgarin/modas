<?php
//capturo la variale que viene del formulario con la llave primaria
$id=$_GET['id'];
include 'Conexion.php';
//creo la consulta
$query="SELECT * FROM Diseñador WHERE Iddiseñador=$id";
//ejecuto la consult con la funcion
$cons =mysqli_query($conn,$query);
//convierto el resultado en vector para acceder 
//facilmente a los datos 
$fila = mysqli_fetch_array($cons);
echo $fila[1];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/boostrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .boton{
            background-color: white;
            color: black;
        }
        .boton:hover{
            background-color: black;
            color: white;
        }
        input{
            border-radius: 10px;
        }
        form{
          WIDTH: 389PX;
        }
    </style>
</head>
    <center>
    <title>DATOS DISEÑADOR</title>
<body style="background-image: linear-gradient(180deg, #f2bfff 0, #d5aeff 25%, #b99df2 50%, #9e8cd6 75%, #867bbc 100%);"></body>" 
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="">DISEÑOS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-ion"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="mostrarAutores.php">MOSTRAR</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="actualizar.php">FOTOS</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                PUBLICACIONES
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">MODA</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav></body>
   <h1><font face= "Cooper Black" style="color:Brown"> DATOS DISEÑADOR</font></h1></b>
    <form action="registro.php" method="post"   >
        <h3> NOMBRE COMPLETO </h3>
        <input class="form-control"  type="text" name=" Nombre" placeholder="Nombre" > <br><br>
        <h3>CORREO</h3>
        <input class="form-control" type="text" name="Correo" placeholder="Correo"><br><br>
        <h3>CONTRASEÑA</h3>
        <input class="form-control" type="password" name="Contraseña" placeholder="Contraseña"><br><br>
        <h3> FECHA PUBLICACION</h3>
        <input class="form-control"  type="date" name=" Fecha_publicacion" placeholder="Fceha_publicacion" > <br><br>
        <h3> IDENTIFICACION</h3>
        <input class="form-control"  type="number" name=" Identificacion" placeholder="Identificacion" > <br><br>
        <h3> TELEFONO</h3>
        <input class="form-control"  type="number" name=" Telefono" placeholder="Telefono" > <br><br>
        <h3> PRECIO </h3>
        <input class="form-control"  type="decimal" name=" Precio" placeholder="Precio" > <br>
        <br>
        <input class="form-control" type="submit" name="btn" values="ENVIAR" class="boton"><br><br>
        <input class="form-control" type="reset" values="CANCELAR" class="boton"><br><br>
    </form>
 </center>
</body>
</html>
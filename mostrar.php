<?php
include 'Conexion.php';
$consult ="SELECT * FROM Diseñador";
$resultado =mysqli_query($conn,$consult);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Mostrar Diseñadores</title>
    <style>
    </style>
</head>
<body>
    
    <div class="container">
    <div style="text-align:center;">
    <h1> Mostrar Diseñadores</h1>
    <fieldset style="background-color:black;"> 
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
            <th>Iddiseñador</th>
            <th>NOMBRE_COMPLEYO</th>
            <th>CORREO</th>
            <th>CONTRASEÑA</th>
            <th>FECHA_PUBLICACION</th>
            <th>IDENTIFICACION</th>
            <th>TELEFONO</th>
            <th>PRECIO</th>
                </tr>
            </thead>
            <tbody>
        <?php
        while($vec=mysqli_fetch_array($resultado)){?>
        <tbody>
            <tr>
                <td><?Php echo $vec[0]?></td>
                <td><?Php echo $vec[1]?></td>
                <td><?Php echo $vec[2]?></td>
                <td><?Php echo $vec[3]?></td>
                <td><?Php echo $vec[4]?></td>
                <td><?Php echo $vec[5]?></td>
                <td><?Php echo $vec[6]?></td>
                <td><?Php echo $vec[7]?></td>
                <td>
<!--//creo un hipevinculo y mando una variable con la pk por el meodo GET-->
<a href="frdiseñador.php?id=<?php echo $vec[0] ?>"> Act</a>
<a href="">Elim</a>
                </td> 
            </tr>
        </tbody>
<?php   } ?>

    </table>
   
        </fieldset>
        </div>
    </body>
</html>
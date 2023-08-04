<?php
//verifico que vengan datos de un fomulario
if(isset($_POST['btn'])) {
    //incluyo el archivo de conexion para acceder ala vblede conexion
    include'Conexion.php';
    //capturo los datos que vienen del fomulario
    $Nombre_completo     =   $_POST['Nombre_completo'];
    $Correo              =   $_POST['Correo'];
    $Contraseña          =   $_POST['Contraseña'];
    $Fecha_publicacion   =   $_POST['Fecha_publicacion'];
    $Identificacion      =   $_POST['Identificacion'];
    $Telefono            =   $_POST['Telefono'];
    $Precio              =   $_POST['Precio'];

    $consulta ="UPDATE Diseñador SET iddiseñador='$id',Nombre_completo='$Nombre_completo',Correo='$Correo',Contraseña='$Contraseña',Fecha_publicacion='$Fecha_publicacion',Identificacion='$Identificacion',Telefono='$Telefono',Precio='$Precio' WHERE iddiseñador='$id'; 
    $query =mysqli_query($conn,$consulta);

    if($query){
        echo"se guardo el registro del autor";
        echo"<a href='formulario.html'>volver al formulario</a>";
    }else{
        secho"Tienes un error en la consulta";
    }
}else{
    echo"LLENE LOS DATOS EN EL FORMULARIO ";
}
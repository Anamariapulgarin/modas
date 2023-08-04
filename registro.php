<?php
//verifico que vengan datos de un fomulario
if(isset($_POST['btn'])) {
    //incluyo el archivo de conexion para acceder ala vblede conexion
    include'Conexion.php';
    //capturo los datos que vienen del fomulario
    $Nombre_completo   =   $_POST['Nombre_completo'];
    $Correo            =   $_POST['Correo'];
    $Contraseña        =   $_POST['Contraseña'];
    $Fecha_publicacion =   $_POST['Fecha_publicacion'];
    $Identificacion    =   $_POST['Identificaion'];
    $Telefono          =   $_POST['Telefono'];
    $Precio            =   $_POST['Precio'];
    
    $consulta ="INSERT INTO Diseñador(Nombre_completo,Correo,Contraseña,Fecha_publicacion,Identificacion,Telefono,Precio)
                values('$Nombre_completo','$Correo','$Contraseña','$Fecha_publicacion','$Identificacion','$Telefono','$Precio')";
    $query =mysqli_query($conn,$consulta);

    if($query){
        echo"se guardo el registro del autor";
        echo"<a href='Formulario.html'>volver al formulario</a>";
    }else{
        echo"Tienes un error en la consulta";
    }
}else{
    echo"LLENE LOS DATOS EN EL FORMULARIO ";
}

    
<?php
if(isset($_POST['botonenvio'])){
   $datos = $_POST['datos'];
$nombre = htmlspecialchars($datos['nombre']);
$contrasenia = $datos['contrasenia'];
$fechanac = $datos['fecha'];
$nomtienda = $datos['poblacion'];
if (isset($datos['edad'])) {
    $edad = $datos['edad'];
} else {
    $edad = "No introducida";
}
if (isset($datos['suscripcion'])) {
    $suscripcion = "Solicitada";
} else {
    $suscripcion = "No solicitada";
} 
}
else{
    header('Location: http://localhost:8000');  
}



?>

<!DOCTYPE html>
<html>
    <head>   
        <title>Datos del Formulario</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <style>
            .data {
                color: brown;
                display: block;
            }
        </style>
    </head>
    <body>
        <h1>
            Sus datos son los siguientes: <br/> <br/>
            Nombre: <em class='data'><?php echo $nombre ?></em>
            Contraseña: <em class='data'><?php echo $contrasenia ?></em>
            Fecha de nacimiento: <em class='data'><?php echo $fechanac ?></em>
            Tienda: <em class='data'><?php echo $nomtienda ?></em>
            Edad: <em class='data'><?php echo $edad ?></em>
            Suscripción: <em class='data'><?php echo $suscripcion ?></em>
        </h1>
    </body>
</html>



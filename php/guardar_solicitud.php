<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $agente = $_POST['agente'];
    $propiedad = $_POST['propiedad'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];

    $fecha = date('Y-m-d', strtotime(str_replace('/', '-', $fecha)));


    $query = "INSERT INTO solicitudes(nombre_completo, correo, agente, propiedad, fecha, hora)
                VALUES('$nombre_completo', '$correo', '$agente', '$propiedad', '$fecha', '$hora')";



    //verificación de hora
    $verificar_hora = mysqli_query($conexion, "SELECT * FROM solicitudes WHERE hora='$hora' ");
    if (mysqli_num_rows($verificar_hora) >0 ){
        echo '
            <script>
                alert("Esta hora ya ha sido ocupada, intente con una hora diferente");
                window.location = "../contact.php";
            </script>
        ';
        exit();
    }


    $ejecutar = mysqli_query($conexion, $query);


    if($ejecutar){
        echo '
            <script>
                alert("Solicitud guardada exitosamente");
                window.location = "../contact.php";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("Error al guardar la solicitud: ' . mysqli_error($conexion) . '");
                window.location = "../contact.php";
            </script>
        ';
    }

    mysqli_close($conexion);


?>

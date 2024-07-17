<?php
session_start();
include 'conexion_be.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// Encriptar la contraseña ingresada
$contrasena_encriptada = hash('sha256', $contrasena);

// Modificar la consulta para usar la contraseña encriptada
$validar_log = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' 
AND contrasena='$contrasena_encriptada'");

if(mysqli_num_rows($validar_log) > 0){
    $_SESSION['usuario'] = $correo;
    header("location: ../index.php");
    exit();
} else {
    echo '
        <script>
            alert("Correo o contraseña inválidos, por favor verifique los datos");
            window.location = "../log_reg.php";
        </script>
    ';
    exit();
}
?>
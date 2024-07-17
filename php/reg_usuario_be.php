<?php
include 'conexion_be.php';

// Check if any required field is empty
if (empty($_POST['nombre_completo']) || empty($_POST['correo']) || empty($_POST['usuario']) || empty($_POST['contrasena'])) {
    echo '
        <script>
            alert("Todos los campos son obligatorios. Por favor, complete todos los campos.");
            window.location = "../log_reg.php";
        </script>
    ';
    exit();
}

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$contrasena = hash('sha256', $contrasena);

$query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
            VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";

//verificación de correo
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");
if (mysqli_num_rows($verificar_correo) > 0) {
    echo '
        <script>
            alert("Este correo ya ha sido registrado, intente con uno diferente");
            window.location = "../log_reg.php";
        </script>
    ';
    exit();
}

//verificación de usuario
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");
if (mysqli_num_rows($verificar_usuario) > 0) {
    echo '
        <script>
            alert("Este usuario ya ha sido registrado, intente con uno diferente");
            window.location = "../log_reg.php";
        </script>
    ';
    exit();
}

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
        <script>
            alert("Usuario registrado exitosamente");
            window.location = "../log_reg.php";
        </script>
    ';
} else {
    echo '
        <script>
            alert("Hubo un error, por favor intentelo de nuevo");
            window.location = "../log_reg.php";
        </script>
    ';
}

mysqli_close($conexion);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Agency T&J</title>
    <link href="" rel="icon">
    <link rel="stylesheet" href="styleL.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<main>
    <div class="contenedor__todo">
        <div class="caja__trasera">
            <div class="caja__trasera-login">
                <h3>¿Ya tienes una cuenta?</h3>
                <p>Inicia sesión para entrar en la página</p>
                <button id="btn__iniciar-sesion">Iniciar Sesión</button>
            </div>
            <div class="caja__trasera-register">
                <h3>¿Aún no tienes una cuenta?</h3>
                <p>Regístrate para que puedas iniciar sesión</p>
                <button id="btn__registrarse">Regístrarse</button>
            </div>
        </div>

        <div class="contenedor__login-register">
            <!--Login-->
            <form action="php/log_usuario_be.php"  method="POST" class="formulario__login">
                <h2>Iniciar Sesión</h2>
                <input type="text" id="loginEmail" placeholder="Correo Electronico" name="correo">
                <input type="password" id="loginPassword" placeholder="Contraseña" name="contrasena">
                <button>Entrar</button>
            </form>

            <!--Register-->
            <form action="php/reg_usuario_be.php" method="POST" class="formulario__register">
                <h2>Regístrarse</h2>
                <input type="text" id="registerName" placeholder="Nombre completo" name="nombre_completo">
                <input type="text" id="registerEmail" placeholder="Correo Electronico" name="correo">
                <input type="text" id="registerUsername" placeholder="Usuario" name="usuario">
                <input type="password" id="registerPassword" placeholder="Contraseña" name="contrasena">
                <button>Regístrarse</button>
            </form>
        </div>
    </div>
</main>

<script>
    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    function validateLogin() {
        const email = document.getElementById('loginEmail').value;
        const password = document.getElementById('loginPassword').value;

        if (email === "" || password === "") {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Todos los campos son obligatorios.'
            });
            return false;
        }
        if (!validateEmail(email)) {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Por favor, ingrese un correo electrónico válido.'
            });
            return false;
        }
        return true;
    }

    function validateRegister() {
        const name = document.getElementById('registerName').value;
        const email = document.getElementById('registerEmail').value;
        const username = document.getElementById('registerUsername').value;
        const password = document.getElementById('registerPassword').value;

        if (name === "" || email === "" || username === "" || password === "") {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Todos los campos son obligatorios.'
            });
            return false;
        }
        if (!validateEmail(email)) {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Por favor, ingrese un correo electrónico válido.'
            });
            return false;
        }
        return true;
    }

    document.getElementById('loginButton').addEventListener('click', function() {
        if (validateLogin()) {
            window.location.href = 'index.html';
        }
    });

    document.getElementById('registerButton').addEventListener('click', function() {
        if (validateRegister()) {
            Swal.fire({
                icon: 'success',
                title: '¡Registro exitoso!',
                text: 'Ahora puedes iniciar sesión.'
            });
            // Redirigir al usuario o enviar el formulario
        }
    });
</script>

<script src="assets/js/log_reg.js"></script>

</body>
</html>



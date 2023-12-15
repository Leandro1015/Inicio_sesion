<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario de Inicio de Sesión</title>
        <style>
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background-color: #f2f2f2;
                margin: 0;
                padding: 0;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
            }

            .container {
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            form {
                background-color: #fff;
                padding: 40px;
                border-radius: 8px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
                width: 300px;
                margin-top: 20px;
            }

            h2 {
                color: #3498db;
                margin-bottom: 20px;
            }

            label {
                display: block;
                margin: 15px 0 5px;
                color: #555;
            }

            input {
                width: 100%;
                padding: 10px;
                margin-bottom: 20px;
                box-sizing: border-box;
                border: 1px solid #ccc;
                border-radius: 4px;
            }

            input[type="submit"] {
                background-color: #3498db;
                color: #fff;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            input[type="submit"]:hover {
                background-color: #2980b9;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h2>Iniciar Sesión</h2>
            <form action="index.php?accion=iniciarSesion&controlador=iniciar_sesion" method="post">
                <label for="correo">Correo electrónico:</label>
                <input type="email" name="correo" required><br>

                <label for="contrasena">Contraseña:</label>
                <input type="password" name="contrasena" required><br>

                <input type="submit" name="iniciar_sesion" value="Iniciar Sesión">
            </form>
            <!-- Botón o enlace para redirigir a registrar.php -->
            <a href="registrar.php">Registrar</a>
        </div>
    </body>
</html>

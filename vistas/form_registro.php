<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario de Registro</title>
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
                text-align: center;
            }

            h1 {
                color: #333;
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
            <h1>Formulario de Registro</h1>
            <form action="registro.php" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" required><br>

                <label for="correo">Correo:</label>
                <input type="email" name="correo" required><br>

                <label for="contrasena">Contraseña:</label>
                <input type="password" name="contrasena" required><br>

                <input type="submit" value="Registrarse">
            </form>
        </div>
    </body>
</html>

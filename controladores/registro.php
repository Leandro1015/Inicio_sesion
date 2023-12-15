<?php
    require_once 'modelo.php';

    class Registro
    {
        private $modelo;

        public function __construct()
        {
            $this->modelo = new Modelo();
        }

        public function registrarUsuario($nombre, $correo, $contrasena)
        {
            $exito = $this->modelo->registrarUsuario($nombre, $correo, $contrasena, 'usuario');

            if ($exito) {
                echo "Usuario registrado correctamente.";
            } else {
                echo "Error al registrar el usuario.";
            }
        }
    }

    // Obtener datos del formulario y realizar acciones según el caso
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['registrar_usuario'])) {
        $registroController = new RegistroController();

        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];

        $registroController->registrarUsuario($nombre, $correo, $contrasena);
    }
?>

<?php
    require_once 'modelos/modelo.php';

    class InicioSesion
    {
        private $modelo;

        public function __construct()
        {
            $this->modelo = new Modelo();
        }

        

        public function iniciarSesion($correo, $contrasena)
        {
            $usuario = $this->modelo->iniciarSesion($correo, $contrasena);

            if ($usuario) {
                // Guardar información del usuario en sesiones o cookies según sea necesario
                $_SESSION['usuario'] = $usuario;

                // Redireccionar según el perfil del usuario
                $this->redireccionarSegunPerfil($usuario['perfil']);
            } 
            else {
                echo "Error al iniciar sesión.";
            }
        }

        private function redireccionarSegunPerfil($perfil)
        {
            switch ($perfil) {
                case 1:
                    // Redireccionar a página de juego
                    header("Location: juego.php");
                    break;
                case 2:
                    // Redireccionar a panel de administrador
                    header("Location: administrador.php");
                    break;

                default:
                    // Redireccionar a una página por defecto
                    header("Location: index.php");
                    break;
            }
        }
    }

    // Obtener datos del formulario y realizar acciones según el caso
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['iniciar_sesion'])) {
        $inicioSesion = new InicioSesion();  // Corregido aquí

        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];

        $inicioSesion->iniciarSesion($correo, $contrasena);
    }
?>
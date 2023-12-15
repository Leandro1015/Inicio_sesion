<?php
    require_once 'conexion.php';

    class Modelo extends Conexion
    {
        public function registrarUsuario($nombre, $correo, $contrasena, $perfil)
        {
            $sql = "INSERT INTO iniciosesion (nombre, correo, contrasena, perfil) VALUES ('$nombre', '$correo', '$contrasena', '$perfil')";
            $exito = $this->conexion->query($sql);

            $this->conexion->close();

            return $exito;
        }

        public function iniciarSesion($correo, $contrasena)
        {
            $sql = "SELECT idusuario, nombre, contrasena, perfil FROM iniciosesion WHERE correo = '$correo'";
            $resultado = $this->conexion->query($sql);

            if ($resultado->num_rows > 0) {
                $fila = $resultado->fetch_assoc();
                if ($contrasena === $fila['contrasena']) {
                    return $fila;
                }
            }

            $this->conexion->close();

            return false;
        }
    }
?>

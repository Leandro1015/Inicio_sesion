<?php
    ini_set('display_errors', 1);

    require_once 'config/configdb.php';
    require_once 'modelos/modelo.php';
    require_once 'config/configVal.php';
    
    // Verifica si los parámetros iniciar_sesion y accion están presentes en la URL
    if (!isset($_GET["InicioSesion"])) {
        $_GET["InicioSesion"] = constant("CONTROLADOR_POR_DEFECTO");
    }

    if (!isset($_GET["accion"])) {
        $_GET["accion"] = constant("ACCION_POR_DEFECTO");
    }

    // Construye la ruta al archivo del controlador en función del parámetro iniciar_sesion
    $rutaControlador = 'controladores/' . $_GET["InicioSesion"] . '.php';

    // Verifica si existe el controlador, si no, utiliza el controlador por defecto
    if (!file_exists($rutaControlador)) {
        $rutaControlador = 'controladores/' . constant("CONTROLADOR_POR_DEFECTO") . '.php';
    }

    // Incluye el archivo del controlador
    require_once $rutaControlador;

    // Verifica si la clave "iniciar_sesion" está presente en $_GET
    $nombreInicioSesion = isset($_GET["iniciar_sesion"]) ? $_GET["iniciar_sesion"] : "iniciar_sesion";

    // Crea una instancia del controlador correspondiente
    $inicioSesion = new $nombreInicioSesion();


    // Verifica si el método (acción) especificado en la URL está definido en el controlador
    // Si está definido, ejecuta la acción y almacena los resultados en $datosAVista
    $datosAVista["data"] = array();
    if (method_exists($inicioSesion, $_GET["accion"])) {
        $datosAVista["data"] = $inicioSesion->{$_GET["accion"]}();
    }

    // Carga las vistas
    // Incluye la vista específica del controlador
    require_once 'vistas/' . $inicioSesion->vista . '.php';
?>

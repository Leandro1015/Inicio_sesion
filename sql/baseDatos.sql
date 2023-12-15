CREATE TABLE us_admin (
  `idusuario` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `contrasenia` varchar(100) NOT NULL,
  `perfil` varchar(30) NOT NULL,
  CONSTRAINT pk_usuario PRIMARY KEY (idusuario)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
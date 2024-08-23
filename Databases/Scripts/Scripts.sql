CREATE TABLE  cargo (
    id_cargo INT(11) NOT NULL AUTO_INCREMENT,
    descripcion VARCHAR(250) NOT NULL,
    PRIMARY KEY (id_cargo)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE  usuarios (
    id_usuarios INT(11) NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    usuario VARCHAR(50) NOT NULL UNIQUE,
    contraseña VARCHAR(64) NOT NULL,
    correo VARCHAR(50) NOT NULL UNIQUE,
    fecha_reg DATETIME NOT NULL,
    id_cargo INT(11) NOT NULL,
    PRIMARY KEY (id_usuarios),
    FOREIGN KEY (id_cargo) REFERENCES cargo(id_cargo)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE reportes (
    id_reporte INT(11) NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    apellidopat VARCHAR(50) NOT NULL,
    apellidomat VARCHAR(50) NOT NULL,
    telefono INT(11) NOT NULL,
    numtoma INT(11) NOT NULL,
    direccion VARCHAR(255) NOT NULL,
    tipo_problema VARCHAR(255) NOT NULL,
    descripcion VARCHAR(255) NOT NULL,
    fecha_reg DATETIME NOT NULL,
    id_usuarios INT(11) NOT NULL,
    estado_reporte VARCHAR(50) NOT NULL DEFAULT 'Pendiente',
    PRIMARY KEY (id_reporte),
    FOREIGN KEY (id_usuarios) REFERENCES usuarios(id_usuarios)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


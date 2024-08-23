-- Trigger: before_insert_reportes
-- Evento: BEFORE INSERT
-- Tabla: reportes
-- Descripción: Este trigger asigna automáticamente la fecha y hora actuales 
-- al campo fecha_reg de la tabla reportes, antes de que se inserte un nuevo registro.
DELIMITER //
CREATE TRIGGER before_insert_reportes
BEFORE INSERT ON reportes
FOR EACH ROW
BEGIN
    SET NEW.fecha_reg = NOW();
END;
//
DELIMITER ;


-- ******************************************************************************************************--

-- Trigger: before_insert_usuarios
-- Evento: BEFORE INSERT
-- Tabla: usuarios
-- Descripción: Este trigger encripta la contraseña ingresada por el usuario 
-- utilizando el algoritmo SHA-256 antes de almacenarla en la tabla usuarios.
DELIMITER //
CREATE TRIGGER before_insert_usuarios
BEFORE INSERT ON usuarios
FOR EACH ROW
BEGIN
    SET NEW.contraseña = SHA2(NEW.contraseña, 256);
END;
//
DELIMITER ;

-- ******************************************************************************************************--

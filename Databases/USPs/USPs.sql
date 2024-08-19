-- ******************************************************************************************************--

-- Procedimiento Almacenado: Cambiar el estado de un reporte
-- Este procedimiento permite cambiar el estado de un reporte específico.
-- Recibe como parámetros el ID del reporte y el nuevo estado.
DELIMITER //
CREATE PROCEDURE actualizar_estado_reporte(IN id INT, IN nuevo_estado VARCHAR(50))
BEGIN
    UPDATE reportes 
    SET estado_reporte = nuevo_estado 
    WHERE id_reporte = id;
END //
DELIMITER ;

-- Para ejecutar el procedimiento:
CALL actualizar_estado_reporte(6, 'completado');

-- ******************************************************************************************************--

-- Procedimiento almacenado 'sp_RegistrarAdministrador'
-- Parámetros de entrada: Nombre, Apellido_P, Apellido_M, Correo, Telefono
CREATE PROCEDURE insertar_usuario (
    IN p_Nombre VARCHAR(50),
    IN p_Apellido_P VARCHAR(50),
    IN p_Apellido_M VARCHAR(50),
    IN p_Correo VARCHAR(100),
    IN p_Numero_de_Toma VARCHAR(20),
    IN p_Contrasena VARCHAR(255),
    IN p_Rol VARCHAR(20)  -- Asume que el rol es pasado como 'Cliente' o 'Administrador'
)
BEGIN
    -- Insertar un nuevo usuario en la tabla `usuarios`
    INSERT INTO usuarios (nombre,apellido_paterno,apellido_materno,correo_electronico,numero_de_toma,contrasena,id_rol) 
    VALUES ( p_Nombre, p_Apellido_P,  p_Apellido_M, p_Correo, p_Numero_de_Toma, p_Contrasena, 
        (SELECT id_rol FROM roles WHERE nombre_rol = p_Rol)
    );
END

-- ******************************************************************************************************--

-- Insertar reportes
CREATE PROCEDURE insertar_reporte (
    IN p_Id_Usuario INT,
    IN p_Nombre_Completo VARCHAR(150),
    IN p_Telefono VARCHAR(15),
    IN p_Numero_de_Toma VARCHAR(20),
    IN p_Correo_Electronico VARCHAR(100),
    IN p_Direccion VARCHAR(255),
    IN p_Tipo_de_Problema ENUM('Falta de Agua', 'Baja Presión', 'Infraestructura Dañada'),
    IN p_Descripcion_Problema TEXT
)
BEGIN
    -- Insertar un nuevo reporte en la tabla `reportes`
    INSERT INTO reportes (id_usuario, nombre_completo, telefono, numero_de_toma, correo_electronico,
    direccion, tipo_de_problema, descripcion_del_problema) 
    VALUES (p_Id_Usuario,p_Nombre_Completo,  p_Telefono,p_Numero_de_Toma,p_Correo_Electronico,p_Direccion,
    p_Tipo_de_Problema, p_Descripcion_Problema);
    
    -- Insertar el estado inicial 'Pendiente' para el nuevo reporte
    INSERT INTO estado_reportes (id_reporte, estado)
    VALUES (LAST_INSERT_ID(), 'Pendiente');
END
-- ******************************************************************************************************--

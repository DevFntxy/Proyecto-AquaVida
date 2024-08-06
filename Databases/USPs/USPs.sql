-- ******************************************************************************************************--

-- Procedimiento almacenado 'sp_ObtenerConsumoTotalPorZona'
-- Obtiene el consumo total de agua por cada zona
CREATE PROCEDURE sp_ObtenerConsumoTotalPorZona()
BEGIN
    SELECT z.Nombre, SUM(c.Cantidad) AS Consumo_Total
    FROM Consumo_agua c
    INNER JOIN Zonas z ON c.Id_zona = z.Id_zona
    GROUP BY z.Nombre;
END;

-- ******************************************************************************************************--

-- Procedimiento almacenado 'sp_RegistrarAdministrador'
-- Registra un nuevo administrador en la tabla 'Administradores'
-- Parámetros de entrada: Nombre, Apellido_P, Apellido_M, Correo, Telefono
CREATE PROCEDURE sp_RegistrarAdministrador(
    IN p_Nombre VARCHAR(50),
    IN p_Apellido_P VARCHAR(50),
    IN p_Apellido_M VARCHAR(50),
    IN p_Correo VARCHAR(100),
    IN p_Telefono VARCHAR(15)
)
BEGIN
    INSERT INTO Administradores (Nombre, Apellido_P, Apellido_M, Correo, Telefono)
    VALUES (p_Nombre, p_Apellido_P, p_Apellido_M, p_Correo, p_Telefono);
END;

-- ******************************************************************************************************--

-- Procedimiento almacenado 'sp_ActualizarEstadoReporte'
-- Actualiza el estado de un reporte en la tabla 'Reportes'
-- Parámetros de entrada: Id_reporte, Id_estado
CREATE PROCEDURE sp_ActualizarEstadoReporte(
    IN p_Id_reporte INT,
    IN p_Id_estado INT
)
BEGIN
    UPDATE Reportes
    SET Id_estado = p_Id_estado
    WHERE Id_reporte = p_Id_reporte;
END;

-- ******************************************************************************************************--
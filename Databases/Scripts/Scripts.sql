-- ******************************************************************************************************--

-- Script para insertar datos en la tabla 'Usuarios'
-- Asi mismo un ejemplo de datos a ingresar
INSERT INTO Usuarios (Id_usuario, Nombre, Apellido_P, Apellido_M, Correo, Contraseña, Numero_telefono)
VALUES (1, 'Juan', 'Perez', 'Gomez', 'juan.perez@example.com', 'password123', '1234567890'),
       (2, 'Maria', 'Lopez', 'Martinez', 'maria.lopez@example.com', 'password123', '0987654321');

-- ******************************************************************************************************--

-- Script para actualizar el estado de un reporte en la tabla 'Reportes'
-- En este caso, se actualiza el estado del reporte con Id_reporte = 1 a 'Realizado' (Id_estado = 3)
UPDATE Reportes
SET Id_estado = 3
WHERE Id_reporte = 1;

-- ******************************************************************************************************--

-- Script para eliminar reportes antiguos en la tabla 'Reportes'
-- Elimina los reportes con fecha anterior a un año desde la fecha actual
DELETE FROM Reportes
WHERE Fecha < DATE_SUB(CURDATE(), INTERVAL 1 YEAR);

-- ******************************************************************************************************--





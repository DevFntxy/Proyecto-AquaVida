--****************************************************************************--

-- Inserta un nuevo reporte en la base de datos
INSERT INTO reportes (nombre, apellidopat, apellidomat, telefono, numtoma, direccion, tipo_problema, descripcion, fecha_reg, id_usuarios, estado_reporte)
VALUES ('Juan', 'Pérez', 'López', 1234567890, 987654, 'Calle Falsa 123', 'Fuga de agua', 'Descripción del problema', '2024-08-21', 2, 'Pendiente');


--****************************************************************************--

-- Actualiza los detalles de un reporte existente en la base de datos
UPDATE reportes
SET tipo_problema = 'Infraestructura dañada', descripcion = 'La tubería está rota', estado_reporte = 'En proceso'
WHERE id_reporte = 1;

--****************************************************************************--

-- Elimina todos los reportes con un estado específico
DELETE FROM reportes
WHERE estado_reporte = 'Resuelto';

--****************************************************************************--
-- Inserta un nuevo usuario en la base de datos
INSERT INTO usuarios (nombre, usuario, contraseña, correo, fecha_reg, id_cargo)
VALUES ('Ana', 'ana123', 'securepassword', 'ana@example.com', '2024-08-21', 2);

--****************************************************************************--

-- Actualiza los detalles de un usuario existente en la base de datos
UPDATE usuarios
SET nombre = 'Ana María', correo = 'anamar@example.com'
WHERE id_usuarios = 3;

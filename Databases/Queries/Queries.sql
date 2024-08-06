--****************************************************************************--

-- Consulta para obtener todos los usuarios con reportes realizados
-- Involucra las tablas 'Usuarios' y 'Reportes'
-- Filtra los reportes que están en estado 'Realizado' (Id_estado = 3)
SELECT u.Nombre, u.Apellido_P, u.Apellido_M, r.Tipo_incidente, r.Fecha
FROM Usuarios u
INNER JOIN Reportes r ON u.Id_usuario = r.Id_usuario
WHERE r.Id_estado = 3;

--****************************************************************************--

-- Consulta para listar el consumo de agua por zona y fecha
-- Involucra las tablas 'Consumo_agua' y 'Zonas'
-- Ordena los resultados por fecha de manera descendente
SELECT z.Nombre AS Zona, c.Fecha, c.Cantidad
FROM Consumo_agua c
INNER JOIN Zonas z ON c.Id_zona = z.Id_zona
ORDER BY c.Fecha DESC;

--****************************************************************************--

-- Consulta para contar la cantidad de reportes por tipo de incidente
-- Agrupa los resultados por 'Tipo_incidente' en la tabla 'Reportes'
SELECT Tipo_incidente, COUNT(*) AS Cantidad
FROM Reportes
GROUP BY Tipo_incidente;

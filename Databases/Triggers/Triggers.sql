-- ******************************************************************************************************--

-- Trigger 'before_user_update' para actualizar la fecha de última modificación
-- Se activa antes de actualizar un registro en la tabla 'Usuarios' y actualiza la columna 'Fecha_Modificacion'
CREATE TRIGGER before_user_update
BEFORE UPDATE ON Usuarios
FOR EACH ROW
BEGIN
    SET NEW.Fecha_Modificacion = NOW();
END;

-- ******************************************************************************************************--

-- Trigger 'before_zona_update' para mantener el historial de cambios en la tabla 'Zonas'
-- Se activa antes de actualizar un registro en 'Zonas' y guarda el registro actual en 'Historial_Zonas'
CREATE TRIGGER before_zona_update
BEFORE UPDATE ON Zonas
FOR EACH ROW
BEGIN
    INSERT INTO Historial_Zonas (Id_zona, Nombre, Calle, CP, Fecha_Modificacion)
    VALUES (OLD.Id_zona, OLD.Nombre, OLD.Calle, OLD.CP, NOW());
END;

-- ******************************************************************************************************--

-- Trigger 'before_insert_consumo_agua' para validar la cantidad de consumo de agua
-- Se activa antes de insertar un registro en 'Consumo_agua' y asegura que la cantidad no sea negativa
CREATE TRIGGER before_insert_consumo_agua
BEFORE INSERT ON Consumo_agua
FOR EACH ROW
BEGIN
    IF NEW.Cantidad < 0 THEN
        SET NEW.Cantidad = 0;
    END IF;
END;


-- ******************************************************************************************************--
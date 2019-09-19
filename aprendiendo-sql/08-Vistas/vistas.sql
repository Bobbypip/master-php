/*
Vistas:
Las podemos definir como una consta almacenada en la base de datos que
se utiliza como una tabla virtual.
No almacena datos sino que ituliza asociasiones y los datos originales
de las tablas, de forma que siempre se mantiene actualizada.
*/

# CREAR LA VISTA #
CREATE VIEW entradas_con_nombre AS
SELECT e.id, e.titulo, u.nombre AS 'AUTOR', c.nombre AS 'Categoria'
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id;

# BORRAR LA VISTA #
DROP VIEW entradas_con_nombre;
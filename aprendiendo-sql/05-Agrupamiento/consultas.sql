# CONSULTAS DE AGRUPAMIENTO#
# CUENTA DE LOS TITULOS EN LA TABLA DE ENTRADA AGRUPADOS POR CATEGORIA #
SELECT COUNT(titulo) AS 'NUMERO DE ENTRADAS', categoria_id FROM entradas GROUP BY categoria_id;

# CONSULTA DE AGRUPAMIENTO CON CONDICIONES #
SELECT COUNT(titulo) AS 'NUMERO DE ENTRADAS', categoria_id FROM entradas GROUP BY categoria_id
HAVING COUNT(titulo) >= 4;

/*
AVG     Sacar la media
COUNT   Contar el numero de elementos
MAX     Valor maximo del grupo
MIN     Valor minimo del grupo
SUM     Sumar todo el contenido del grupo
*/

# AVG #
SELECT AVG(id) AS 'Media de entradas' FROM entradas;
# MAX #
SELECT MAX(id) AS 'Maximo ID', titulo FROM entradas;
# MIN #
SELECT MIN(id) AS 'Minimo ID', titulo FROM entradas;
# SUMA #
SELECT SUM(id) AS 'Suma de ID', titulo FROM entradas;

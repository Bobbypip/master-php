/* 
14. Visualizar las unidades totales vendidas de cada coche a cada cliente.
Mostrando el nombre del producto, numero de cliente y la suma de unidades.
 */

SELECT co.modelo, cl.nombre, SUM(e.cantidad) FROM encargos e
INNER JOIN coches co ON e.coche_id = c.id;
INNER JOIN clientes cl ON e.cliente_id = cl.id;
GROUP BY e.coche_id, e.cliente_id;

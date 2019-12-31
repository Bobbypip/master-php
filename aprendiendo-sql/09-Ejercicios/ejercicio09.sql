/* 
9. Mostrar todos los vendedores del grupo numero 2, ordenados por salario de mayor
a menor
 */

SELECT CONCAT(v.nombre, ' ', v.apellidos) AS 'nombre', v.sueldo, g.nombre AS 'grupo', g.ciudad 
FROM vendedores v, grupos g 
WHERE v.grupo_id=g.id AND g.nombre='Vendedores B'
ORDER BY v.sueldo DESC;
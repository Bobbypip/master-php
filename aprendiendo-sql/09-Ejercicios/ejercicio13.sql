/* 
 13. Sacar la media de sueldos entre todos los vendedeores por grupo.
 */

/* CEIL(number) = Regresa el entero mas pequeno no menor al 'number' especificado
en el argumento
*/

SELECT COUNT(v.id), CEIL(AVG(v.sueldo)) AS 'MEDIA SALARIAL', g.nombre, g.ciudad FROM vendedores v
INNER JOIN grupos g ON v.grupo_id = g.id 
GROUP BY (grupo_id);
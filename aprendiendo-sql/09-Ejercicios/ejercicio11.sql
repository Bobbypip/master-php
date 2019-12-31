/* 
11. Visualizar todos los cargos y el numero de vendedores que hay en cada cargo.
 */
SELECT cargo ,COUNT(id) AS 'vendeores' from vendedores GROUP BY cargo ORDER BY COUNT(id) DESC;


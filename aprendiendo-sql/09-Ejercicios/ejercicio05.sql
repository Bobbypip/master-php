/* 
 5. Mostrar los vendedores con su nombre y el numero de dias que llevan 
en el concesionario.
 */

SELECT nombre, DATEDIFF(CURDATE(), fecha) AS 'DIAS' FROM vendedores;
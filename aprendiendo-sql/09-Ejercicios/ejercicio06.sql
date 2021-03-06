/* 
Visualizar el nombre y los apellidos de los vendedores en una misma columna,
su fecha de registro y el dia de la semana en la que se registraron.
 */

SELECT CONCAT(nombre,' ', apellidos) AS 'NOMBRE', 
       fecha, DAYNAME(fecha) AS 'DIA' FROM vendedores;

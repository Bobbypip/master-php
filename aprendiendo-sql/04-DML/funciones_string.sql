# CONVERTIR EN MAYUSCULAS #
SELECT UPPER(nombre) FROM usuarios;

# CONVERTIR EN MINUSCULAS #
SELECT LOWER(nombre) FROM usuarios;

# CONVERTIR EN MINUSCULAS #
SELECT LOWER(nombre) FROM usuarios;

# CONCATENAR #
SELECT CONCAT(nombre, ' ', apellidos) as 'CONVERSION' FROM usuarios;

# CONCATENAR CON MAYUSCULAS #
SELECT UPPER(CONCAT(nombre, ' ', apellidos)) as 'CONVERSION' FROM usuarios;

# OBTENER LONGITUD DE STRING #
SELECT LENGTH(CONCAT(nombre, ' ', apellidos)) as 'CONVERSION' FROM usuarios;

# OBTENER LONGITUD DE STRING Y MOSTRAR EMAIL #
SELECT email, LENGTH(CONCAT(nombre, ' ', apellidos)) as 'CONVERSION' FROM usuarios;

# TRIM, BORRA ESPACIOS SOBRANTES DE IZQUIERDA Y DERECHA DE UNA CADENA #
SELECT TRIM(CONCAT('     ', nombre, ' ', apellidos, '     ')) as 'CONVERSION' FROM usuarios;

# ENCONTRAR COINCIDENCIA #
/*
%x indica que puede haber cualquier cosa antes de la x, siendo 'x' con lo que finaliza el string
x% indica que puede haber cualquier cosa despues de la x, siendo 'x' con lo que inicia el string
%x% indica que puede haber cuialquier cosa antes o despues de la 'x'
*/

SELECT * FROM WHERE marca LIKE '%a%'
# COMPROBAR SI UN CAMPO ES NULO #
SELECT email, ISNULL(apellidos) FROM usuarios;

# COMPARAR 2 STRINGS
# If string1 = string2, this function returns 0
# If string1 < string2, this function returns -1
# If string1 > string2, this function returns 1 #

SELECT email, STRCMP('HOLA', 'HOLA') FROM usuarios;

# VERSION SQL #
SELECT VERSION();

# SELEECIONAR USUARIO #
SELECT USER();

# MOSTRAR USUARIOS DISTINTOS #
SELECT DISTINCT USER() FROM usuarios;

# MOSTRAR BASES DE DATOS DISTINTAS #
SELECT DISTINCT DATABASE() FROM usuarios;

# SI UN CAMPO ESTA VACIO RELLENAR CON ALGO #
SELECT IFNULL(apellidos, 'ESTE CAMPO ESTA VACIO') FROM usuarios;

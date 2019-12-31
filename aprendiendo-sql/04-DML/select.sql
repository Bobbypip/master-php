# MOSTRAR TODOS REGISTROS / FILAS DE UNA TABLA #
SELECT email, nombre, apellidos FROM usuarios;

# MOSTRAR TODOS LOS CAMPOS #
SELECT * FROM usuarios;

# OPERADORES ARITMETICOS #
SELECT email, (7+7) AS 'OPERATION' FROM usuarios;

# FUNCIONES MATEMATICAS #
# VALOR ABSOLUTO #
SELECT ABS(-7) AS 'OPERATION' FROM usuarios;

# REDONDEAR AL ALZA #
SELECT CEIL(8.8) AS 'OPERATION' FROM usuarios;

# REDONDEAR A LA BAJA #
SELECT FLOOR(8.8) AS 'OPERATION' FROM usuarios;

# REDONDEAR #
SELECT ROUND(8.8) AS 'OPERATION' FROM usuarios;
SELECT ROUND(id,2) AS 'OPERATION' FROM usuarios;

# NUMERO RANDOM #
SELECT RAND() AS 'OPERATION' FROM usuarios;

# REDONDEAR DECIMALES #
SELECT ROUND(RAND(),2) AS 'OPERATION' FROM usuarios;

# RAIZ CUADRADA #
SELECT SQRT(2) AS 'OPERATION' FROM usuarios;

# TRUNCAR #
SELECT TRUNCATE(SQRT(2),2) AS 'OPERATION' FROM usuarios;

# ORDENAR # 
/* Ordenar por id ascendente*/
SELECT sueldo FROM vendedores ORDER BY id;

/* Ordenar por id descendente*/
SELECT sueldo FROM vendedores ORDER BY id DESC;

/*Ordenar por id ascendente*/
SELECT sueldo FROM vendedores ORDER BY id ASC;

# PONER UN LIMITE AL NUMERO DE ELEMENTO MOSTRADOS #
/* LIMIT 4 muiestra los primeros 4*/
SELECT sueldo FROM vendedores ORDER BY id DESC LIMIT 4;
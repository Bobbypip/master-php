# CONSULTA UNA CONDICION #
SELECT * FROM usuarios WHERE email = 'admin@admin.com';

/*
OPERADORES DE COMPARACION:
Igual           =
Distinto        !=
Menor           <
Mayor           >
Menor o igual   <=
Mayor o igual   >=
Entre           between A and B
En              in
Es nulo         is null
No nulo         is not null
Como            like
NO es como      not like

OPERADORES LOGICOS:
O       OR
y       AND
NO      NOT

COMODINES:
Cualquier cantidad de caracateres: %
Un caracter desconocido:_
*/   



# EJEMPLOS #

# 1. Mostrar Nombre y Apellidos de todos los usuarios registrados en 2019 #
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) = 2019;

# 1. Mostrar Nombre y Apellidos de todos los usuarios no registrados en 2019 #
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) != 2019 OR ISNULL(fecha);

# 3. Mostrar el email de los usuarios cuyo apellido contenga la letra A
# y que su contrasena sea 1234 #

SELECT email FROM usuarios WHERE apellidos LIKE '%a%' AND password = '1234';

# 4. SACAR TODOS LOS REGISTROS DE LA TABAL USUARIOS CUYO ANO SEA PAR #
SELECT * FROM usuarios WHERE YEAR(fecha)%2 = 0;
# SACAR TODOS LOS REGISTROS DE LA TABAL USUARIOS CUYO ANO SEA IMPAR #
SELECT * FROM usuarios WHERE YEAR(fecha)%2 != 0;

# 5. SACAR TODOS LOS REGISTROS DE LA TABLA USUARIOS CUYO NOMBRE TENGA MAS DE
# 5 LETRAS Y QUE SE HAYAN RESGISTRADO ANTES DE 2020 Y MMOSTRAR EL NOMBRE EN
# MAYUSCULAS #

SELECT UPPER(nombre) AS 'Nombre', apellidos FROM usuarios WHERE (LENGTH(nombre)>5) AND (YEAR(fecha)<2020);
 
# ORDER BY Y LIMIT #
SELECT * FROM usuarios ORDER BY id;
SELECT * FROM usuarios ORDER BY fecha ASC;
SELECT * FROM usuarios ORDER BY fecha DESC;
SELECT * FROM usuarios ORDER BY fecha DESC LIMIT 2;
SELECT * FROM usuarios ORDER BY fecha DESC LIMIT 1,3;
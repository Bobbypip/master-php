/*
SUBCONSULTAS:
-Son consultas que se ejecutan dentro de otras.
-Consiste en utilizar los resultados de la subconsulta para operar la
consulta principal.
-Jugando con las claves ajenas / foraneas.
*/

# SI EL ID DE ALGUN USUARIO EXISTE EN ENTRADAS LO MUESTRA #
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas); 

# SI EL ID DE ALGUN USUARIO NO EXISTE EN ENTRADAS LO MUESTRA #
SELECT * FROM usuarios WHERE id NOT IN (SELECT usuario_id FROM entradas); 

# SACAR LOS USUARIOS QUE TENGAN ALGUNA ENTRADA QUE EN SU TITULO HABLE DE GTA #
SELECT nombre, apellidos FROM usuarios WHERE id
    IN (SELECT usuario_id FROM entradas WHERE titulo LIKE '%GTA%');

# SACARA TODAS LA ENTRADAS DE LA CATEGORIA ACCION UTILIZANDO SU NOMBRE #
SELECT titulo FROM entradas WHERE categoria_id
    IN (SELECT id FROM categorias WHERE nombre ='ACCION');

# MOSTRAR LAS CATEGORIAS CON 3 O MAS ENTRADAS #
(SELECT nombre FROM categorias WHERE
    id IN (SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id)>=3);

# MOSTRAR LOS USUARIOS QUE CREARON UNA ENTRADA UN MARTES #
SELECT * FROM usuarios WHERE id IN
    (SELECT usuario_id FROM entradas WHERE DAYOFWEEK(fecha)=3);

# MOSTRAR EL NOMBRE DE EL USUARIO QUE TENGA MAS ENTRADAS # 
SELECT CONCAT(nombre,' ',apellidos) AS 'EL usuario con mas entradas' FROM usuarios WHERE id =
    (SELECT usuario_id FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1);

# MOSTRAR LAS CATEGORIAS SIN ENTRADAS #
SELECT * FROM categorias WHERE id NOT IN
    (SELECT categoria_id FROM entradas);
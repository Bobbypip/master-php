# CURDATE, MOSTRAR FECHA ACTUAL #
SELECT email, fecha, CURDATE() AS 'Fecha Actual' FROM usuarios;

# DIFERENCIA DE DIAS #
SELECT email,DATEDIFF(fecha, CURDATE()) AS 'Fecha Actual' FROM usuarios;

# NOMBRE DEL DIA #
SELECT email, DAYNAME(fecha) AS 'Fecha Actual' FROM usuarios;

# DIA DEL MES #
SELECT email, DAYOFMONTH(fecha) AS 'Fecha Actual' FROM usuarios;

# DIA DE LA SEMANA #
SELECT email, DAYOFWEEK(fecha) AS 'Fecha Actual' FROM usuarios;

# DIA DEL ANO #
SELECT email, DAYOFYEAR(fecha) AS 'Fecha Actual' FROM usuarios;

# SACAR EL DIA DE ESA FECHA #
SELECT email, DAY(fecha) AS 'Fecha Actual' FROM usuarios;

# SACAR EL MES DEL ANO DE ESA FECHA #
SELECT email, MONTH(fecha) AS 'Fecha Actual' FROM usuarios;

# SACAR EL ANO DE ESA FECHA #
SELECT email, YEAR(fecha) AS 'Fecha Actual' FROM usuarios;

# SACAR LA HORA#
SELECT email, HOUR(fecha) AS 'Fecha Actual' FROM usuarios;

# SACAR LA HORA EXACTA #
SELECT email, CURTIME() AS 'Fecha Actual' FROM usuarios;

# SACAR LA HORA EXACTA Y FECHA DEL SERVIDOR #
SELECT email, SYSDATE() AS 'Fecha Actual' FROM usuarios;

# DAR FORMATO A LA FECHA #
SELECT email, DATE_FORMAT(fecha, '%d-%m-%Y') FROM usuarios;
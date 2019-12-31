<?php
//Conectar a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "phpmysql");

//Comprobar si la conexion es correcta
if(mysqli_connect_errno()){
    echo "La conexion a la base de datos MYSQL ha fallado: ". mysqli_connect_error();
}else{
    echo "Conexion realizada correctamente!!".'</br>';
};

//Consulta para configurar la modificacion de caracateres
mysqli_query($conexion, "SET NAMES 'utf8'");

// Consula SELECT desde php
$query = mysqli_query($conexion, "SELECT * FROM notas");

//var_dump($query);
//var_dump($nota);

while($nota = mysqli_fetch_assoc($query)){
    //var_dump($nota);
    echo "<h2>".$nota['titulo']."</h2>";
    echo $nota['descripcion'].'</br>';
}

//Insertar en la base de datos
$sql = "INSERT INTO notas VALUES(null, 'Nota desde PHP', 'Esto es una nota de PHP', 'greem')";
$insert = mysqli_query($conexion, $sql);

if($insert){
    echo "DATOS INSERTADOS CORRRECTAMENTE";
}else{
    echo "Error: ".mysqli_error($conexion);
};
?>
<?php
if(!is_dir('mi_carpeta')){
    mkdir('mi_carpeta', 0777) or die('No se puede crear la carpeta');
}else{
    echo'Ya existe la carpeta';
}

// rmdir('mi_carpeta');
echo "<hr><h1>CONTENIDO DE CARPETA</h1>";
if($gestor = opendir('./mi_carpeta')){
    //var_dump($gestor);
    while(false !== ($archivo = readdir($gestor))){
        if($archivo != '.' && $archivo != '..'){
        echo $archivo.'</br>';
        }
    }
}

?>
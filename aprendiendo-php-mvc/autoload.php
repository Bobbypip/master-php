<?php

function autocargar($clasname){
	include 'controllers/'.$clasname.'.php';
}

spl_autoload_register('autocargar');
?>
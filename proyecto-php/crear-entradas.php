<?php require_once 'includes/redireccion.php';?>
<?php require_once 'includes/cabecera.php';?>
 
<!--BARRA LATERAL-->
<?php require_once 'includes/lateral.php';?>

<!--CAJA PRINCIPAL-->
<div id="principal">
	<h1>Crear entradas</h1>
	<p>
		A&ntilde;ade nuevas entradas al blog para que los usuarios puedan
		leerlas y disfrutar de nuestro contenido.
	</p>
	</br>
	<form action="guardar-entrada.php" method="POST">
		<label for="titulo">T&iacute;tulo:</label>
		<input type="text" name="titulo"/>
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'],'titulo') : '';?>

		<label for="descripcion">Descripci&oacute;n:</label>
		<textarea name="descripcion"/></textarea>
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'],'descripcion') : '';?>

		<label for="categoria">Categor&iacute;a</label>
		<select name="categoria">
			<?php
				$categorias = conseguirCategorias($db);
				if(!empty($categorias)):
				while($categoria = mysqli_fetch_assoc($categorias)):
			?>
				<option value="<?=$categoria['id']?>">
					<?=$categoria['nombre']?>
				</option>
			<?php
				endwhile;
				endif;
			?>
		</select>
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'],'categoria') : '';?>

		<input type="submit" value="Guardar" />
		</form>
		<?php borrarErrores();?>
</div><!--Fin Principal-->

<!--PIE DE PAGINA-->
<?php require_once 'includes/pie.php';?>
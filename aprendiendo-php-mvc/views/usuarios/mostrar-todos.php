<h1>Listados de usuarios</h1>
<?php while($usuario = $todos_los_usuarios->fetch_object()): ?>
	<?=$usuario->email?> - <?=$usuario->fecha?> <br/>
<?php endwhile; ?>

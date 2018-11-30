<?php
	if(isset($_SESSION['rol']) && $_SESSION['rol'] == 'Administrador')
	{
		echo '<a href="config.php">Configuracion</a>';
	}

?>

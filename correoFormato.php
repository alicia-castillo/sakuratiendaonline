<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Untitled 1</title>
</head>

<body>
	<div class="correo">
		<h1>Nombre de usuario</h1>
		<h1>Confirmacion de pago de los siguientes artículos:</h1>
		<div>
			<?php include('correo.php');?>
		</div>
		<h1>Pago confirmado.</h1>
		<h1>Gracias por su preferencia.</h1>

	</div>
</body>

</html>

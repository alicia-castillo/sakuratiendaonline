<?php
session_start();
	//verificacion de la autenticacion
	if($_GET['txtUsuario'] && isset($_GET['txtPwd']))
	{
		if($_GET['txtUsuario'] =="" || $_GET['txtPwd']=="")
		{
			echo ("Campos vacios");
		}
		else
		{
			//Coneccion a la BD
			$conn = mysqli_connect("localhost","root","mysql","Proyecto");
			if(!$conn)
			{
				$msg = "No fue posible conectarse a la BD" . mysqli_error($conn);
			}
		}
		//Consulta
		$qry = "select idUsuario,rol,Email from usuario where nombreUsuario = '".$_GET['txtUsuario']."' and Password= '".$_GET['txtPwd']."'";
		
		//Evaluacion de la consulta
		$rs = mysqli_query($conn,$qry);
		if(mysqli_num_rows($rs) > 0)
		{
			$datos = mysqli_fetch_object($rs);
			$_SESSION['nombreUsuario'] = $_GET['txtUsuario'];
			$_SESSION['idUsuario'] = $datos->idUsuario;
			$_SESSION['rol'] = $datos->rol;
			$_SESSION['Email'] = $datos->Email;
			
			header("location: http://localhost/Proyecto/index2.php");
		}		else
			echo ("El usuario o la contraseña no existen");
	}
	else
		header("location: http://localhost/Proyecto/index.php");
?>

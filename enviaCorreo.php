<?php
session_start();
echo $_SESSION['email'];
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMPT;

require 'PHPMailer-6.0.5/src/Exception.php';
require 'PHPMailer-6.0.5/src/PHPMailer.php';
require 'PHPMailer-6.0.5/src/SMTP.php';	

	$conn = mysqli_connect("localhost","root","mysql","Proyecto");
	if(!$conn){
			echo "No fue posible conectarse a la BD" . mysqli_error($conn);
	}
	$qry = "select v.*,p.nombreProducto,p.precio from venta v inner join producto p on v.idProducto = p.idProducto where idUsuario = ". $_SESSION['idUsuario'];
	$rs = mysqli_query($conn,$qry);
	$Total = 0;

	$body = '<!DOCTYPE html>
				<html>
					<head>
						<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
						<title>Untitled 1</title>
					</head>
					<body>
						<div class="correo">
							<h1>Hola '.$_SESSION['nombreUsuario'].'.</h1>
							<h1>Confirmacion de pago de los siguientes artículos:</h1>
							<div>';
	while($datos = mysqli_fetch_object($rs))
	{
		$body .= '				<h1>Productos</h1>
								<img src="imagen.php?idD='.$datos->idProducto.'" style="width:150px;height:100px;" alt="">
								<h2>'.$datos -> nombreProducto.'</h2>
								<p>Cantidad: '.$datos->cantidad.'</p>
								<h2>$ '.$datos->precio.' c/u </h2>';
		$Total += $datos->subTotal;
	}										
								
	$body .= '					<h2>Total: '.$Total.'</h2>
						    </div>
							<h1>Pago confirmado</h1>
							<h1>Gracias por su preferencia.</h1>
						</div>
					</body>
				</html>';
	
	$mail = new PHPMailer;
	
		//Opciones de servidor
		$mail->SMPTDebug = 2;
		$mail->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true; 
		$mail->Username = 'jez.ortiz.tobias@gmail.com';
		$mail->Password = '214527jjot'; //Contraseña 
		$mail->SMTPSecure = 'tls';
		$mail->Port = 587;
		
		$mail->SMTPOptions = array(
	    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
	    )
		);
		
		$mail->setFrom('jez.ortiz.tobias@gmail.com','SakuraShop');
		$mail->addAddress('jez.ortiz.tobias@gmail.com','Admin');
		$mail->addAddress( $_SESSION['Email'], $_SESSION['nombreUsuario']);


		$mail->Subject = 'Confirmación de pago';
		$mail->msgHTML($body);
		
		if(!$mail->send()){
				$mail->ErrorInfo;
				header('Location: http://localhost/Proyecto/carritoCompras.php?enviado=0');
		}
		else
			{
				$qryE = "delete from venta where idUsuario = ". $_SESSION['idUsuario'];
				$rsE = mysqli_query($conn,$qryE);
				
				header('Location: http://localhost/Proyecto/carritoCompras.php?enviado=1');
				
			}

?>

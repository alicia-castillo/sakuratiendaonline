<?php
session_start();
	//verificacion del idP
	if(isset($_SESSION['idUsuario']) && $_SESSION['idUsuario']!="")
	{
		//Coneccion a la BD
		$conn = mysqli_connect("localhost","root","mysql","Proyecto");
		if(!$conn)
		{
			echo "No fue posible conectarse a la BD" . mysqli_error($conn);
		}
		
		$qry = "select v.*,p.precio,p.nombreProducto from venta v inner join producto p ON v.idProducto=p.idProducto where idUsuario=".$_SESSION['idUsuario'];
		$rs = mysqli_query($conn,$qry);
		
		for($i = 1; $datos = mysqli_fetch_object($rs);$i++)
		{
			echo '<tr>
						<th scope="row">'.$i.'</th>
						<td><input type="hidden" value="'.$datos->idProducto.'" name="p'.$i.'">'.$datos->nombreProducto.'</td>
						<td><input onchange="'."<script language='javascript'>echo alert('antes'); document.getElementById(".$i.").innerHTML() = 'jfdhkg'; alert('despues');".'</script>" type="number" value="'.$datos->cantidad.'" name="c'.$i.'"></td>
						<td>'.$datos->precio.'</td>
						<td id="'.$i.'">'.$datos->subTotal.'</td>
						<td><a class="btn btn-primary" type="submit" href="eliminaProdTabla.php?idP='.$datos->idProducto.'&idV='.$datos->idVenta.'">Eliminar</a></td>
					</tr>';
					
		}
		
	}
?>

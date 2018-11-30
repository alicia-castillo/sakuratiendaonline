<?php
	if(isset($_GET['idP']) && $_GET['idP'] != "")
	{
		$conn = mysqli_connect("localhost","root","mysql","Proyecto");
		if(!$conn)
		{
			echo "No fue posible conectarse a la BD" . mysqli_error($conn);
		}
		
		$qry = "select p.*,c.nombreCategoria from producto p inner join categoria c on p.idCategoria = c.idCategoria where idProducto=".$_GET['idP'];
		$rs = mysqli_query($conn,$qry);
		
		$datos = mysqli_fetch_object($rs);
		$nombreCategoria = $datos->nombreCategoria;
		
		echo'	<form method="post" action="editProducto.php" enctype="multipart/form-data">
					<input type="hidden" name="idP" value="'.$datos->idProducto.'">
					Nombre del producto: <input type="text" placeholder="Nombre del producto" name="txtProducto" class="form-control" value="'.$datos->nombreProducto.'"><br>
					Descripcion del producto: <textarea name="txtDescripcion" >'.$datos->descripcion.'</textarea><br>
					<img  width="200px" heigth="200px" src="imagen.php?idD='.$datos->idProducto.'" alt=""><br> 
					Imagen del producto: <input type="file" name="txtImagen"><br>		
					
					<div class="input-group mb-3">
						<div class="input-group-prepend">
				  			<label class="input-group-text" for="inputGroupSelect01">Categoria:</label>
				  		</div>
						<select class="custom-select" name="opciones">';
							include("cargaCategorias.php");
			echo		'</select>
					</div>

					Precio: <input type="text" placeholder="$ MNX" name="txtPrecio" class="form-control" value="'.$datos->precio.'"><br>
					Talla: <input type="text" placeholder="CH,M,G,Unitalla" name="txtTalla" class="form-control" value="'.$datos->talla.'"><br>
					Existencia: <input type="number" name="txtExistencia" class="form-control" value="'.$datos->existencia.'"><br>
					<button type="submit" class="btn btn-primary">Editar</button>
					<a href="config.php" class="btn btn-primary" role="reset" aria-pressed="true">Cancelar</a>
				</form>';
	}
?>

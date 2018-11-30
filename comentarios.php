<?php
	//verificacion del idP
	
	//style="width:350px;height:300px;"
	if(isset($_GET['idP']) && $_GET['idP']!="" && isset($_SESSION['rol']) && $_SESSION['rol']!="" && isset($_SESSION['nombreUsuario']) && $_SESSION['nombreUsuario']!="")
	{
		//Coneccion a la BD
		$conn = mysqli_connect("localhost","root","mysql","Proyecto");
		if(!$conn)
		{
			echo "No fue posible conectarse a la BD" . mysqli_error($conn);
		}
		
		$qry = "SELECT c.*,u.nombreUsuario FROM comentarios c inner join usuario u on c.idUsuario = u.idUsuario where idProducto=".$_GET['idP'];
		$rs = mysqli_query($conn,$qry);
		
		if($_SESSION['rol'] != 'Administrador')
			echo '<div class="container contenedor" >
					<form method="get" action="agregarComentario.php">
						<p class="font-weight-bold">'.$_SESSION['nombreUsuario'].'</p>
						<input type="hidden" name="idP" value="'.$_GET['idP'].'">
						
					
							
						<textarea name="comentario" id="wysihtml5-textarea" autofocus="" style="border:solid 1 blue;"></textarea><br>
						
						<div id="wysihtml5-toolbar" style="display: none;">
							<a data-wysihtml5-command="bold">bold</a>
						  	<a data-wysihtml5-command="italic">italic</a>
						
						  	<a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="red">red</a>
						  	<a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="green">green</a>
						  	<a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="blue">blue</a>
			
						  	<a data-wysihtml5-command="createLink">insert link</a>
						  	<div data-wysihtml5-dialog="createLink" style="display: none;">
						    	<label>
						      		Link:
						      		<input data-wysihtml5-dialog-field="href" value="http://" class="text">
						    	</label>
						    	<a data-wysihtml5-dialog-action="save">OK</a> <a data-wysihtml5-dialog-action="cancel">Cancel</a>
						  	</div>
						</div>
						
						
						<button type="submit" class="btn btn-primary">Comentar</button>
					</form>
				  </div>';
			    
		echo '<div class="ComentariosUsuario">';
	
		while($datos = mysqli_fetch_object($rs)){
			$cadena = $datos->comentario;
			//htmlentities($datos->comentario, ENT_IGNORE, "UTF-8");
			echo ' <div class="container contenedor">
					<form method="get" action="editComentario.php" id="'.$datos->idComentario.'">
						<p class="font-weight-bold">'.$datos->nombreUsuario.'</p>
						<p>'.$datos->fecha.'</p>';
						
						if(isset($_GET['idC']) && $_GET['idC'] == $datos->idComentario)
						{
							//$texto = strip_tags($cadena);
							echo '	<textarea name="comentario" id="wysihtml5-textare" autofocus="" >'.$cadena.'</textarea>	
									<input type="hidden" name="idP" value="'.$_GET['idP'].'">
									<input type="hidden" name="idC" value="'.$_GET['idC'].'">
									
									<div id="wysihtml5-toolba" style="display: none;">
										<a data-wysihtml5-command="bold">bold</a>
										<a data-wysihtml5-command="italic">italic</a>
						
						  				<a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="red">red</a>
										<a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="green">green</a>
										<a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="blue">blue</a>
						
						  				<a data-wysihtml5-command="createLink">insert link</a>
										<div data-wysihtml5-dialog="createLink" style="display: none;">
											<label>
										    	Link:
										    	<input data-wysihtml5-dialog-field="href" value="http://" class="text">
										    </label>
										    <a data-wysihtml5-dialog-action="save">OK</a> <a data-wysihtml5-dialog-action="cancel">Cancel</a>
										</div>
									</div>';
						}
						else
							echo '<h2>'.$datos->comentario.'</h2>';
						if($_SESSION['rol'] == 'Administrador' || $_SESSION['idUsuario'] == $datos->idUsuario)			
							echo '<a href="eliminaComentario.php?idC='.$datos->idComentario.'&idP='.$_GET['idP'].'" class="btn btn-primary" role="button" aria-pressed="true">Eliminar</a>';
						if($_SESSION['idUsuario'] == $datos->idUsuario && $_SESSION['rol'] != 'Administrador')
							if(isset($_GET['idC']) && $_GET['idC'] == $datos->idComentario)
								echo '<button type="submit" class="btn btn-primary">Aceptar</button>';
							else
								echo '<a href="producto.php?idP='.$_GET['idP'].'&idC='.$datos->idComentario.'#'.$datos->idComentario.'" class="btn btn-primary" role="button" aria-pressed="true">Editar</a>';
			echo 	'</form>
					</div>
				</div>';
		}
	}
?>

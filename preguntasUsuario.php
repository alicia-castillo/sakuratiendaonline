<?php
	if(isset($_SESSION['idUsuario']) && $_SESSION['idUsuario'] !="" && isset($_SESSION['rol']) && $_SESSION['rol']!="" && isset($_SESSION['nombreUsuario']) && $_SESSION['nombreUsuario']!="")
	{
		//Coneccion a la BD
		$conn = mysqli_connect("localhost","root","mysql","Proyecto");
		if(!$conn)
		{
			echo "No fue posible conectarse a la BD" . mysqli_error($conn);
		}
		
		$qry = "select p.*, u.nombreUsuario from preguntas p inner join usuario u on p.idUsuario = u.idUsuario";
		$rs = mysqli_query($conn,$qry);
		
		if($_SESSION['rol'] != 'Administrador')
		{
			echo '<div class="container preguntas" id="formularioPregunta">
				<form method="get" action="agregaPregunta.php">
					<h1>'.$_SESSION['nombreUsuario'].'</h1>
					<textarea name="txtPregunta"></textarea><br>
					<button type="submit" class="btn btn-primary">Comentar</button>
				</form>
			</div>';
		}
		
		echo '	<div class="preguntasUsuario">';
		
		while($datos = mysqli_fetch_object($rs))
		{

				echo'	<div class="container preguntas" id="'.$datos->idPregunta.'">
							<form method="get" action="editPregunta.php">
								<h1>'.$datos->nombreUsuario.'</h1>
								<p>'.$datos->fecha.'</p>';
								if(isset($_GET['idPr']) && $_GET['idPr'] == $datos->idPregunta && $_SESSION['rol'] != 'Administrador')
								{
									echo '<textarea name="pregunta" style="width:100%">'.$datos->pregunta.'</textarea>
										 <input type="hidden" name="idPr" value="'.$_GET['idPr'].'">';
								}
								else
									echo' <h2>'.$datos->pregunta.'</h2>';
									
								
								if($_SESSION['rol'] != 'Administrador')
								{	
									echo '	<a href="eliminaPregunta.php?idPr='.$datos->idPregunta.'" class="btn btn-primary" role="button" aria-pressed="true">Eliminar</a>';
									if(isset($_GET['idPr']) && $_GET['idPr'] == $datos->idPregunta)
										echo '<button type="submit" class="btn btn-primary">Aceptar</button>';
									else
										echo '<a href="preguntas.php?&idPr='.$datos->idPregunta.'#'.$datos->idPregunta.'" class="btn btn-primary" role="button" aria-pressed="true">Editar</a>';
								}
								echo '</form>
									<form id="respuesta" method="get" action="agregaRespuesta.php" style="height:130px; margin-top:30px;background-color:#FFECFF">';
								if($_SESSION['rol'] == 'Administrador')
								{	
									if(isset($_GET['idPr']) && $_GET['idPr'] == $datos->idPregunta)
									{	
										echo'	
													<textarea name="txtRespuesta" style="width:100%">'.$datos->respuesta.'</textarea>
													<input type="hidden" name="idPr" value="'.$_GET['idPr'].'">
													<button style="margin-top:40px" class="btn btn-primary" type="submit">Aceptar</button>';
									}
									else 
										{	
											if($datos->respuesta == "")
												
												echo '<input type="text" style="visibility:hidden"><a href="preguntas.php?idPr='.$datos->idPregunta.'#'.$datos->idPregunta.'" class="btn btn-primary" type="submit" sstyle="float:right;margin-top:5px;">Reonder</a>';
											else
											{
												echo '<p >'.$datos->respuesta.'</p>
													<a style="margin-top:40px; margin-right:10px" href="preguntas.php?idPr='.$datos->idPregunta.'#'.$datos->idPregunta.'" class="btn btn-primary" type="submit">Editar</a>
													<a style="margin-top:40px" href="eliminaPregunta.php?idPr='.$datos->idPregunta.'" class="btn btn-primary" role="button" aria-pressed="true">Eliminar</a>';

											}
										}
								}
								else
									echo '<p  style="width:100%">'.$datos->respuesta.'</p>';
					echo	'</form>
						</div>
					</div>';
			
		}
	}
?>

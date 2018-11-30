<?php
		$conn = mysqli_connect("localhost","root","mysql","Proyecto");
			if(!$conn)
			{
				echo "No fue posible conectarse a la BD" . mysqli_error($conn);
			}
	
		$qry = "select * from categoria";
		$rs = mysqli_query($conn,$qry);
		
		for($i=1;$atributos = mysqli_fetch_object($rs);$i++)
		{ 
			if((isset($_POST['opcion']) && $_POST['opcion'] == $atributos->nombreCategoria) || isset($nombreCategoria) && $nombreCategoria == $atributos->nombreCategoria)
				echo '<option selected>'.$atributos->nombreCategoria.'</option>';
			else
				echo '<option>'.$atributos->nombreCategoria.' </option>';
		}
	
?>

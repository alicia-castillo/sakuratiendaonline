<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<title>Untitled 1</title>

<link rel="stylesheet" href="bootstrap-4.1.1/bootstrap-4.1.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-4.1.1/bootstrap-4.1.1/dist/js/bootstrap.min.js"> 
<link href="fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.css" rel="stylesheet">


<style>
	body{
		margin:0px;
		padding:0px;
		height:700px;
		background-color:#FFECFF;
	}@font-face{
				font-family:pacifico;
				src: url(fonts/Pacifico.ttf);
	}
	.adPortada{
		position:relative;
		height:100px;
		padding-top:25px;
		background-image:url('portada.jpg');
	}
	.adPortada > h1{
		padding:0px;
		margin:0px;
		text-align:center;
		color:black;
		background-color:#FFECFF;
		font-family:"Lucida Sans", "Lucida Sans Regular", "Lucida Grande", "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
	}
	nav{
		display:block;
		background-color:black;
	}
	.adMenu{
		width:100%;
		height:80px;
	}
	.adMenu > ul{
		float:right;
	}
	.adMenu > ul > li{
		display:inline-block;
		padding-top:25px;
	}
	.adMenu > ul > li > a{
		text-decoration:none;
		text-align:center;
		color:whitesmoke;
		font-family:"Lucida Sans", "Lucida Sans Regular", "Lucida Grande", "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
		padding-right:15px;
	}
	.adMenu > ul > li > h1{
		color:whitesmoke;
		font-size:1.5em;
		font-family:pacifico;
		margin-right:20px;
	}
	.container{
		background-color:whitesmoke;
		width:500px;
		margin-top:25px;
	}
	.container > form{
		margin-top:10px;
		margin-bottom:10px;
		font-family:"Lucida Sans", "Lucida Sans Regular", "Lucida Grande", "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
	}
	.container > button{
		position:absolute;
		float:right;
	}

}
</style>
</head>

<body>
	<div class="adPortada">
		<h1>Productos</h1>
	</div>
	<nav>
		<div class="adMenu">
			<ul>
				<li><h1><?php echo $_SESSION['nombreUsuario'];?></h1></li>
				<li><a href="index.php">Cerrar Sesion</a></li>
				<li><a href="index2.php" class="font-weight-bold">Inicio</a></li>
				<li><a href="config.php" class="font-weight-bold">Stock</a></li>
				<li><a href="agregaCategorias.php" class="font-weight-bold">Categorias</a></li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<form method="post" action="altaProd.php" enctype="multipart/form-data">
			Nombre del producto: <input type="text" placeholder="Nombre del producto" name="txtProducto" class="form-control"><br>
			Descripción del producto: <textarea name="txtDescripcion"></textarea><br>
			Imagen del producto: <input type="file" name="txtImagen" ><br>
			
			<div class="input-group mb-3">
				<div class="input-group-prepend">
		  			<label class="input-group-text" for="inputGroupSelect01">Categoria:</label>
		  		</div>
				<select class="custom-select" name="opciones">
					<option> </option>
					<?php include('cargaCategorias.php');?>
				</select>
			</div>

			
			Precio: <input type="number" placeholder="$ MNX" name="txtPrecio" class="form-control"><br>
			Talla: <input type="text" placeholder="CH,M,G,Unitalla" name="txtTalla" class="form-control"><br>
			Existencia: <input type="number" name="txtExistencia" class="form-control"><br>
			<button type="submit" class="btn btn-primary" value="Agregar">Agregar</button>
			<button type="reset" class="btn btn-primary" value="Cancelar" >Cancelar</button>
		</form>
	</div>
</body>

</html>

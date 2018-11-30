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
		padding-top:30px;
	}
	.adMenu > ul > li > a{
		text-decoration:none;
		text-align:center;
		color:whitesmoke;
		font-family:"Lucida Sans", "Lucida Sans Regular", "Lucida Grande", "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
		padding-right:15px;
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
		<h1>Modificar Producto</h1>
	</div>
	<nav>
		<div class="adMenu">
			<ul>
				<li><a href="config.php" class="font-weight-bold">Stock</a></li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<!--<form method="get" action="altaProd.php">
			Nombre del producto: <input type="text" placeholder="Nombre del producto" name="txtProducto" class="form-control"><br>
			Descripción del producto: <textarea name="txtDescripcion"></textarea><br>
			Imagen del producto: <input type="file" name="txtImagen" ><br>
			Categoria: <input type="text" placeholder="Vestidos, Accesorios, Playeras." name="txtCategoria" class="form-control"><br>
			Precio: <input type="text" placeholder="$ MNX" name="txtPrecio" class="form-control"><br>
			Talla: <input type="text" placeholder="CH,M,G,Unitalla" name="txtTalla" class="form-control"><br>
			Existencia: <input type="number" name="txtExistencia" class="form-control"><br>
			<button type="submit" class="btn btn-primary" value="Agregar">Agregar</button>
			<a href="config.php" class="btn btn-primary" role="reset" aria-pressed="true">Cancelar</a>
		</form>-->
		<?php include('obtenProducto.php');?>
	</div>
</body>

</html>

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
		height:250px;
		margin-top:25px;
	}
	.container > form{
		margin-top:10px;
		margin-bottom:10px;
		font-family:"Lucida Sans", "Lucida Sans Regular", "Lucida Grande", "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
		padding-top:10px;
		padding-bottom:10px;
	}
	.container > form > button{
		float:right;
		margin-left:10px;
	}
	.container > form > h1{
		text-align:center;
		font-size:1.5em;
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
				<li><a href="index2.php" class="font-weight-bold">Inicio</a></li>
				<li><a href="config.php" class="font-weight-bold">Stock</a></li>
				<li><a href="agregaProds.php" class="font-weight-bold">Agregar productos</a></li>
			</ul>
		</div>
	</nav>
	<div class="container" style="height:200px;">
		<form method="get" action="altaCategoria.php">
			<h1>Agregar una categoria</h1>
			Nombre de la categoria: <input type="text" class="form-control" name="txtCategoria"><br>
			<button type="reset" class="btn btn-primary" value="Cancelar">Cancelar</button>
			<button type="submit" class="btn btn-primary" value="Agregar" >Agregar</button>
		</form>
	</div>
	<div class="container" style="height:200px;">
		<form method="get" action="eliminaCategoria.php">
			<h1>Eliminar una categoria</h1>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
		  			<label class="input-group-text" for="inputGroupSelect01">Categoria:</label>
		  		</div>
				<select class="custom-select" name="opciones">
					<option> </option>
					<?php include('cargaCategorias.php');?>
				</select>
			</div>
			<button type="reset" class="btn btn-primary" value="Cancelar" >Cancelar</button>
			<button type="submit" class="btn btn-primary" name="boton" value="Eliminar">Eliminar</button>
		</form>
	</div>
	<div class="container" style="margin-bottom:30px;">
		<form method="post" action="editCategoria.php">
			<h1>Editar una categoria</h1>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
		  			<label class="input-group-text" for="inputGroupSelect01">Categoria:</label>
		  		</div>
				<select class="custom-select" name="opciones">
					<option> </option>
					<?php include('cargaCategorias.php');?>
				</select>
			</div>
				Nuevo nombre: <input type="text" class="form-control" name="txtCategoria"><br>
				<button type="reset" class="btn btn-primary" value="Cancelar">Cancelar</button>
				<button type="submit" class="btn btn-primary" value="Editar" name="boton" >Editar</button>
		</form>
	</div>
</body>

</html>

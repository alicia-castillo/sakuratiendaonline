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
		height:1500px;
		background-color:#FFECFF;
	}
	@font-face{
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
		font-family:"Lucida Sans", "Lucida Sans Regular", "Lucida Grande", "Lucida Sans Unicode", Geneva, Verdana, sans-serif;	}
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
		width:600px;
		height:250px;
		margin-top:20px;
		margin-left:40px;
		background-color:whitesmoke;
		float:left;
	}
	.imgProducto{
		width:200px;
		height:200px;
		overflow:hidden;
		margin-top:25px;
		margin-left:5px;
		display:inline-block;
	}
	.descripcion{
		width:350px;
		height:200px;
		margin-top:25px;
		margin-left:20px;
		display:inline-block;
		position:absolute;
		background-color:#FFECFF;
		font-family:"Lucida Sans", "Lucida Sans Regular", "Lucida Grande", "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
	}
	.descripcion > h1{
		font-size:20px;
		text-align:center;
		padding-top:5px;
	}
	.descripcion > h2{
		font-size:18px;
		margin-left:25px;
		margin-right:25px;
	}
	.descripcion > h3{
		font-size:18px;
		margin-left:25px;
	}
	.botones{
		margin-left:25px;
		float:right;
	}
	
	.container > div > input{
		margin-left:25px;
	}
	.ordena > h1{
		font-size:1.5em;
		display:inline-block;
	}
	.ordena > select{
		display:inline-block;
	}
}
</style>
</head>

<body>
	<div class="adPortada">
		<h1>Administración de la pagina</h1>
	</div>
	<nav>
		<div class="adMenu">
			<ul>
				<li><h1><?php echo $_SESSION['nombreUsuario'];?></h1></li>
				<li><a href="index.php">Cerrar Sesion</a></li>
				<li><a href="index2.php" class="font-weight-bold">Inicio</a></li>
				<li><a href="config.php" class="font-weight-bold">Stock</a></li>
				<li><a href="agregaProds.php" class="font-weight-bold">Agregar productos</a></li>
				<li><a href="agregaCategorias.php" class="font-weight-bold">Categorias</a></li>
			</ul>
		</div>
	</nav>
	<div class="ordena"> 
		<form method="post"> 
			<div class="input-group mb-3">
				<div class="input-group-prepend">
		  			<label class="input-group-text" for="inputGroupSelect01">Mostar por categoria:</label>
		  		</div>
				<select class="custom-select" name="opcion">
					<option>Todo</option>
					<?php include('cargaCategorias.php');?>
				</select>
				<div class="input-group-append">
	    			<button class="btn btn-outline-secondary" type="submit">Aceptar</button>
	  			</div>
			</div>
		</form>
	</div>
	<div class="stock" id="stock">
		<?php include('configCards.php');?>
	</div>
</body>

</html>

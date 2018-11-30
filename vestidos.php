<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"><title>Untitled 1</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link href="css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="bootstrap-4.1.1/bootstrap-4.1.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-4.1.1/bootstrap-4.1.1/dist/js/bootstrap.min.js"> 
<link href="fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.css" rel="stylesheet">


<script type="text/javascript">
	window.onload = function onload2(){
		var caja = document.getElementById("articulos");
		var forma = document.getElementById("cards");
		var cloned = forma.cloneNode(true);
		cloned = forma.style.visibility = "visible";
		var table = <?php echo $rs;?>;
 		caja.appendChild(cloned);
	};
</script>
<style>
	body{
		margin:0px auto;
		padding:0px;
		height:1500px;
		background-color:#FFECFF;
	}
	@font-face{
		font-family:pacifico;
		src: url(fonts/Pacifico.ttf);
	}
	.Portada{
		height:250px;
		position:relative;
		overflow:hidden;
	}
	.Portada img{
		height:400px;
		width:100%;
	}
	.titulo{
	}
	nav{
		display:block;
		background-color:black;
	}
	.Menu{
		width:100%;
		height:70px;
	}
	.Menu > ul{
		float:right;
	}
	.Menu > ul > li{
		padding-top:15px;
		display:inline-block;
	}
	.Menu > ul > li > h1{
		color:whitesmoke;
		font-size:1.5em;
		font-family:pacifico;
		margin-right:20px;
	}
	.Menu > ul > li > a{
		display:block;
		text-decoration:none;
		font-family:"Lucida Sans", "Lucida Sans Regular", "Lucida Grande", "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
		padding-top:5px;
		color:whitesmoke;
		padding-right:10px;
	}
	.Menu > ul > li:hover .SubMenu{
		visibility:visible;
	}
	.SubMenu{
		position:absolute;
		padding:0px;
		margin:0px;
		background-color:black;
		visibility:hidden;
		border-top:solid 1px #FFECFF;
		z-index:4;
	}
	.SubMenu > li{
		list-style:none;
		position:relative;
		padding-bottom:10px;
	}
	.SubMenu > li > a{
		font-family:"Lucida Sans", "Lucida Sans Regular", "Lucida Grande", "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
		text-decoration:none;
		text-align:left;
		display:inline-block;
		padding:0px;
		color:whitesmoke;
		padding-top:10px;
		padding-left:5px;
		padding-right:5px;
	}
	.Contacto{
		position:absolute;
		width:100%;
		height:150px;
		bottom:0px;
		top:1355px;
		text-align:center;
		font-family:pacifico;
		background-color:black;
	}
	.Contacto > h1{
		display:inline-block;
		color:whitesmoke;
		padding:0px;
		margin:0px;
	}
	.Contacto > div{
		background-color:#FFECFF;
		display:block;
	}
	.Contacto > div > a{
		text-align:center;
		color:black;
		display:inline-block;
		text-decoration:none;
		font-size:35px;
	}
	.Contacto > span{
		display:inline-block;
	}
	.fa-circle{
		padding-left: 10px;
		padding-right: 10px;
		padding-top: 5px;
	}
	.Contacto > div > span{
		display:inline-block;
	}
	.container{
		background-color:whitesmoke;
		width:250px;
		height:370px;
		float:left;
		margin-left:100px;
		margin-top:75px;
	}
	.imgProd{
		height:200px;
		margin-top:15px;
		overflow:hidden;
	}
	.descripcion{
		margin-top:15px;
		background-color:#FFECFF;
	}
	.descripcion > h1{
		text-align:center;
		text-transform:uppercase;
		font-size:2em;
	}
	.descripcion > h2{
		text-align:center;
		font-size:1em;
		padding-left:10px;
	}
	.descripcion > a
	{
		float:right;
		margin-bottom:5px;
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
	<div class="Portada">
		<img src="img/portada3.jpg" class="img-fluid" alt="Responsive image">
	</div>
	<div class="titulo"></div>
	<nav>
		<div class="Menu font-weight-bold">
			<ul>
				<li><h1><?php echo $_SESSION['nombreUsuario'];?></h1></li>
				<li><a href="index.php">Cerrar Sesion</a></li>
				<li><a href="index2.php">Inicio</a></li>
				<li><a href="carritoCompras.php">Carrito de Compras</a></li>
				<!--<li><a href="vestidos.php">Buscador <input type="text" name="txtusqueda"></a></li>-->
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
	<div class="Articulos" id="articulos">		
		<?php include('cargaProds.php');?>
	</div>
	<div class="Contacto">
		<h1>Facebook</h1>
		<span class="fab fa-facebook-square fa-2x" style="color:whitesmoke"></span>
		<span class="fas fa-circle fa-1x" style="color:#FFECFF"></span>
		<h1>Instagram</h1>
		<span class="fab fa-instagram fa-2x" style="color:whitesmoke"></span>
		<div>
			<a href="preguntas.php">Escribenos</a>
			<span class="fas fa-comment-dots fa-2x"></span>
		</div>
	</div>
</body>

</html>

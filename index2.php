<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"><title>Untitled 1</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<link rel="stylesheet" href="bootstrap-4.1.1/bootstrap-4.1.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-4.1.1/bootstrap-4.1.1/dist/js/bootstrap.min.js"> 
<link href="fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.css" rel="stylesheet">
<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->

<style>
	body{
		margin:0px auto;
		padding:0px;
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
		font-family:"Lucida Sans", "Lucida Sans Regular", "Lucida Grande", "Lucida Sans Unicode", Geneva, Verdana, sans-serif;

	}
	.Menu > ul > li > h1{
		color:whitesmoke;
		font-size:1.5em;
		font-family:pacifico;
		margin-right:20px;
	}
	.Menu > ul > li{
		padding-top:15px;
		display:inline-block;
	}
	.Menu > ul > li > a{
		display:block;
		text-decoration:none;
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
		padding-top:5px;
		z-index:99;
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
		top:1500px;
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
	.Slider{
		padding-top:15px;
		height:400px;
		position:relative;
	}
	.card-deck{
		margin-bottom:20px;
	}
	.card > div{
		font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande", "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
	}
	.card-deck{
		width:1400px;
		margin-left:40px;
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
				<li><?php include('opcionesAdministrador.php');?></li>
				<li><a href="vestidos.php">Productos</a></li>
				<li><a href="carritoCompras.php">Carrito de Compras</a></li>
				<!--<li><a href="index2.php">Buscador <input type="text" name="txtusqueda"></a></li>-->
			</ul>
		</div>
	</nav>
	<div class="Slider">
	
		<!-- Start WOWSlider.com BODY section -->
		<div id="wowslider-container1">
			<div class="ws_images"><ul>
					<li><img src="data1/images/slide1.jpg" alt="Sakura Shop" title="Sakura Shop" id="wows1_0"/></li>
					<li><a href="http://wowslider.net"><img src="data1/images/slide2.jpg" alt="css image gallery" title="Ropa" id="wows1_1"/></a></li>
					<li><img src="data1/images/slide3.jpg" alt="Accesorios" title="Accesorios" id="wows1_2"/></li>
				</ul></div>
				<div class="ws_bullets"><div>
					<a href="#" title="Sakura Shop"><span><img src="data1/tooltips/slide1.jpg" alt="Sakura Shop"/>1</span></a>
					<a href="#" title="Ropa"><span><img src="data1/tooltips/slide2.jpg" alt="Ropa"/>2</span></a>
					<a href="#" title="Accesorios"><span><img src="data1/tooltips/slide3.jpg" alt="Accesorios"/>3</span></a>
				</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">css image gallery</a> by WOWSlider.com v8.8</div>
			<div class="ws_shadow"></div>
		</div>	
		<script type="text/javascript" src="engine1/wowslider.js"></script>
		<script type="text/javascript" src="engine1/script.js"></script>
		<!-- End WOWSlider.com BODY section -->
		
	</div>
	
	<div class="card-deck">
	  	<div class="card">
		    <img class="card-img-top" src="img/playera-sailor.jpg" alt="Card image cap">
		    <div class="card-body">
		     	<h5 class="card-title">Contamos con una extensa variedad en ropa, para que armes el outfit que mas vaya contigo</h5>
		    </div>
	  	</div>
	  	<div class="card">
		   	 <img class="card-img-top" src="img/productos-sailor.jpg" alt="Card image cap">
		   	 <div class="card-body">
		   	 	<h5 class="card-title">Tenemos los accesorios perfectos para resaltar tu belleza.</h5>
		    </div>
	  </div>
	  <div class="card">
	  	<img class="card-img-top" src="img/bolsas.jpg" alt="Card image cap">
		    <div class="card-body">
		    	<h5 class="card-title">Dale un toque unico a tu outfit con nuestra extensa variedad de bolsos/mochilas</h5>
		    </div>
	  </div>
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

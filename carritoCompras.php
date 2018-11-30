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
		border:solid 2px aqua;
		background-color:whitesmoke;
		width:500px;
		height:315px;
		}
	form{
		margin-top:5px;
		margin-bottom:5px;
	}
	.Productos > form > button{
		float:right;
		margin-right:10px;
	}
}
</style>

</head>

<body>
	<div class="Portada">
		<img src="portada3.jpg" class="img-fluid" alt="Responsive image">
	</div>
	<div class="titulo"></div>
	<nav>
		<div class="Menu font-weight-bold">
			<ul>
				<li><h1><?php echo $_SESSION['nombreUsuario'];?></h1></li>
				<li><a href="index2.php">Inicio</a></li>
				<li><a href="vestidos.php">Productos</a></li>
				<li><a href="carritoCompras.php">Carrito de Compras</a></li>
				<!--<li><a href="carritoCompras.php">Buscador <input type="text" name="txtusqueda"></a></li>-->
			</ul>
		</div>
	</nav>
	<div class="Productos">
		<?php if(isset($_GET['enviado']))
			  {
				if( $_GET['enviado'] == 1)
						echo '<div class="alert alert-success" role="alert">
							  	Los datos se enviaron correctamete.
						  	  </div>';
				else if($_GET['enviado'] == 0)
						echo '<div class="alert alert-danger" role="alert">
							  	No fue posible mandar los datos.
						  	  </div>';
			  }
					  ?>
		<form method="get" action="actualizaTabla.php">
			<table class="table">
			<thead>
				<tr>
					<th scope="col"></th>
					<th scope="col">Producto</th>
					<th scope="col">Cantdad</th>
					<th scope="col">Precio</th>
					<th scope="col">Subtotal</th>
					<th scope="col"></th>
				</tr>
			</thead>
			<tbody>
					<?php include('generaTabla.php');?>
			</tbody>
			</table>
			
			<button type="submit" name="boton" class="btn btn-primary" value="guardar">Confirmar y Seguir comprando</button>
			<button type="submit" name="boton" class="btn btn-primary" value="pagar">Confirmar y Pagar</button>
		</form>
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

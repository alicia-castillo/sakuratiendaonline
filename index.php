<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<title>Untitled 1</title>
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
		height:350px;
		position:relative;
		overflow:hidden;
	}
	.Portada > img{
		height:400px;
		width:100%;
	}
	.titulo{
		z-index:2;
		position:absolute;
		top:125px;
		left:450px;
		height:125px;
		width:615px;
	}
	.titulo > img{
		z-index:2;
		alignment-adjust:central;
	}
	nav{
		display:block;
		background-color:black;
		}
	
	.Menu{
		width:100%;
		height:70px;
		padding:15px;
	}
	.Menu > form{
		float:right;
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
		padding-left: 15px;
		padding-right: 15px;
		padding-top: 5px;
	}
	.Contacto > div > span{
		display:inline-block;
	}
	.InicioSesion{
		width:450px;
		height:460px;
		position:relative;
		margin-top:30px;
		margin-left:50px;
		background-color:whitesmoke;
		display:inline-block;
	}
	.InicioSesion > form > h1{
		text-align:center;
	}
	.InicioSesion .form-group{
		padding-left:20px;
		padding-right:20px;
	}
	.btn{
		margin-left:20px;
	}
	.slogan{
		width:500px;
		height:500px;
		display:inline-block;
		float:right;
		margin-top:50px;
		margin-right:50px;
		position:relative;
		right:30px;
	}
}
</style>
</head>
<body>
	<div class="Portada">
		<img src="img/portada3.jpg" class="img-fluid" alt="Responsive image">
	</div>
	<div class="titulo">
		<img src="img/titulo2.png" class="img-fluid rounded" alt="Responsive image">
	</div>
	<nav>
		<div class="Menu font-weight-bold">
			<form method="get" action="inicioSesion.php" style="color:whitesmoke" style="font-family:Lucida Sans, Lucida Sans Regular, Lucida Grande, Lucida Sans Unicode, Geneva, Verdana, sans-serif">
				Usuario: <input type="text" placeholder="Usuario" name="txtUsuario">
				Contraseña: <input type="password" placeholder="Contraseña" name="txtPwd">
				<button type="submit" class="btn btn-primary btn-sm btn-light" style="color:black" value="Iniciar sesion">Iniciar Sesión</button>
			</form>
		</div>
	</nav>
	<div class="InicioSesion">
		<form method="get" action="alta.php">
			<h1>Crea una cuenta</h1>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Nombre</label>
		    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nombre" name="txtNombre">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Usuario</label>
		    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Usuario" name="txtUsuario">
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail1">Correo electrónico</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo Electronico" name="txtCorreo">
		    <small id="emailHelp" class="form-text text-muted"></small>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Contraseña</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" name="txtPwd">
		  </div>
		  <button type="submit" class="btn btn-primary">Registrarse</button>
		</form>
	</div>
	<div class="slogan">
		<img src="img/slogan3.jpg" class="rounded float-right" alt="">
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

<?php session_start();
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

		
		<script type="text/javascript">
		function editar(idPr)
		{
			alert(idPr);
			var pregunta = document.getElementById(idPr);
			var textarea = document.createElement("textarea");
			comentario.parentNode.replaceChild(textarea,pregunta);
		}
	</script>
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
				padding-top:30px;
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

			#texto{
				background-color:#FFECFF;
			}
			#texto > h1{
				font-family:"Lucida Sans", "Lucida Sans Regular", "Lucida Grande", "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
				font-size:2em;
				padding-left:40px;
			}
			#formularioPregunta{
				width:300px;
				height:300px;
				float:left;
				margin-left:20px;
			}
			#formularioPregunta > form > textarea{
				width:100%;
				height:150px;
				margin-bottom:10px;
			}
			#formularioPregunta > form > h1{
				text-align:center;	
				font-size:2em;
				margin-bottom:10px;
				margin-top:10px;
			}
			#formularioPregunta > form > a{
				float:right;
				margin-top:15px;
			}
			.preguntas{
				width:350px;
				height:300px;
				float:left;
				margin-left:20px;
			}
			
			.preguntas > form > p{
				text-align:center;
			}
			.preguntas > form > h1{
				margin-top:10px;
				font-size:1.8em;
				text-align:center;
			}
			.preguntas > form > h2{
				font-size:1.2em;
			}
			.preguntas > form > a{
				float:right;
				margin-left:10px;
				margin-bottom:5px;
			}
			.preguntas > form > button{
				float:right;
				margin-left:10px;
			}
			.preguntas > form > #respuesta{
				width:100%;
				margin-bottom:5px;
			}
			.container{
				background-color:whitesmoke;
				margin-top:10px;
			}
			.preguntas > #respuesta > a{
				float:right;
				margin-left:10px;
			}			
}
		</style>
	</head>
	
	<body>
		<div class="adPortada">
			<h1>¿Tienes dudas?</h1>
		</div>
		<nav>
			<div class="adMenu">
				<ul>
					<li><h1><?php echo $_SESSION['nombreUsuario'];?></h1></li>
					<li><a href="index.php">Cerrar Sesion</a></li>
					<li><a href="index2.php" class="font-weight-bold">Inicio</a></li>
					<li><a href="vestidos.php" class="font-weight-bold">Productos</a></li>
				</ul>
			</div>
		</nav>
		<div class="container" id="texto" >
			<h1> Nos gustaria saber cuales son tus dudas. Escribelas aqui y con gusto nosotros las responderemos.</h1>
		</div>
		<!--<div class="container preguntas" id="formularioPregunta">
			<form>
				<h1>nobre usuario</h1>
				<textarea name="txtPregunta"></textarea><br>
				<a href="preguntas.php?g=1" type="submit" class="btn btn-primary" >Comentar</a>
			</form>
		</div>-->
		<?php include('preguntasUsuario.php');?>
		<!--<div class="preguntasUsuario">
			<div class="container preguntas" id="pregunta">
				<form>
					<h1>nombre usuario</h1>
					<p>fecha</p>
					<h2>aqui va la pregunta</h2>
					<button class="btn btn-primary">Editar</button>
					<button class="btn btn-primary">Eliminar</button>
					<form>
						<textarea name="txtRespuesta" id="respuesta"></textarea>
						<button class="btn btn-primary">Eliminar</button>
						<button class="btn btn-primary">Editar</button>
						<button class="btn btn-primary">Responder</button>
					</form>
				</form>
			</div>
		</div>-->
	</body>

</html>

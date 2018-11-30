<?php session_start();
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


<script src="xing-wysihtml5-fb0cfe4/parser_rules/advanced.js"></script>
<script src="xing-wysihtml5-fb0cfe4/dist/wysihtml5-0.3.0.min.js"></script>
<script type="text/javascript">
	function editar(idC)
	{
		alert(idC);
		var comentario = document.getElementById(idC);
		var textarea = document.createElement("textarea");
		comentario.parentNode.replaceChild(textarea,comentario);
	}
</script>
<style>
	body{
		margin:0px auto;
		padding:0px;
		height:1500px;
		background-color:#FFECFF;
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
	@font-face{
		font-family:pacifico;
		src: url(fonts/Pacifico.ttf);
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
		width:800px;
		height:430px;
		margin-top:20px;
	}
	form{
		margin-top:10px;
		margin-bottom:10px;
	}
	.imgProd{
		width:350px;
		height:400px;
		display:inline-block;
		margin-right:65px;
		margin-top:15px;
		overflow:hidden;
	}
	.descripcion{
		width:350px;
		height:400px;
		position:absolute;
		display:inline-block;
		background-color:#FFECFF;
		margin-top:15px;
	}
	.descripcion > h1{
		text-align:center;
		font-size:1.8em;
		margin-bottom:20px;
		}
	.descripcion > h2{
		padding-left:10px;
		font-size:1.5em;
	}
	.descripcion > button{
		float:right;
		margin-right:20px;
		margin-top:25px;
	}
	.Comentarios{
		margin-top:40px;
		text-align:center;
		font-family:pacifico;
		font-size:0.8em;
		background-color:black;
	}
	.Comentarios > h1{
		color:whitesmoke;
	}
	.contenedor{
		width:250px;
		height:220px;
		float:left;
		margin-left:30px;
	}
	.contenedor > form > p{
		text-align:center;
	}
	.btn{
		float:right;
		margin-top:10px;
		margin-left:10px;
	}
	.contenedor > form > textarea{
		width:100%;
		height:100%;
	}
	.wysiwyg-color-red {
  		color: red;
	}
	.wysiwyg-color-green {
		color: green;
	}
	.wysiwyg-color-blue {
		color: blue;
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
				<li><a href="vestidos.php">Productos</a>
				<ul class="SubMenu">
					<li><a href="index2.php">Inicio</a></li>
				</ul>
				</li>
				<li><a href="carritoCompras.php">Carrito de Compras</a></li>
				<!--<li><a href="...">Buscador <input type="text" name="txtusqueda"></a></li>-->
			</ul>
		</div>
	</nav>
	<div class="Articulos" id="articulos">
		<?php include('cargaProducto.php');?>	
	</div>
	<div class="Comentarios">
		<h1>Comentarios</h1>
	</div>
	<?php include('comentarios.php');?>
	<script>
		var editor = new wysihtml5.Editor("wysihtml5-textarea", { // id of textarea element
		  toolbar: "wysihtml5-toolbar", // id of toolbar element
		  parserRules:  wysihtml5ParserRules // defined in parser rules set 
		});
		
		var edito = new wysihtml5.Editor("wysihtml5-textare", { // id of textarea element
		  toolbar: "wysihtml5-toolba", // id of toolbar element
		  parserRules:  wysihtml5ParserRules // defined in parser rules set 
		});

	</script>
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

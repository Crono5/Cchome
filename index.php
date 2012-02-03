<!DOCTYPE html> 
<html lang="es">  
  <head> 
    <meta charset="utf-8"> 
    <title>Cchome.net</title>  
 
    <!-- Le HTML5 shim, for IE6-8 support of HTML elements --> 
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]--> 
 
	<link rel="stylesheet" href="_/css/bootstrap.css">
	<link rel="stylesheet" href="_/css/style.css">
     
    <link rel="shortcut icon" href="images/favicon.ico"> 
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png"> 
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png"> 
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png"> 
  </head> 
 
  <body id="bgNuevo"> 
	<div id="contenedorPrincipal"> 
		<div class="container" > 
			<div class="row"> 
				<div class="span4" id="logo"></div> 
				<div class="span8" id="headerDer"> 
					<img src="http://placehold.it/560x100"> 
				</div> 
			</div> 
		</div> 
	<div class="navbar" id="menuUser">
  <div class="navbar-inner" id="menuUserColor">
    <div class="container">
		<ul class="nav"><li><a href="#">Publicar</a></li></ul>
          <ul class="nav pull-right">
          	<li><a href="#">Bienvenido <strong>Visitante</strong></a></li>
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li> 
            <li class="dropdown"></li>
          </ul>
			</div>
  		</div>
	</div>
  <div class="navbar">
	  <div class="navbar-inner" id="menuNav">
	    <div class="container">
           <a class="brand" href="#">Colombia Caliente</a>
			<ul class="nav">
            <li><a href="#">Buscador</a></li>
            <li><a href="#">Contactos</a></li>
            <li><a href="#">Chat</a></li>
		    <li><a href="#">Ingresar</a></li>
		    <li><a href="#">Registrarme</a></li>
            </ul>
				</div>
  		</div>
		</div> 
		<div class="row" id="contenedorHome">
			<div class="span6">
			<div class="page-header" id="titulosWidget">
					<h3>Últimos post <small>últimos post enviados</small></h3>
			</div>			
						<?php include '_/inc/postHome.php'; ?>				
  	     	</div>
  		<div class="span6">
  			<div class="row widgetBloqueHome" id="unete">
  				<h2 id="titulosWidgetSidebar">Únete</h2>
  				<div class="span4">
  				<h3>Comunidad</h3>
				<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. </p>
  				<div class="botonfb">
				Facebook boton
				</div>
				<div class="botontw">
				<a href="https://twitter.com/masajistas" class="twitter-follow-button" data-show-count="false" data-lang="es">Segui @masajistas</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>
				<div class="botonpublicar">
				<a href="#" class="btn btn-large btn-success">Publicar</a>
				</div>
				</div>
  				<div class="span2" id="publi1lat">
				<img class="thumbnail" src="http://placehold.it/160x195" alt="">
			    </div>
  			</div> 
			<div class="row widgetBloqueHome" id="destacados">
				<div class="span3">
					<h3>hoy</h3>
					<ul>
					 <li><a href="#">Pellentesque habitant morbi tristique </a></li>
					 <li><a href="#">Pellentesque habitant morbi tristique </a></li>
					 <li><a href="#">Pellentesque habitant morbi tristique </a></li>
					 <li><a href="#">Pellentesque habitant morbi tristique </a></li>
					 <li><a href="#">Pellentesque habitant morbi tristique </a></li>
					</ul>
				</div> 
			    <div class="span3">
			    	<h3>Semana</h3>
			    	<ul><li><a href="#">Pellentesque habitant morbi tristique</a></li></ul>
			    	<h3>semana</h3>
			    	<ul><li><a href="#">Pellentesque habitant morbi tristique</a></li></ul>
			    	<h3>semana</h3>
			    	<ul><li><a href="#">Pellentesque habitant morbi tristique</a></li></ul>
			    	</div>
			</div>
  			<div class="row widgetBloqueHome" id="destacados">
			<div class="span4"><h3>Comentarios</h3>
			<?php include '_/inc/comentariosHome.php'; ?>
  			</div> 
  		</div> 
      </div> 
       <footer>
		<div class="navbar">
				<div class="container">
				<ul class="nav">
					<li><a class="active" href="#">Protocolo</a></li>
					<li><a href="#">Politicas de Privacidad</a></li>
					<li><a href="#">Concursos y premios</a></li>
					<li><a href="#">Ayuda</a></li>
					<li><a href="#">Publicidad de nuestro Sitio</a></li>
					<li ><a href="#">Denuncias</a></li>
					<li ><a href="#">Mapa del sitio</a></li>
				</ul>
		  </div>
		</div>	
      </footer>
      </div> <!-- /contenedorHome -->  
   <!-- /container --> 
   
 </div> 
  </body> 
</html> 
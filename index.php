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
				<div class="span4" id="logo"><img src="http://dummyimage.com/250x90&text=Acá va el logo" alt="" /></div> 
				<div class="span8" id="headerDer"> 
					<img src="http://placehold.it/670x90"> 
				</div> 
			</div> 
		</div> 
	<div class="row" id="menuUser">
		<div class="container">
			<a class="btn btn-info" href="#">Enviar contenido</a>
			<ul class="nav nav-pills pull-right">
		  <li class="active">
		    <a href="#" id="linkMenuUser"> <i class="icon-user icon-white"></i> Cuenta</a>
		  </li>
		  <li><a href="#" id="linkMenuUser"> <i class="icon-heart icon-white"></i> Favorito</a></li>
		  <li><a href="#" id="linkMenuUser"> <i class="icon-envelope icon-white"></i> Inbox</a></li>
		  <li><a href="#" id="linkMenuUser"> <i class="icon-th icon-white"></i> Galería</a></li>
		</ul>
		
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
            <form class="navbar-search pull-left" action="">
            <input type="text" class="search-query span2" placeholder="Buscar">
          </form>
            <ul class="nav pull-right">
			  <li class="dropdown">
			    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
			          Categorías
			          <b class="caret"></b>
			    </a>
			    <ul class="dropdown-menu">
			    </ul>
			  </li>
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
				<h2 id="titulosWidgetSidebar">Destacados</h2>
				<div class="span3">
					<h3>Hoy</h3>
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
			    	<h3>Mes</h3>
			    	<ul><li><a href="#">Pellentesque habitant morbi tristique</a></li></ul>
			    	<h3>Año</h3>
			    	<ul><li><a href="#">Pellentesque habitant morbi tristique</a></li></ul>
			    	</div>
			</div>
  			<div class="row widgetBloqueHome" id="comentarios">
			<h2 id="titulosWidgetSidebar">Comentarios</h2>
			<div class="span4">
			<?php include '_/inc/comentariosHome.php'; ?>
  			</div> 
			</div> 
			<div class="row widgetBloqueHome" id="sobrenos">
			<h2 id="titulosWidgetSidebar">Sobre Nosotros</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet rutrum scelerisque. Fusce ut nisi sapien, vel vehicula dui. Maecenas in dui non elit vestibulum interdum eu at nunc. In rhoncus blandit congue.</p>
			<div class="span4" id="log">
			  <a href="#" class="btn btn-primary">Registrarme</a>
			  <a href="#" class="btn btn-info">Login</a>
			</div>
			<div class="botonpublicar">
			 <a href="#" class="btn btn-large btn-success">Publicar</a>
		    </div>
			</div> 
			<div class="row widgetBloqueHome" id="adsside" >
			<div class="span2">
			<img class="thumbnail" src="http://placehold.it/160x600" alt="">
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
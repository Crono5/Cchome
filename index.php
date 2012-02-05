<?php include 'header.php';?>
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
				<div class="botonpublicar" >
				<a id="btpubli" href="#" class="btn btn-large btn-success">Publicar</a>
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
			<!-- widgets mobile -->
			<div class="row">
			<div class="span6" id="gridwidgets">
			<div class="span4" id="widgetsside">
  			<div class="row widgetBloqueHome" id="comentarios">
			<h2 id="titulosWidgetSidebar">Comentarios</h2>
			<?php include '_/inc/comentariosHome.php'; ?>
			</div> 
			<div class="row widgetBloqueHome" id="sobrenos">
			<h2 id="titulosWidgetSidebar">Sobre Nosotros</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet rutrum scelerisque.Lorem ipsum dolor sit amet.</p>
			<div id="log">
			  <a href="#" class="btn btn-primary">Registrarme</a>
			  <a href="#" class="btn btn-info">Login</a>
			</div>
			<div class="botonpublicar">
			  <a href="#" class="btn btn-large btn-success">Publicar</a>
		    </div>
			</div> 
			</div>
			<div class="span2" id="adsidelong">
			<img class="thumbnail" src="http://placehold.it/160x410" alt="">
			</div> 
			</div>
			</div>
			<!-- /widgets mobile -->
			
			<!-- posicionador adsense lateral -->
			<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
			<script type="text/javascript">
			window.onload = function( ){
					$( window ).scroll( function( ){ 
						var scroller_object = $( "#gridwidgets" );
						if( document.documentElement.scrollTop >= 820 || window.pageYOffset >= 820 )
						{scroller_object.css( { position: "fixed", top: "0px" } );}
						else if( document.documentElement.scrollTop < 820 || window.pageYOffset < 820 )
						{scroller_object.css( { position: "relative", top: "10px" } );}
					} );
				}
			</script>
			<!-- /posicionador adsense lateral -->
			<!-- posicionador barra home -->
			<script type="text/javascript">
			window.onload = function( ){
					$( window ).scroll( function( ){ 
						var scroller_object = $( "#menuNav" );
						if( document.documentElement.scrollTop >= 200 || window.pageYOffset >= 200 )
						{scroller_object.css( { position: "fixed", top: "0px" } );}
						else if( document.documentElement.scrollTop < 200 || window.pageYOffset < 200 )
						{scroller_object.css( { position: "relative", top: "10px" } );}
					} );
				}
			</script>
			<!-- /posicionador barra home -->
			
      </div> 
      <?php include 'footer.php';?>
window.onload = function( ){
		$( window ).scroll( function( ){ 
		    var scroll_menu = $( "#menuNav" );
			var scroll_widgets = $( "#gridwidgets" );
			if( document.documentElement.scrollTop >= 135 || window.pageYOffset >= 135 )
			{scroll_menu.css( { position: "fixed", top: "0px" } );}
			else if( document.documentElement.scrollTop < 135 || window.pageYOffset < 135 )
			{scroll_menu.css( { position: "relative", top: "10px" } );}
			if( document.documentElement.scrollTop >= 1200 || window.pageYOffset >= 1200 )
			{scroll_widgets.css( { position: "fixed", top: "40px" } );}
			else if( document.documentElement.scrollTop < 1200 || window.pageYOffset < 1200 )
			{scroll_widgets.css( { position: "relative", top: "10px" } );}
		} );
}


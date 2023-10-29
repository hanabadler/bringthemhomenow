



<?php
/**
 * Plugin Name: bringthemhomenow
 * Description: We demand the safe return of all citizens who have been taken hostage by the terrorist group Hamas. We will not rest until every hostage is released and returns home safely. You can help bring them back home.
 * Plugin URI: bringthemhomenow.net
 * Author: bringthemhomenow.net
 * Version: 1.0.0
 * Author URI: bringthemhomenow.net
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function hostage_widget(){
	?>
		<div id="bthn" lang="he"></div>>
		<script>
		(function () {    
		var script = document.createElement("script");    
		script.type = "text/javascript";    
		script.src = "https://bringthemhomenow.net/1.0.1/hostages-ticker.js";    
		script.setAttribute(      
		"integrity",      
		"sha384-RtzuLlxIAusxCPpzYFNMIqob3ATD8mah607/i7RVMgfuCYPP+7ZJ9bcoAXRHiafa"    
		);    
		script.setAttribute("crossorigin", "anonymous");    
		document.getElementsByTagName("head")[0].appendChild(script);  
		})();
		</script>
	<?php
	
}
add_action( 'wp_footer', 'hostage_widget' 

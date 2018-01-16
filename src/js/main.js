window.$ = window.jQuery = require('jquery');

var loadedModules = {
	'header': require('./modules/header')
};

function initializeModules() {
	var modules = document.querySelectorAll( "[data-module-init]" );

	for ( var i = 0; i < modules.length; i++ ) {
		var el = modules[ i ];
		var $el = $( el );
		var name = el.getAttribute( "data-module-init" );

		// Initialize the module with the calling element
		if ( typeof loadedModules[name] === 'function' && !$el.data( 'module' ) ) {
			var mod = new loadedModules[name]( el );

			// Save module instance to jQuery data
			$( el ).data( "module", mod );
		}
	}
}

jQuery(function($) {
	initializeModules();
});

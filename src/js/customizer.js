( function( $ ) {
	console.log('cutomizer.js was included!');
	wp.customize( 'footer_copyright_text_setting', function( value ) {
		value.bind( function( newval ) {
			$( '.js-footer-copyright-text' ).html( newval );
		} );
	} );
} )( jQuery );

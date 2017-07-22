/**
 * Handles sticky header
 */

( function( $ ) {

	var stickyHeader       = $( '.sticky-wrapper' );
	var stuckHeader        = $( '.sticky-wrapper.sticking' );
	var topBar             = $( '.top-bar' );
	var stickyHeaderOffset = topBar.outerHeight();
	var stickyHeaderHeight = stuckHeader.outerHeight();
	var body               = $( 'body' );
	var windowWidth;

	var stickyTime = function( width ) {
		if( window.pageYOffset >= ( stickyHeaderOffset ) && width >= 1100 ) {
			stickyHeader.addClass( 'sticking' );
			body.css( 'padding-top', stickyHeaderHeight );
			topBar.css( 'visibility', 'hidden' );
		} else {
			stickyHeader.removeClass( 'sticking' );
			body.removeAttr( 'style' );
			topBar.removeAttr( 'style' );
		}
	}

	// Functions to fire on window load
	$( window ).load( function() {
		windowWidth = $( this ).width();
		stickyTime( windowWidth );
	} );

	// After scrolling
	$( window ).scroll( function() {
		windowWidth = $( this ).width();
		stickyTime( windowWidth );
	} );

} )( jQuery );

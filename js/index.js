function scrollEffects() {

	var SECTION_SERVICES = {
		START: 1000,
		END: 2100
	};

	var HEADER = {
		START: 0,
		END: 500
	}

	// navbar
	if (  
		window.scrollY >= HEADER.START && 
		window.scrollY <= HEADER.END 
	) {

		if ( background === '#343434' ) {
			background = 'linear-gradient(90deg, rgba(171,48,56,1) 0%, rgba(40,102,123,1) 100%)';
		}

	} else {

		if ( background !== '#343434' ) {
			background = '#343434';
		}

	}

	// text
	if ( 
		window.scrollY >= SECTION_SERVICES.START && 
		window.scrollY <= SECTION_SERVICES.END 
	) {

		if ( color !== 'white' ) {
			color = 'white';
		}

	} else {

		if ( color !== 'transparent' ) {
			color = 'transparent';
		}
	}

	elementsEffect.css( 'color', color );
	navbar.css( 'background', background );
}

function redirectTo( route = '' ) {
	return location.href = route;
}

var elementsEffect = $('.effect');
var navbar = $('#cambio');
var color = 'transparent';
var background = 'linear-gradient(90deg, rgba(171,48,56,1) 0%, rgba(40,102,123,1) 100%)';

$( document ).on( 'scroll', scrollEffects );
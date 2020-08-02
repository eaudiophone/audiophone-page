function seeTextServices() {

	var SECTION_SERVICES = {
		START: 1000,
		END: 2100
	};

	var CSS = {
		color
	};

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

	elementsEffect.css( CSS );
}

var elementsEffect = $('.effect');
var color = 'transparent';

$( document ).on( 'scroll', seeTextServices );
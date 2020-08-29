function openModal( action = 'hide', id = 1 ) {

	var query = $('#content');
	var found = data.find( ( foto ) => id === foto.id );

	if ( found ) {
		currentPhoto = id;
	}

	query.html( getTemplate( found ) );

	modalGallery.modal( optionsModal );

	renderFotos();

	return modalGallery.modal( action );
}

function getTemplate( found = {} ) {
	return (`
		<figure class="figure mt-r">
  		<img src="${ found.img }" class="figure-img img-fluid rounded foto-inside">
			<h3>${ found.name }</h3>
  		<figcaption class="figure-caption">${ found.description }</figcaption>
		</figure>
	`);
}

function changeFoto( id = 1 ) {
	
	var query = $('#content');
	var found = data.find( ( foto ) => id === foto.id );

	if ( found ) {
		currentPhoto = id;
	}

	return query.html( getTemplate( found ) );
}

function renderFotos() {

	var query = $('#foto-list');
	var template = '';

	data.forEach(( foto ) => {
		template += (
			`<img 
				src="${ foto.img }" 
				alt="prueba" 
				class="foto-list" 
				onclick="changeFoto( ${ foto.id } )" 
			/>`
		);
	});

	query.html( template );
}

function changeKeyboard( keyPress = 0 ) {

	var KEY_CODE = Object.freeze({
		ARROW_LEFT: 37,
		ARROW_RIGHT: 39
	});

	if ( keyPress === KEY_CODE.ARROW_LEFT ) {

		if ( currentPhoto === 1 ) {
			return changeFoto( 8 );
		} 
		
		changeFoto( currentPhoto - 1 );
	
	} else if ( keyPress === KEY_CODE.ARROW_RIGHT ) {

		if ( currentPhoto === 8 ) {
			return changeFoto( 1 );
		} 

		changeFoto( currentPhoto + 1 );

	}
}

// ejecucion
var data = [
	{ id: 1, img: './img/22.JPG', name: 'prueba 1', description: 'prueba de description' },
	{ id: 2, img: './img/21.JPG', name: 'prueba 2', description: 'prueba de description' },
	{ id: 3, img: './img/can-stu.png', name: 'prueba 3', description: 'prueba de description' },
	{ id: 4, img: './img/trom-stu.png', name: 'prueba 4', description: 'prueba de description' },
	{ id: 5, img: './img/billy-stu.png', name: 'prueba 5', description: 'prueba de description' },
	{ id: 6, img: './img/jho-ara.png', name: 'prueba 6', description: 'prueba de description' },
	{ id: 7, img: './img/gen.png', name: 'prueba 7', description: 'prueba de description' },
	{ id: 8, img: './img/pdro.png', name: 'prueba 8', description: 'prueba de description' }
];

var optionsModal = {
	backdrop: 'static'
};

var currentPhoto = 1;

var modalGallery = $('#modal-gallery');
modalGallery.on( 'keydown', ({ originalEvent }) => changeKeyboard( originalEvent.keyCode ) );
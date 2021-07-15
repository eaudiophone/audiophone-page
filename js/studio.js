function openModal( action = 'hide', id = 1 ) {

	var query = $('#content');
	var found = data.find( ( foto ) => id === foto.id );

	if ( found ) {
		currentPhoto = id;

		query.html( getTemplate( found ) );

		modalGallery.modal( optionsModal );

		renderFotos();
	}

	return modalGallery.modal( action );
}

function getTemplate( found = {} ) {
	return (`
		<figure class="figure mt-r">
  		<img src="${ found.img }" class="figure-img img-fluid rounded foto-inside">
			<h3>${ found.name }</h3>
  		<figcaption class="figure-caption ml-4 mr-4 ml-lg-0 mr-lg-0">${ found.description }</figcaption>
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
				class="foto-list cursor hover-shadow"
				onclick="changeFoto( ${ foto.id } )"
			/>`
		);
	});

	query.html( template );
}

function changeKeyboard( keyPress = 37 ) {

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

function createGallery() {

	const rowPhotos = Array.from( document.querySelector('#row-photos').querySelectorAll('.row'));

	// coloca 4 fotos por cada fila el array tiene 8 elementos
	rowPhotos.forEach(( row, index ) => {

		if ( index === 0 ) {
			for ( let i = 0; i < ( data.length / 2 ); i++ ) {
				row.innerHTML += (`
					<div class="col-md-3 col-6 p-0">
						<img src="${ data[i].img }" alt="img" class="foto hover-shadow" onclick="openModal('show', ${ data[i].id } )">
					</div>
				`);
			}

		} else {
			for ( let i = ( data.length / 2 ); i < data.length; i++ ) {
				row.innerHTML += (`
					<div class="col-md-3 col-6 p-0">
						<img src="${ data[i].img }" alt="img" class="foto hover-shadow" onclick="openModal('show', ${ data[i].id } )">
					</div>
				`);
			}
		}
	});
}

// array de imagenes
var data = [
	{ id: 1, img: './img/studio/01.jpg', name: 'Juan Pablo Barrios y su Orquesta', description: 'Grabando desde los Estudios Audiophone. Caracas, Venezuela.' },
	{ id: 2, img: './img/studio/02.jpg', name: 'Yeny Rojas, José Ortega y Héctor Velázquez', description: 'Yeny Rojas excelente cantatante, el Señor José Ortega y Hector Velásquez trombón en producción del Sr José Ortega...' },
	{ id: 3, img: './img/studio/03.jpg', name: 'Robert Van Eps', description: "Excelente trabajo el de Robert van Eps de Curac'ao En los Estudios Audiophone" },
	{ id: 4, img: './img/studio/04.jpg', name: 'Emerson', description: 'Esta vez de grabadera con Emerson excelente pianista en los Estudios Audiophone. Caracas Venezuela' },
	{ id: 5, img: './img/studio/05.jpg', name: 'Alfonso Martínez, Remy Band y Hildemaro Hugas', description: 'Un mediodia de este domingo excelente y muy agradable con el maestro Hildemaro arreglos del Sr Pernia en Perú.. muy pronto!!!!!!' },
	{ id: 6, img: './img/studio/06.jpg', name: 'Jorge Arias', description: 'Grabando en los Estudios el maestro Jorge Arias excelente drums.' },
	{ id: 7, img: './img/studio/07.jpg', name: 'Alfonso Martínez', description: '"Que grato es trabajar con la gente que conoce y reconoce que tu trabajo es excelente y de calidad..." Estudios Audiophone Caracas Venezuela' },
	{ id: 8, img: './img/studio/08.jpg', name: 'Enrique Culebra, Juan Pablo Barrios y Richard Saoco', description: 'Excelente pauta en los Estudios Audiophone con Enrique Culebra, Juan Pablo Barrios y Richard Saoco...' }
];

var optionsModal = {
	backdrop: 'static'
};

var currentPhoto = 1;

var modalGallery = $('#modal-gallery');
modalGallery.on( 'keydown', ({ originalEvent }) => changeKeyboard( originalEvent.keyCode ) );

$( document ).ready( createGallery );

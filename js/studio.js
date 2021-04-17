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

// ejecucion
var data = [
	{ id: 1, img: './img/22.JPG', name: 'Aracelis Fiallo', description: 'Aracelis Fiallo . Excelente violinista.' },
	{ id: 2, img: './img/21.JPG', name: 'Verónica Fiallo', description: 'Verónica Fiallo. grabando música venezolana junto a su hermana Aracelys..' },
	{ id: 3, img: './img/can-stu.png', name: 'José Mire', description: 'Excelente cantante.. José Mire.' },
	{ id: 4, img: './img/trom-stu.png', name: 'Alexis González', description: 'Alexis González grabando en estudios Audiophone' },
	{ id: 5, img: './img/billy-stu.png', name: 'Billys', description: 'Billys grabando trackjevy en Estudios Audiophone.' },
	{ id: 6, img: './img/jho-ara.png', name: 'Jhonathan Araque', description: 'Grabando tema de Jesus Menudo con el cantante Yonathan Araque en los Estudios Audiophone.' },
	{ id: 7, img: './img/gen.png', name: 'Génesis', description: 'Génesis joven talento nacional, grabando en Estudios Audiophone.' },
	{ id: 8, img: './img/pdro.png', name: 'Pedro Moya', description: 'Sr. Pedro Moya grabando tema en los estudios audiophone' }
];

var optionsModal = {
	backdrop: 'static'
};

var currentPhoto = 1;

var modalGallery = $('#modal-gallery');
modalGallery.on( 'keydown', ({ originalEvent }) => changeKeyboard( originalEvent.keyCode ) );
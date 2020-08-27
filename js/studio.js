class Card {

	constructor( img = '', name = '', description = '' ) {
		this.img = img;
		this.name = name;
		this.description = description;
	}
}

function getCardTemplate( card ) {

	var html = `
		<div class="card cards-fot">
		  <img class="fot" src="${ card.img }" alt="Card image cap">
		  <div class="card-body"></div>
		</div>
	`;

	return html;
}

function openModal( urlImage = '' ) {
	console.log( urlImage );
}


function render () {

	var temp = '';

	var arrayCard = [
		new Card( './img/21.JPG', 'nombre', 'description' ),
		new Card( './img/02.JPG', 'nombre', 'description' ),
		new Card( './img/13.JPG', 'nombre', 'description' ),
		new Card( './img/22.JPG', 'nombre', 'description' ),
		new Card( './img/01.png', 'nombre', 'description' ),
		new Card( './img/26.JPG', 'nombre', 'description' ),
	];

	var cardContainer = $('#cards');

	arrayCard.forEach(( card, index ) => {
		
		if ( index % 2 == 0 ) {

			temp += '<div class="d-flex flex-row justify-content-around w-100">';
			temp += getCardTemplate( card );
		
		} else {

			temp += getCardTemplate( card );
			temp += '</div>';
		}

	});

	cardContainer.html( temp );
}

render();

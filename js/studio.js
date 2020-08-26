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
		  <img class="card-img-top" src="${ card.img }" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">${ card.name }</h5>
		    <p class="card-text">${ card.description }</p>
		    <div class="text-center">
		    	<button class="btn btn-primary" onclick="openModal('${ card.img }')">
		    		Ver foto
		    	</button>
		    </div>
		  </div>
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

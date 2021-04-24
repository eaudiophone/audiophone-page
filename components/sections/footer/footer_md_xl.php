<?php

function getFooter( $url ) {

return <<<TEMPLATE
<div class="d-flex flex-row justify-content-between" style="padding: 20px;">
	<div class="font-italic">Design for:
		<a class="font-special" href="https://gabmart1995.github.io/" target="_blank">Gabriel Martinez</a> &
		<span class="font-special">Darianna Martinez</span>
	</div>
	<div class="links">
		<a href="${url}" target="_blank">
			<i class="fa fa-instagram fa-2x"></i>
		</a>
	</div>
	<div class="terms" data-toggle="modal" data-target="#modalTerms">
		Términos y condiciones del Servicio
	</div>
</div>
TEMPLATE;

}

function getFooterXS( $url ) {

return <<<TEMPLATE
<div class="d-flex flex-column justify-content-center align-items-center" style="padding: 20px;">
	<div class="font-italic text-center mb-4">Design for: <br>
		<a class="font-special" href="https://gabmart1995.github.io/" target="_blank">Gabriel Martinez</a> &
		<span class="font-special">Darianna Martinez</span>
	</div>
	<div class="links mb-4">
		<a href="${url}" target="_blank">
			<i class="fa fa-instagram fa-2x"></i>
		</a>
	</div>
	<div class="terms" data-toggle="modal" data-target="#modalTerms">
		Términos y condiciones del Servicio
	</div>
</div>
TEMPLATE;

}

?>

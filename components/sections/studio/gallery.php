<div class="container">
	<div class="row">
		<div class="col-3 p-0">
			<img src="./img/22.JPG" alt="img" class="foto hover-shadow" onclick="openModal('show', 1 )">
		</div>
		<div class="col-3 p-0">
			<img src="./img/21.JPG" alt="img" class="foto hover-shadow" onclick="openModal('show', 2 )">
		</div>
		<div class="col-3 p-0">
			<img src="./img/can-stu.png" alt="img" class="foto hover-shadow" onclick="openModal('show', 3 )">
		</div>
		<div class="col-3 p-0">
			<img src="./img/trom-stu.png" alt="img" class="foto hover-shadow" onclick="openModal('show', 4 )">
		</div>
	</div>
	<div class="row">
		<div class="col-3 p-0">
			<img src="./img/billy-stu.png" alt="img" class="foto hover-shadow" onclick="openModal('show', 5 )">
		</div>
		<div class="col-3 p-0">
			<img src="./img/jho-ara.png" alt="img" class="foto hover-shadow" onclick="openModal('show', 6 )">
		</div>
		<div class="col-3 p-0">
			<img src="./img/gen.png" alt="img" class="foto hover-shadow" onclick="openModal('show', 7 )">
		</div>
		<div class="col-3 p-0">
			<img src="./img/pdro.png" alt="img" class="foto hover-shadow" onclick="openModal('show', 8 )">
		</div>
	</div>
</div>

<!-- fondo modal -->
<div class="modal modal-gallery" id="modal-gallery" tabindex="-1" role="dialog">
  <div class="w-100 text-right" style="margin-top: 10px">
    <i class="fa fa-close fa-2x cursor" onclick="openModal('hide')"></i>
  </div>
  <div class="modal-gallery-content text-center" id="content"></div>
  <div id="foto-list" class="w-100 text-center"></div>
</div>
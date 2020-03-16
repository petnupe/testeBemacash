<?php include __DIR__ . '/../inicio-html.php'; ?>
<script type="text/javascript">

function teste(idPedido) {
	    var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("divPedido"+idPedido).innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "/DetalhePedido?idPedido=" + idPedido, true);
        xmlhttp.send();
}
</script>

<div class="container-fluid mb-5">
	<?php foreach($pedidosList as $pedido): ?>
		<li class="list-group-item list-group-item-success mt-4">
			<div class="row">
				<div class="col-9">
					<?= $pedido->getContrato()->getDescricao(); ?>
				</div>
				<div class="col-2 text-right">
					<h6 class="badge badge-pill badge-secondary">
						R$ 
						<?= number_format($pedido->valorTotalPedido(), 2, ',', '.'); ?>
					</h6>
				</div>
				<div class="col text-right">
					<i class="fas fa-arrow-circle-down" onClick="teste(<?= $pedido->getId(); ?>)"></i>
				</div>
			</div>
		</li>
		<li class="list-group-item list-group-item-secondary">
			<div class="row">
				<div class="col-2">Pedido 
					<?= $pedido->getId(); ?>
				</div>
				<div class="col-7 text-left">
					<?= $pedido->getContrato()->getDescricao(); ?>
				</div>
				<div class="col">
					<?= $pedido->getUltimoHistorico()->getData(); ?>
				</div>
				<div class="col">
					<?= $pedido->getUltimoHistorico()->getStatus()->getDescricao(); ?>
				</div>
			</div>
		</li>
	<div id="divPedido<?= $pedido->getId(); ?>"></div>
 	<?php endforeach; ?>
</div>
<?php include __DIR__ . '/../fim-html.php'; ?>

<?php foreach($pedido->getItens() as $item): ?>
	<li class="list-group-item list-group-item-light pr-5">
		<div class="row">
			<div class="col">
				<?= $item->getProduto()->getIcone(); ?>
			</div>
			<div class="col-10">
				<?= $item->getProduto()->getDescricao(); ?>
			</div>
			<div class="col text-right">
				<h6 class="badge badge-pill badge-secondary">
					<?= $item->getQuantidade(); ?>
				</h6>
			</div>
		</div>
	</li>
<?php endforeach; ?>
<li class="list-group-item list-group-item-light pr-5">
	<div class="row">
		<div class="col">
			Contrato de Licença: 
		</div>
		<div class="col-10">
			<?= $pedido->getContrato()->getDescricao(); ?>
		</div>
	</div>
</li>
<li class="list-group-item list-group-item-light pr-5">
	<div class="row">
		<div class="col">
			Status:
		</div>
		<div class="col">
			<h6 class="badge badge badge-warning">
				<?= $pedido->getUltimoHistorico()->getStatus()->getDescricao();?>
			</h6>
		</div>
	</div>
</li>
<li class="list-group-item list-group-item-light pr-5">
	<div class="row">
		<div class="col">
			Data de Criação: 
		</div>
		<div class="col">
			<?= $pedido->getData();?>
		</div>
	</div>
</li>
<li class="list-group-item list-group-item-light pr-5">
	<div class="row">
		<div class="col">
			CNPJ: 
		</div>
		<div class="col">
			<?= $pedido->getCliente()->getCnpj();?>
		</div>
	</div>
</li>
<li class="list-group-item list-group-item-light pr-5">
		<div class="row">
		<div class="col">
			Estado para envio: 
		</div>
		<div class="col">
			<?= $pedido->getCliente()->getUf();?>
		</div>
	</div>
</li>
<li class="list-group-item list-group-item-light pr-5">
	<div class="row">
		<div class="col">
			Telefone: 
		</div>
		<div class="col">
			<?= $pedido->getCliente()->getTelefone();?>
		</div>
	</div>
</li>
<li class="list-group-item list-group-item-light pr-5">
	<div class="row">
		<div class="col">
			CEP para envio: 
		</div>
		<div class="col">
			<?= $pedido->getCliente()->getCep();?>
		</div>
	</div>
</li>
<li class="list-group-item list-group-item-light pr-5">
	<div class="row">
		<div class="col">
			Endereço para envio: </div>
		<div class="col">
			<?= $pedido->getCliente()->getEndereco();?>
		</div>
	</div>
</li>
<li class="list-group-item list-group-item-light pr-5">
	<div class="row">
		<div class="col">
			País de envio: 
		</div>
		<div class="col">
			<?= $pedido->getCliente()->getPais();?>
		</div>
	</div>
</li>
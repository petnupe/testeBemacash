<?php include __DIR__ . '/../inicio-html.php'; ?>

<div class="container-fluid">
<?php foreach($pedidosList as $pedido): ?>
    <li class="list-group-item list-group-item-success">
      <div class="row">
            <div class="col col-sm">Pedido <?= $pedido->getId(); ?></div>
            <div class="col-3"><?= $pedido->getContrato()->getDescricao(); ?></div>
            <div class="col"><?= $pedido->getUltimoHistorico()->getData(); ?></div>
            <div class="col"><?= $pedido->getUltimoHistorico()->getStatus()->getDescricao(); ?></div>
            <div class="col"><h6 class="badge badge-pill badge-secondary">R$ 1.000,00</h6></div>
      </div>
    </li>
<?php endforeach; ?>
</div>
<?php include __DIR__ . '/../fim-html.php'; ?>
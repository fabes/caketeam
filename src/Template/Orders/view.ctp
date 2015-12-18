<?= $this->element('Orders/header', array('title' => $order->title)); ?>
<div class="row">
    <div class="small-12 columns text-right">
        <?= $this->Html->link('Back to Orders', ['action' => 'index'],['class' => 'button']); ?>
    </div>
</div>
<div class="row">
    <div class="small-12 columns">
       This order is: <strong><?= $order->full_status;?></strong>
    </div>
</div>

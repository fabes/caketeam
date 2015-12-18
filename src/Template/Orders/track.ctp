<?= $this->element('Orders/header', array('title' => 'Track Your Order')); ?>
<div class="row">
    <div class="small-12 medium-6 medium-offset-6 columns">
        <div class="row">
            <div class="small-12 medium-6 columns">
                <?= $this->Html->link(
                    'Track another Order', 'javascript:;',
                    ['class'=> 'expanded alert button open-modal', 'data-open' => "track_order_modal"]
                );
                ?>
            </div>
            <div class="small-12 medium-6 columns">
                <?= $this->Html->link('Back to Orders', ['action' => 'index'],['class' => 'expanded button']); ?>
            </div>
        </div>
    </div>
</div>

<?php if(!$order){?>
    <div class="row">
        <div class="small-12 columns text-center">
            <p>
                <p>
                    Sorry, no such order found...
                </p>
            </p>
        </div>
    </div>
<?php }else{?>
    <div class="row">
        <div class="small-12 columns">
            <h5>Your order for:</h5>
            <h3>
                <?= $order->title?>
            </h3>
            <code>
                <?= $order->full_status ?>
            </code>
        </div>
    </div>
<?php } ?>

<?= $this->element('Modals/track_order'); ?>
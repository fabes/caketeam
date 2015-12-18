<?= $this->element('Orders/header', array('title' => 'CakeTeam\'s Orders')); ?>
<div class="row">
   <div class="small-12 columns text-center">
       <p>What would you like to do?</p>
   </div>
</div>
<div class="row">
    <div class="small-12 medium-6 medium-centered columns">
        <div class="row">
            <div class="small-12 medium-6 columns">
                <?php
                    print $this->Html->link(
                        'Place Your Order',
                        ['controller' => 'Orders', 'action' => 'add'],
                        ['class'=> 'expanded button']
                    );
                ?>
            </div>
            <div class="small-12 medium-6 columns">
                <?php
                print $this->Html->link(
                    'Track Your Order',
                    ['controller' => 'Orders', 'action' => 'track'],
                    ['class'=> 'expanded alert button']
                );
                ?>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="small-12 columns">
        <h4>Upcoming orders</h4>
    </div>
</div>
<div class="row">
    <div class="small-12 columns">
        <?php
        foreach($orders as $order){?>
            <div class="row">
                <div class="small-12 medium-1 columns"><?= $order->id; ?></div>
                <div class="small-12 medium-6 columns"><?= $order->title; ?></div>
                <div class="small-12 medium-3 columns"><?= $order->user->first_name.' '.$order->user->last_name; ?></div>
                <div class="small-12 medium-2 columns"><?= $order->full_status; ?></div>
            </div>
        <?php }?>
    </div>
</div>

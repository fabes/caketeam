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

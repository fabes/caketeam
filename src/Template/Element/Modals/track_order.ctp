<div class="reveal" id="track_order_modal" data-reveal>
    <h3 class="text-center">Enter your Order ID to track.</h3>
    <p>
        <?= $this->Form->create(null,['controller' => 'Orders', 'action' => 'track', 'type' => 'get']);?>
        <div class="row">
            <div class="small-12 medium-6 medium-centered columns">
                <?= $this->Form->input('code',['placeholder' => 'Your order ID', 'label' => false]); ?>
            </div>
        </div>
        <div class="row">
            <div class="small-12 medium-6 medium-centered columns">
                <?= $this->Form->button('Track', ['class' => 'expanded button']); ?>
            </div>
        </div>
        <?= $this->Form->end();?>
    </p>
    <button class="close-button" data-close aria-label="Close reveal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
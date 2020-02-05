
    <div class='bottom'>
        <div class="new">
            <?= $this->Html->link(__(' ADD NEW'), [
                'action' => 'add']) ?>
        </div>
        <div class="pages">
            <?= $this->Paginator->prev('< ' . __('prev')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </div>
        <p class='cnt'>
            <?= $this->Paginator->counter(
            ['format' => __('P. {{page}} / {{pages}}, 
            showing {{current}} / {{count}} cards')]) ?>
        </p>
    </div>

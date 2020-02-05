<div class="finder">
    <?= $this->Form->create()?>
    <th>
<?= $this->Form->input('find',[
    'label' => 'NAME'
]) ?></th>
    <th><?= $this->Form->button('SEARCH') ?></th>
    <th><?= $this->Form->end()?></th>

<?php foreach ($founds as $found): ?>
    <th><?= h($found->id) ?>
    <th><?= h($found->customer_name) ?>
    <?= h($found->content) ?>

<?php endforeach; ?>

</div>

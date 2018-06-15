<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Property $property
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Properties'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="properties form large-9 medium-8 columns content">
    <?= $this->Form->create($property) ?>
    <fieldset>
        <legend><?= __('Add Property') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('address_one');
            echo $this->Form->control('address_two');
            echo $this->Form->control('area');
            echo $this->Form->control('type');
            echo $this->Form->control('price');
            echo $this->Form->control('bedrooms');
            echo $this->Form->control('description');
            echo $this->Form->control('bathrooms');
            echo $this->Form->control('garage');
            // echo $this->Form->control('created_at');
            // echo $this->Form->control('updated_at');
            // echo $this->Form->control('agency_id', ['options' => $agencies]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

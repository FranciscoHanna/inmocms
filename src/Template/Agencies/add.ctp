<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agency $agency
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Listar Agencias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Usuarios'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Crear Usuario'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Propiedades'), ['controller' => 'Properties', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Crear Propiedad'), ['controller' => 'Properties', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="agencies form large-9 medium-8 columns content">
    <?= $this->Form->create($agency) ?>
    <fieldset>
        <legend><?= __('Agregar Agencia') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('address_one');
            echo $this->Form->control('address_two');
            echo $this->Form->control('phone');
            echo $this->Form->control('email');
            echo $this->Form->control('updated_at');
            echo $this->Form->control('created_at');
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>

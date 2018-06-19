<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agency $agency
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
<<<<<<< HEAD
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Listar Agencias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Usuarios'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Crear Usuarios'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Propiedades'), ['controller' => 'Properties', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nueva Propiedad'), ['controller' => 'Properties', 'action' => 'add']) ?></li>
=======
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Agencies'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Properties'), ['controller' => 'Properties', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Property'), ['controller' => 'Properties', 'action' => 'add']) ?></li>
>>>>>>> develop
    </ul>
</nav>
<div class="agencies form large-9 medium-8 columns content">
    <?= $this->Form->create($agency) ?>
    <fieldset>
<<<<<<< HEAD
    
        <legend><?= __('Agregar Agencia') ?></legend>
=======
        <legend><?= __('Add Agency') ?></legend>
>>>>>>> develop
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
<<<<<<< HEAD
    <?= $this->Form->button(__('Guardar')) ?>
=======
    <?= $this->Form->button(__('Submit')) ?>
>>>>>>> develop
    <?= $this->Form->end() ?>
</div>

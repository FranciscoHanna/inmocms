<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Property[]|\Cake\Collection\CollectionInterface $properties
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Agregar propiedad'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="properties index large-9 medium-8 columns content">
    <h3><?= __('Mis Propiedades') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id', 'ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title', 'Título') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address_one', 'Dirección') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address_two') ?></th>
                <th scope="col"><?= $this->Paginator->sort('area', 'Área (m2)') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type', 'Tipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price', 'Precio (ARS)') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bedrooms', 'Habitaciones') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bathrooms', 'Baños') ?></th>
                <th scope="col"><?= $this->Paginator->sort('garage', '¿Tiene garage?') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_at', 'Creación') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('updated_at') ?></th> -->
                <!-- <th scope="col"><?= $this->Paginator->sort('agency_id') ?></th> -->
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($properties as $property): ?>
            <tr>
                <td><?= $this->Number->format($property->id) ?></td>
                <td><?= h($property->title) ?></td>
                <td><?= h($property->address_one) ?></td>
                <td><?= h($property->address_two) ?></td>
                <td><?= $this->Number->format($property->area) ?></td>
                <td><?= h($property->type) == 'sale' ? 'Venta' : 'Alquiler' ?></td>
                <td><?= $this->Number->format($property->price) ?></td>
                <td><?= $this->Number->format($property->bedrooms) ?></td>
                <td><?= $this->Number->format($property->bathrooms) ?></td>
                <td><?= h($property->garage) == 1 ? 'Si' : 'No' ?></td>
                <td><?= date("d/m/Y", strtotime($property->created_at)) ?></td>
                <!-- <td><?= h($property->updated_at) ?></td> -->
                <!-- <td><?= $property->has('agency') ? $this->Html->link($property->agency->name, ['controller' => 'Agencies', 'action' => 'view', $property->agency->id]) : '' ?></td> -->
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $property->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $property->id]) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $property->id], ['confirm' => __('Are you sure you want to delete # {0}?', $property->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primero')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('Último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Pág. {{page}} de {{pages}}. Mostrando {{current}} registro(s) de {{count}}')]) ?></p>
    </div>
</div>

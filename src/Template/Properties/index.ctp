<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Property[]|\Cake\Collection\CollectionInterface $properties
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Agregar propiedad'), ['action' => 'add']) ?></li>
    </ul>
</nav> -->
<h3><?= __('Mis Propiedades') ?>
    <a href="/admin/properties/add" class="btn btn-link float-right"><i class="fa fa-plus"></i> Agregar propiedad</a>
</h3>
<div class="my-3 px-4 py-1 bg-white rounded box-shadow">
    <?php foreach ($properties as $property): ?>
        <div class="media text-muted pt-3 w-100 border-bottom border-gray">
            <div class="col-3 mr-2 mb-3 p-2 rounded" style="height: 200px;background: url(<?= count($property->pictures) > 0 ? DS . $property->pictures[0]->url: 'http://reformasquale.com/wp-content/uploads/2016/03/import_placeholder.png' ?>);background-size: cover;background-position: center;">
                <?php if(count($property->pictures) == 0): ?>
                <a class="position-absolute bottom-0 btn btn-secondary btn-block" style="bottom:0px; left:0" href="/admin/properties/<?= $property->id ?>/pictures/add">
                    <i class="fa fa-plus"></i> Agregar foto
                </a>
                <?php endif; ?>
            </div>
            <div class="col-9">
                <a class="float-right" href="/admin/properties/edit/<?= $property->id?>">Editar <i class="fa fa-pencil"></i></a>
                <h4 class="d-block text-gray-dark font-weight-bold">
                    <?= h($property->title) ?> 
                </h4>
                <h5>
                    <?php if($property->type == 'sale'): ?>
                        <span class="badge badge-success">En venta</span>
                    <?php else:?>
                        <span class="badge badge-danger text-white">Alquiler</span>
                    <?php endif;?>
                </h5>
                <h5>$ <?= $this->Number->format($property->price) ?></h5>
                <h6>
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <?= h($property->address_one) ?>, <?= h($property->address_two) ?>
                </h6>
                <p class="mt-2">
                    <span class="border-radius-1 pr-2 rounded">
                        <i class="fa fa-bed mr-1"></i>
                        <?= $this->Number->format($property->bedrooms) ?>
                    </span>
                    <span class="border-radius-1 pr-2 rounded">
                        <i class="fa fa-bath"></i>
                        <?= $this->Number->format($property->bathrooms) ?>
                    </span>
                    <span class="border-radius-1 pr-2 rounded">
                        <i class="fa fa-car"></i>
                        <?= h($property->garage) == 1 ? 'Si' : 'No' ?>
                    </span>
                    <span class="border-radius-1 pr-2 rounded">
                        <i class="fa fa-expand"></i>
                        <?= $this->Number->format($property->area) ?> m<sup>2</sup>
                    </span>
                </p>
                <a href="/admin/properties/<?= $property->id?>">Ver más detalles ></a>
                <!-- <p class="media-body pb-1 mb-0 small lh-125">
                    <?= h($property->description) ?>
                </p> -->
            </div>
        </div>
    <?php endforeach; ?>
    
    <div class="d-block my-3">
        <span>
            <?= $this->Paginator->counter(['format' => __('Pág. {{page}} de {{pages}}. Mostrando {{current}} de {{count}} propiedad(es)')]) ?>
        </span>
        <span class="float-right">
            <ul class="pagination">
                <?= $this->Paginator->first('<< Primero') ?>&nbsp;
                <?= $this->Paginator->prev('< Anterior') ?>&nbsp;
                <?= $this->Paginator->numbers() ?>&nbsp;
                <?= $this->Paginator->next('Siguiente >') ?>&nbsp;
                <?= $this->Paginator->last('Último >>') ?>
            </ul>
        </span>
    </div>
</div>


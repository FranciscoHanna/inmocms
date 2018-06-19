<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Property $property
 */
?>
<h3>
    Propiedad #<?= $property->id ?>
</h3>

<!-- Informacion -->
<div class="my-3 px-4 pt-3 pb-4 bg-white rounded box-shadow">
    <h4 class="border-bottom border-gray pb-2 clearfix">
        <span class="align-middle">
            Información general
        </span>
        <a href="/admin/properties/edit/<?= $property->id ?>" class="btn btn-link float-right"><i class="fa fa-pencil"></i> Editar información</a>    
    </h4>
    <div class="text-muted pt-2">
        <h4 class="d-block text-gray-dark font-weight-bold">
            <?= h($property->title) ?> 
        </h4>
        <h5 class="my-3">
            <?php if($property->type == 'sale'): ?>
                En venta
            <?php else:?>
                En alquiler
            <?php endif;?>
        </h5>
        <h5 class="my-3">
            <i class="fa fa-usd"></i> <?= $this->Number->format($property->price) ?>
        </h5>
        <h6 class="my-3">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <?= h($property->address_one) ?>
        </h6>
        <p class="my-3">
            <span class="border-radius-1 pr-2 rounded">
                <i class="fa fa-expand"></i>
                <?= $this->Number->format($property->area) ?> m<sup>2</sup>
            </span>
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
        </p>
        <p class="media-body pb-1 mb-0 lh-125">
            <?= h($property->description) ?>
        </p>
    </div>
</div>

<!-- Fotos -->
<div class="my-3 px-4 pt-3 pb-4 bg-white rounded box-shadow">
    <h4 class="border-bottom border-gray pb-2 clearfix">
        <span class="align-middle">
            Fotos de la propiedad
        </span>
        <a href="/admin/properties/<?= $property->id ?>/pictures/add" class="btn btn-link float-right"><i class="fa fa-plus"></i> Agregar foto</a>    
    </h4>
    <div class="text-muted pt-2 w-100">
        <?php if (!empty($property->pictures)): ?>
            <div class="row">
            <?php foreach ($property->pictures as $picture): ?>
                <div class="col-3">
                    <div class="rounded mb-1" style="height: 200px;background: url(<?= DS . $picture->url ?>);background-size: cover;background-position: center;">
                        <!-- <h5>
                            <?php if($property->type == 'sale'): ?>
                                <span class="badge badge-success">En venta</span>
                            <?php else:?>
                                <span class="badge badge-danger text-white">Alquiler</span>
                            <?php endif;?>
                        </h5> -->
                    </div>
                    Fachada
                    <span class="text-danger float-right">
                        <i class="fa fa-trash"></i>
                        <?= $this->Form->postLink('Elimnar', '/admin/properties/'.$property->id.'/pictures/delete/'.$picture->id, ['confirm' => __('¿Seguro desea eliminar esta imagen?', $picture->id), 'class' => 'text-danger']) ?>
                    </span>
                </div>               
            <?php endforeach; ?>
            </div>
        <?php else: ?>
        <h5>Aún no has agregado fotos a esta propiedad</h5>
        <?php endif; ?>
    </div>
</div>

<!-- Consultas -->
<div class="my-3 px-4 pt-3 pb-4 bg-white rounded box-shadow">
    <h4 class="border-bottom border-gray pb-3">
        <span class="align-middle">
            Comentarios de visitantes
        </span>
    </h4>
    <div class="text-muted pt-2 w-100">
        <?php if (!empty($property->comments)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Name') ?></th>
                    <th scope="col"><?= __('Email') ?></th>
                    <th scope="col"><?= __('Text') ?></th>
                    <th scope="col"><?= __('Property Id') ?></th>
                    <th scope="col"><?= __('Created At') ?></th>
                    <th scope="col"><?= __('Updated At') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($property->comments as $comments): ?>
                <tr>
                    <td><?= h($comments->id) ?></td>
                    <td><?= h($comments->name) ?></td>
                    <td><?= h($comments->email) ?></td>
                    <td><?= h($comments->text) ?></td>
                    <td><?= h($comments->property_id) ?></td>
                    <td><?= h($comments->created_at) ?></td>
                    <td><?= h($comments->updated_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Comments', 'action' => 'view', $comments->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Comments', 'action' => 'edit', $comments->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Comments', 'action' => 'delete', $comments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comments->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        <?php else: ?>
            <h5>Aún no hay consultas sobre esta propiedad</h5>
        <?php endif; ?>
    </div>
</div>

<div class="float-right text-danger">
    <i class="fa fa-trash"></i>
    <?= $this->Form->postLink('Elimnar propiedad', ['controller' => 'properties', 'action' => 'delete', $property->id], ['confirm' => __('¿Seguro desea eliminar esta propiedad?'), 'class' => 'text-danger']) ?>
</div>
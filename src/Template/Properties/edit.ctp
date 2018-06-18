<?php
    /**
     * @var \App\View\AppView $this
     * @var \App\Model\Entity\Property $property
     */
    $this->Form->templates(['inputContainer' => '{{content}}']);
?>
<h3>Propiedad #<?= $property->id ?></h3>

<!-- Informacion -->
<div class="my-3 px-4 pt-3 pb-4 bg-white rounded box-shadow">
    <?= $this->Form->create($property) ?>
    <h4 class="border-bottom border-gray pb-3">Información general</h4>
    <div class="text-muted pt-2 w-100">
        <div class="row">
            <div class="col-12">
            <?= $this->Form->control('title', ['div' => false, 'label' => false, 'class' => 'form-control form-control-lg', 'placeholder' => 'Título de la propiedad', 'required' => true]); ?>
                <div class="my-3">
                    <?= $this->Form->control('type', [
                        'options' => [
                            'rent' => __('En venta'),
                            'sale' => __('En alquiler')
                        ],
                        'label' => false, 
                        'class' => 'form-control'
                    ]); ?>
                </div>
                <div class="input-group my-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-usd"></i>
                        </span>
                    </div>
                    <?= $this->Form->control('price', ['label' => '', 'class' => 'form-control', 'required' => true]); ?>
                </div>
                
                <div class="input-group my-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-map-marker"></i>
                        </span>
                    </div>
                    <?= $this->Form->control('address_one', ['label' => false, 'class' => 'form-control', 'required' => true]); ?>
                </div>

                <div class="row">
                    <div class="col-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-expand"></i>
                                </span>
                            </div>
                            <?= $this->Form->control('area', ['label' => '', 'class' => 'form-control', 'required' => true]); ?>
                            <div class="input-group-append">
                                <span class="input-group-text bg-white">
                                    m<sup>2</sup>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-bed"></i>
                                </span>
                            </div>
                            <?= $this->Form->control('bedrooms', ['label' => '', 'class' => 'form-control', 'required' => true]); ?>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-bath"></i>
                                </span>
                            </div>
                            <?= $this->Form->control('bathrooms', ['label' => '', 'class' => 'form-control', 'required' => true]); ?>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-car"></i>
                                </span>
                            </div>
                            <?= $this->Form->control('garage', [
                                'options' => [
                                    0 => __('Sí'),
                                    1 => __('No')
                                ],
                                'label' => '', 
                                'class' => 'form-control',
                                'required' => true
                            ]); ?>
                        </div>
                    </div>
                </div>
                
                <div class="mt-3">
                    <label>Acerca de la propiedad:</label>
                    <?= $this->Form->control('description', ['label' => '', 'class' => 'form-control']); ?>
                </div>
                
                <span class="float-right">
                    <a class="btn text-dark mt-3" href="/admin/properties/<?= $property->id?>">Cancelar</a>
                    <?= $this->Form->button('Guardar', ['class' => 'btn btn-primary mt-3']) ?>
                </span>
            </div>
        </div>
    </div>
    <?= $this->Form->end() ?>
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
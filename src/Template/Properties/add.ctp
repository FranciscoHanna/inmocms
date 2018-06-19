<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Property $property
 */
$this->Form->templates(['inputContainer' => '{{content}}']);
?>
<h3>Nueva propiedad</h3>

<!-- Informacion -->
<div class="my-3 px-4 py-3 bg-white rounded box-shadow">
    <h4 class="border-bottom border-gray pb-2">Información general</h4>
    <div class="text-muted pt-2 w-100">
        <!-- <div class="col-3 mr-2 mb-3 p-2 rounded" style="height: 200px;background: url(<?= $property->pictures[0]->url ?>);background-size: cover;background-position: center;">
            <h5>
                <?php if($property->type == 'sale'): ?>
                    <span class="badge badge-primary">En venta</span>
                <?php else:?>
                    <span class="badge badge-primary text-white">Alquiler</span>
                <?php endif;?>
            </h5>
        </div> -->
        <div class="row">
            <div class="col-12">
                <?= $this->Form->create($property) ?>
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
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
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
            // echo $this->Form->hidden('created_at');
            // echo $this->Form->hidden('updated_at');
            // echo $this->Form->hidden('agency_id', ['options' => $agencies]);
            // echo $this->Form->control('agency_id', ['options' => $agencies]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div> -->

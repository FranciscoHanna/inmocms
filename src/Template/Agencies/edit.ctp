<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agency $agency
 */
$this->Form->setTemplates(['inputContainer' => '{{content}}']);
?>

<h3>
    Mi agencia
</h3>

<!-- Informacion -->
<div class="my-3 px-4 py-3 bg-white rounded box-shadow">
    <h4 class="border-bottom border-gray pb-3 clearfix mb-4">
        <span class="align-middle">
            Información general
        </span>
    </h4>
    <?= $this->Form->create($agency) ?>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label"><strong>Nombre:</strong></label>
            <div class="col-sm-10">
                <?= $this->Form->control('name', ['label' => false, 'class' => 'form-control']); ?>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label"><strong>Dirección:</strong></label>
            <div class="col-sm-10">
                <?= $this->Form->control('address_one', ['label' => false, 'class' => 'form-control']); ?>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label"><strong>Teléfono:</strong></label>
            <div class="col-sm-10">
                <?= $this->Form->control('phone', ['label' => false, 'class' => 'form-control']); ?>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label"><strong>Email:</strong></label>
            <div class="col-sm-10">
                <?= $this->Form->control('email', ['label' => false, 'class' => 'form-control']); ?>
            </div>
        </div>

        <div class="clearfix">
            <span class="float-right">
                <a class="btn text-dark mt-2" href="/admin/agency">Cancelar</a>
                <?= $this->Form->button('Guardar cambios', ['class' => 'btn btn-primary mt-2']) ?>
            </span>
        </div>
    <?= $this->Form->end() ?>
</div>
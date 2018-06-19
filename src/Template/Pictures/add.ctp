<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Picture $picture
 */
$this->Form->templates(['inputContainer' => '{{content}}']);
?>
<h3><?= __('Añadir foto a '.$property->title) ?></h3>

<!-- Informacion -->
<div class="my-3 px-4 py-3 bg-white rounded box-shadow clearfix">
    <!-- <?= $this->Form->create($picture) ?> -->
    <form action="/admin/properties/<?= $property->id ?>/pictures/add"   method="post" enctype="multipart/form-data" >
        <div class="my-3">
            <?= $this->Form->control('url', ['name' => 'image', 'class' => 'form-control', 'type' => 'file', 'label' => 'Foto']); ?>
        </div>
        <div class="my-3">
            <?= $this->Form->control('description', ['class' => 'form-control', 'label' => 'Descripción', 'placeholder' => 'Fachada, baño principal, living...']); ?>
        </div>

        <div class="clearfix">
            <span class="float-right mt-1
            ">
                <a class="btn text-dark " href="/admin/properties/<?= $property->id?>">Cancelar</a>
                <?= $this->Form->button('Guardar', ['class' => 'btn btn-primary mt-1
                ']) ?>
            </span>
        </div>
    </form>
    <!-- <?= $this->Form->end() ?> -->
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Picture $picture
 */
?>

<div class="container mt-5 mb-3 pt-5">
<?= $this->Flash->render() ?>
    <div class="row">
        <div class="col-12 col-sm-8 text-center text-sm-left">
            <h1 class="font-weight-bold"><?= $property->title ?></h1>
            <h6>
                <i class="fa fa-map-marker"></i>
                <?= $property->address_one ?>
            </h6>
        </div>
        <div class="col-12 col-sm-4 text-center text-sm-right">
            <h6 class="mt-2">
                <?php if($property->type == 'sale'): ?>
                    En venta
                <?php else:?>
                    En alquiler
                <?php endif;?>
            </h6>
            <h2 class="text-success font-weight-bold">
                $ <?= $this->Number->format($property->price) ?>
            </h2>
        </div>
    </div>
</div>


<div class="container pb-3">
    <div class="carousel slide w-100" data-ride="carousel">
        <div class="carousel-inner w-100">

                <div class="rounded box-shadow carousel-item active"style="height: 450px; background-position:center; background-size: cover; background-image: url(<?= count($property->pictures) > 0 ? DS . $property->pictures[0]->url: 'http://reformasquale.com/wp-content/uploads/2016/03/import_placeholder.png' ?>)">
                </div>
        </div>
        <a class="carousel-control-prev"  href="#" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next"  href="#" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="container">
    <div class="my-3 px-4 pt-3 pb-4 bg-white rounded box-shadow">
        <h4 class="border-bottom border-gray pb-3">
            <span class="align-middle">
                Acerca de esta propiedad
            </span>
        </h4>
        <div class="text-muted pt-2 w-100">
            <p>
                <?= $property->description ?>
            </p>
        </div>

        <div class="row text-muted text-center m-0">
            <div class="col-12 col-sm-6 col-md-3 border p-4">
                <h1>
                    <i class="fa fa-expand"></i>
                </h1>
                <?= $this->Number->format($property->area) ?> m<sup>2</sup> 
            </div>
            <div class="col-12 col-sm-6 col-md-3 border p-4">
                <h1>
                    <i class="fa fa-bed mr-1"></i>
                </h1>
                <?= $this->Number->format($property->bedrooms) ?> 
                <?= $property->bedrooms == 1 ? 'Dormitorio' : 'Dormitorios' ?> 
            </div>
            <div class="col-12 col-sm-6 col-md-3 border p-4">
                <h1>
                    <i class="fa fa-bathtub mr-1"></i>
                </h1>
                <?= $this->Number->format($property->bathrooms) ?> 
                <?= $property->bedrooms == 1 ? 'Baño' : 'Baños' ?> 
            </div>
            <div class="col-12 col-sm-6 col-md-3 border p-4">
                <h1>
                    <i class="fa fa-car mr-1"></i>
                </h1>
                <?= h($property->garage) == 1 ? 'Con cochera' : 'Sin cochera' ?>
            </div>
        </div>
    </div>
</div>


<div id="#consulta" class="container mb-5">
    <div class="my-3 px-4 pt-3 pb-4 bg-white rounded box-shadow">
        <h4 class="border-bottom border-gray pb-3">
            <span class="align-middle">
                Dejanos tu consulta
            </span>
        </h4>
        <div class="text-muted pt-2 w-100 clearfix">
            <?= $this->Form->create($comment) ?>
                <div class="row">
                    <div class="mb-3 col-12 col-md-6">
                        <?= $this->Form->control('name', ['div' => false, 'label' => false, 'class' => 'form-control form-control-lg', 'placeholder' => 'Tu nombre completo', 'required' => true]); ?>
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <?= $this->Form->control('email', ['div' => false, 'label' => false, 'class' => 'form-control form-control-lg', 'placeholder' => 'Tu email', 'required' => true]); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <?= $this->Form->control('text', ['div' => false, 'label' => false, 'class' => 'form-control form-control-lg', 'placeholder' => 'Tu consulta', 'required' => true, 'type' => 'textarea']); ?>
                </div>
                <span class="float-right">
                    <!-- <a class="btn text-dark mt-3" href="/admin/properties/<?= $property->id?>">Cancelar</a> -->
                    <?= $this->Form->button('Enviar consulta', ['class' => 'btn btn-lg btn-primary']) ?>
                </span>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
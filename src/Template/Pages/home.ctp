<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Picture $picture
 */
?>

<style>
    .color-overlay {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background-color: rgba(73,82,105,.7);
        z-index: 99;
    }
</style>

<!-- Hero -->
<section class="jumbotron text-center text-sm-left m-0 position-relative" style="background-image: url('/img/landing.jpg'); background-size:cover; background-position:center">
    <div class="container position-relative" style="z-index: 100">
        
        <h1 class="jumbotron-heading mt-5 mb-2 font-weight-bold text-white">Tenemos experiencia</h1>
        <p class="lead text-white">Más de 15 años en el mercado nos avalan</p>
        <p class="my-5">
            <a href="#propiedades" class="btn btn-lg btn-primary my-2 mr-2">Ver propiedades</a>
            <a href="#contacto" class="btn btn-lg btn-secondary my-2 mr-2">Contáctenos</a>
        </p>
    </div>
    <div class="color-overlay"></div>
</section>

<!-- Propiedades -->
<div id="propiedades" class="album py-5 bg-light">
    <div class="container">
        <h1 class="text-center mb-5 mt-4">Nuestras propiedades</h1>
        <div class="row">
            <?php foreach ($properties as $property): ?>
                <div class="col-md-4">
                    <a style="color:unset; text-decoration: none" href="/properties/<?= $property->id ?>">
                        <div class="card mb-4 box-shadow">
                            <div style="height: 240px; background: url(<?= count($property->pictures) > 0 ? DS . $property->pictures[0]->url: 'http://reformasquale.com/wp-content/uploads/2016/03/import_placeholder.png' ?>);background-size: cover;background-position: center;">
                                <h4 class="float-left m-2">
                                    <?php if($property->type == 'sale'): ?>
                                        <span class="badge badge-success">En venta</span>
                                    <?php else:?>
                                        <span class="badge badge-danger text-white">En alquiler</span>
                                    <?php endif;?>
                                </h4>
                            </div>
                            <div class="card-body">
                                <h3 class="d-block text-gray-dark font-weight-bold">
                                    <?= h($property->title) ?> 
                                </h3>
                                <h6 class="mt-2 text-muted font-weight-normal">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <?= h($property->address_one) ?>
                                </h6>
                                <h4 class="mb-3 font-weight-normal text-success">
                                    $ <?= $this->Number->format($property->price) ?>
                                </h4>

                                <div class="row text-muted text-center m-0">
                                    <div class="col-3 border p-2">
                                        <strong>
                                            <?= $this->Number->format($property->area) ?> 
                                            m<sup>2</sup>
                                        </strong>
                                    </div>
                                    <div class="col-3 border p-2">
                                        <i class="fa fa-bed mr-1"></i>
                                        <?= $this->Number->format($property->bedrooms) ?>
                                    </div>
                                    <div class="col-3 border p-2">
                                        <i class="fa fa-bath"></i>
                                        <?= $this->Number->format($property->bathrooms) ?>
                                    </div>
                                    <div class="col-3 border p-2">
                                        <i class="fa fa-car"></i>
                                        <?= h($property->garage) == 1 ? 'Si' : 'No' ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Contactp -->
<div id="contacto" class="album py-5 bg-white">
    <div class="container">
        <h1 class="text-center mb-5">Contáctenos</h1>

        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <input type="text" class="form-control form-control-lg" placeholder="Tu nombre completo">
                    </div>
                    <div class="col-12 col-sm-6">
                        <input type="email" class="form-control form-control-lg" placeholder="Tu email">
                    </div>
                    <div class="col-12 mt-3">
                        <div class="form-group">
                            <textarea placeholder="Tu consulta" class="form-control form-control-lg" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <span class="float-right">
                            <button class="btn btn-lg btn-primary">Enviar consulta</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
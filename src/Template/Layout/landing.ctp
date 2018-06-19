<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'InmoCMS';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <!-- <?= $this->Html->css('base.css') ?> -->
    <?= $this->Html->css('landing.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- <link rel="stylesheet" href="https://bootswatch.com/4/journal/bootstrap.min.css"> -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/esm/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="/"><?= $agency->name?></a>
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation"> -->
          <!-- <span class="navbar-toggler-icon"></span> -->
        </button>

        <!-- <div class="collapse navbar-collapse" id="navbarsExample07">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#propiedades"><i class="fa fa-building"></i> Nuestras propiedades <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contacto"><i class="fa fa-phone"></i> Contacto</a>
            </li>
          </ul>
        </div> -->
      </div>
    </nav>

    <main class="container-fluid p-0">
        <?= $this->Flash->render() ?>
        <!-- <h1><a href=""><?= $this->fetch('title') ?></a></h1> -->
        <?= $this->fetch('content') ?>
    </main>
    <footer class="bg-dark">
      <div class="container">
        <div class="text-center">
            <h4 class="font-weight-normal mb-4 text-primary">
                <i class="fa fa-map-marker"></i>
                <?= $agency->address_one ?>
            </h4>
            <h4 class="font-weight-normal mb-4 text-primary">
                <a href="tel:<?= $agency->phone ?>">
                    <i class="fa fa-phone"></i>
                    <?= $agency->phone ?>
                </a>
            </h4>
            <h4 class="font-weight-normal mb-4 text-primary">
                <a href="tel:<?= $agency->email ?>">
                    <i class="fa fa-envelope"></i>
                    <?= $agency->email ?>
                </a>
            </h4>
        </div>
      </div>
    </footer>

    <script>
    $("#flash-alert").fadeTo(2000, 500).slideUp(500, function(){
        $("#flash-alert").slideUp(500);
    });
    </script>
</body>
</html>

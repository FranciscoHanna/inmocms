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
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/esm/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</head>
<body class="bg-light py-3 px-5">
    <div class="row">
        <div class="col-12 col-sm-4 col-md-3 col-lg-2">
            <nav>
                <h3 class="font-weight-bold">InmoCMS</h3>
                <ul class="nav nav-pills flex-column my-3">
                    <li class="nav-item">
                        <a class="nav-link <?= preg_match("(/admin/properties/*)", $this->request->here(true)) ? 'active' : '' ?>" href="/admin/properties">
                        <i class="fa fa-home"></i> 
                        Mis propiedades
                    </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= preg_match("(/admin/agency/*)", $this->request->here(true)) ? 'active' : '' ?>" href="/admin/agency">
                        <i class="fa fa-suitcase"></i> 
                        Mi agencia
                    </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cerrar sesión</a>
                    </li>
                </ul>
            </nav>
        </div>
        <main class="col-12 col-sm-8 col-md-9 col-lg-10">
            <?= $this->Flash->render() ?>
            <!-- <h1><a href=""><?= $this->fetch('title') ?></a></h1> -->
            <?= $this->fetch('content') ?>
        </main>
    </div>
    <footer>
    </footer>

    <script>
    $("#flash-alert").fadeTo(2000, 500).slideUp(500, function(){
        $("#flash-alert").slideUp(500);
    });
    </script>
</body>
</html>

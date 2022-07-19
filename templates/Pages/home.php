<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$this->disableAutoLayout();

?>
<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        CakePHP: the rapid development PHP framework:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'home']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>
    <header>
        <div class="container text-center">
            <h1>
                Cake<span class="text-red">PHP</span> App
            </h1>
        </div>
    </header>
    <main class="main">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="column">
                        <h4>Sobre</h4>
                        <h5>
                            Aplicação desenvolvida para conhecer o CakePHP.
                        </h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="column">
                        <h4>Recursos</h4>
                        <h5>
                            Recursos é um resource com as propriedades "ID", "String", "Number" e "Date"
                        </h5>
                        <a href="/resources">Acessar Recursos -></a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="column">
                        <h4>Código fonte</h4>
                        <a target="_blank" rel="noopener" href="https://github.com/gabriel2m/cakephp">Acessar Código Fonte -></a>
                    </div>
                    <hr>
                </div>
                <hr>
                <div class="row">
                    <div class="column">
                        <h4>Desenvolvedor</h4>
                        <a target="_blank" rel="noopener" href="https://linktr.ee/gabriel2m">@Gabriel2M</a>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
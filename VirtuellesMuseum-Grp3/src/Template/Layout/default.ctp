<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Virtuelles Museum';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('bootstrap.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href="/VirtuellesMuseum-Grp3">Home</a></h1>
            </li>
        </ul>
        <div class="top-bar-section"> 
            <ul>
                <li><a href="/VirtuellesMuseum-Grp3/Ausstellung">Ausstellung</a></li>
                <li><a href="/VirtuellesMuseum-Grp3/Kategorien">Kategorien</a></li>
                <li><a href="/VirtuellesMuseum-Grp3/Epochen">Epochen</a></li>
                <li><a href="/VirtuellesMuseum-Grp3/Geographisch">Geographisch</a></li>
                <li><a href="/VirtuellesMuseum-Grp3/Persoenlichkeiten">Pers&ouml;nlichkeiten</a></li>
                <li><a href="/VirtuellesMuseum-Grp3/Medien">Medien</a></li>
                <li><a href="/VirtuellesMuseum-Grp3/Werke">Werke</a></li>
            </ul> 
            <ul class="right">
                <li><a href="/VirtuellesMuseum-Grp3/Users">Admin</a></li>
            </ul>
            <ul class="right">
                <?php echo $this->Form->create('Search', array('type' => 'post', 'url' => '/Search'));?>
                <li><?php echo $this->Form->input('Search.searchvalue', array('label' => false, "placeholder" => __('Suche')));?></li>
                <li><?php echo $this->Form->button(__('Suche'));?></li>
                <?php echo $this->Form->end(); ?>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer style="background-color: #308e97; padding-top: 10px; padding-bottom: 10px;">
        <center><a style="color: #FFFFFF;" href="/VirtuellesMuseum-Grp3/Search/impressum">Impressum</a></center>
    </footer>
</body>
</html>

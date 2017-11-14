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
 $cakeDescription = 'Eatlixir: Cakephp';

?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('app.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>
<body>
  <div class="container">
    <nav>
    <?php
    $output = '<ul class="left">';
    $output .= '<li class="nav-left">' . $this->Html->link('home','/',array('class' => 'nav-left')) . '</li>';
    $output .= '<li class="nav-left">' . $this->Html->link('food',array('controller' => 'pages', 'action' => 'display', 'about'),array('class' => 'nav-left')) . '</li>';
    $output .= '<li class="nav-left">' . $this->Html->link('about',array('controller' => 'pages', 'action' => 'display', 'about'),array('class' => 'nav-left')) . '</li>';
    $output .= '<li class="nav-right">' . $this->Html->link('personal',array('controller' => 'pages', 'action' => 'display', 'about'),array('class' => 'nav-right')) . '</li>';
    $output .= '<li class="nav-right">' . $this->Html->link('favorites',array('controller' => 'pages', 'action' => 'display', 'about'),array('class' => 'nav-right')) . '</li>';
    $output .= '<li class="nav-right">' . $this->Html->link('discover',array('controller' => 'pages', 'action' => 'display', 'about'),array('class' => 'nav-right')) . '</li>';
    $output .= '</ul>';
    echo $output;
    ?>
    </nav>
  <div class="content">
    <?= $this->fetch('content') ?>
  </div>
</div>
</body>
</html>

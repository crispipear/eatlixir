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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('app.css') ?>
    <?= $this->Html->script('app.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
  <nav>
    <?php
    $output = '<ul>';
    $output .= '<li class="nav-left">' . $this->Html->link('home','/',array('class' => 'nav-left')) . '</li>';
    $output .= '<li class="nav-left">' . $this->Html->link('food',array('controller' => 'pages', 'action' => 'display', 'food'),array('class' => 'nav-left')) . '</li>';
    $output .= '<li class="nav-left">' . $this->Html->link('about',array('controller' => 'pages', 'action' => 'display', 'about'),array('class' => 'nav-left')) . '</li>';
    $output .= '<li class="nav-right">' . $this->Html->link('<i class="fa fa-user" aria-hidden="true"></i>',array('controller' => 'pages', 'action' => 'display', 'personal'),array('class' => 'nav-right', 'escape'=>false)) . '</li>';
    $output .= '<li class="nav-right">' . $this->Html->link('<i class="fa fa-heart" aria-hidden="true"></i>',array('controller' => 'pages', 'action' => 'display', 'favorites'),array('class' => 'nav-right', 'escape'=>false)) . '</li>';
    $output .= '<li class="nav-right">' . $this->Html->link('<i class="fa fa-compass" aria-hidden="true"></i>',array('controller' => 'pages', 'action' => '', 'discover'),array('class' => 'nav-right', 'escape'=>false)) . '</li>';
if (!is_null($this->request->session()->read('Auth.User.username'))) {
    $output .= '<li class="nav-right">' . $this->Html->link('Logout',array('controller' => 'users', 'action' => 'logout'),array('class' => 'nav-right')) . '</li>';
} else {
    $output .= '<li class="nav-right">' . $this->Html->link('Login',array('controller' => 'users', 'action' => 'login'),array('class' => 'menu_top_item')) . '</li>';
}
$output .= '</ul>';
    echo $output;
    ?>
  </nav>
  <div class="container">
  <div class="content">
    <?= $this->fetch('content') ?>
  </div>
  <footer>
    Copyright Su Li 2017
    <?php
    echo $this->Html->link('<i class="fa fa-share" aria-hidden="true"></i>','http://suyli.me',array('escape'=>false, 'target'=>'_blank'));
    echo $this->Html->link('<i class="fa fa-github" aria-hidden="true"></i>','https://github.com/crispipear/eatlixir',array('escape'=>false, 'target'=>'_blank'));
    ?>
  </footer>
</div>
</body>
</html>

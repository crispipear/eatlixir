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
    <?= $this->Html->script('jquery.js') ?>
    <?= $this->Html->meta('icon') ?>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet">
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
    $output .= '<li class="nav-left">' . $this->Html->link('checker',array('controller' => 'pages', 'action' => 'display', 'health'),array('class' => 'nav-left')) . '</li>';
    if (!is_null($this->request->session()->read('Auth.User.username'))) {
      $output .= '<li class="nav-right">' . $this->Html->link('<i class="fa fa-sign-out" aria-hidden="true"></i>',array('controller' => 'users', 'action' => 'logout'),array('class' => 'nav-right', 'escape'=>false)) . '</li>';
      $output .= '<li class="nav-right">' . $this->Html->link('<i class="fa fa-user" aria-hidden="true"></i>',array('controller' => 'users', 'action' => 'view/'.$currentID), array('class' => 'nav-right', 'escape'=>false)) . '</li>';
    } else {
      $output .= '<li class="nav-right">' . $this->Html->link('<i class="fa fa-sign-in fa-fw" aria-hidden="true"></i> LOGIN',array('controller' => 'users', 'action' => 'login'),array('class' => 'nav-right', 'escape'=>false)) . '</li>';
    }
    $output .= '</ul>';
    echo $output;
    ?>
  </nav>
  <div class="content">
    <div id="pageloader"><i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i></div>
    <?= $this->fetch('content') ?>
  </div>
  <footer>
    <?php
    $output = '<ul> Copyright Eatlixir 2017 | ';
    $output .= '<span style="float:left; padding-top:2.5%">Contact: <a href="mailto:rice74@uw.edu">rice74@uw.edu</a></span>';
    $output .= '<span>' . $this->Html->link('Su Li','http://suyli.me',array('escape'=>false, 'target'=>'_blank')) . '</span>';
    $output .= '<li>' . $this->Html->link('<i class="fa fa-github" aria-hidden="true"></i>','https://github.com/crispipear/eatlixir',array('escape'=>false, 'target'=>'_blank')) . '</li>';
    $output .= '</ul>';
    echo $output;
    ?>
  </footer>
</div>
</body>
</html>

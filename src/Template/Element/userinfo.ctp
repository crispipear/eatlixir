<div id="userinfo">
<div class="about-img"></div>
<h5><?php $username = $this->request->session()->read('Auth.User.username'); echo $username ?></h5>
<?= '<button class="cta-button">' . $this->Html->link('MY ACCOUNT',array('controller' => 'users', 'action' => 'view/'.$currentID),array('escape' => false)).'</button>'?>
<?= '<button class="cta-button">' . $this->Html->link('FAVORITES',array('controller' => 'pages', 'action' => 'display', 'favorites'),array('escape' => false)).'</button>'?>
</div>

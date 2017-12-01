<div id="userinfo">
<div class="about-img"></div>
<h5><?php $username = $this->request->session()->read('Auth.User.username'); echo $username ?></h5>
</div>

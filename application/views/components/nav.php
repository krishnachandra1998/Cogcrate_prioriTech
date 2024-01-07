<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="<?php echo BASEURL;?>/accountController/index"><img src="<?php echo BASEURL;?>/public/assets/img/logo-br.png" width="70px" height="70px" class="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      
      <?php if(!$this->getSession('mobile_number')): ?>
     
      <li class="nav-item">
        <a class="nav-link" href="<?php echo BASEURL; ?>/accountController/loginForm">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo BASEURL; ?>/accountController/about_us">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo BASEURL; ?>/accountController/introduction">Introduction</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo BASEURL; ?>/accountController/overview">Overview</a>
      </li>
   
    <?php else: ?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo BASEURL; ?>/accountController/home_page">Home </a>
      </li>
        <li class="nav-item active">
        <a class="nav-link success" href="#">User - <?php echo $this->getSession('mobile_number');?></a>
        </li>
      <li class="nav-item">
      <a class="nav-link" href="<?php echo BASEURL; ?>/accountController/logout">Logout</a>
      </li>
   <?php endif; ?>
    </ul>

  </div>
</nav>
   <!-- Close navbar -->
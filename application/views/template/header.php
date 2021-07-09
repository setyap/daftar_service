<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <link rel="shortcut icon" href="assets/img/d">
  </head>
  <body>
  <!-- <div class="container"> -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <a class="navbar-brand" href="#">
    <img src="<?php echo base_url(); ?>/assets/img/d.png" width="100"> One Hundred Connsulting</a>
  <!-- <a class="navbar-brand" href="#">Wahana Honda</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <ul class="nav navbar-nav navbar-right">
				<li>
        <a href="<?php echo base_url('login/logout'); ?>" class="btn btn-light btn-right" role="button">Logout</a>
        </li>
		</ul>
    
  </div>
</nav>
<br>
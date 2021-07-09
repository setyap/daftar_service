<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/favicon.ico">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/custom.css'); ?>" >
  </head>
  <body>

    <div class="container">
     <img src="assets/img/d.png">
        <!-- <div class="col-md-4 col-md-offset-4"> -->
          <div class="d-flex justify-content-center h-100">
           <form class="form-signin" action=" <?php echo base_url('login/auth'); ?>" method="post">
            <h2 class="form-signin-heading text">Wahana Honda Motor</h2>
            <?php echo $this->session->flashdata('msg');?>
            <label for="email" class="sr-only">Email</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required autofocus>
            <br>
            <label for="password" class="sr-only">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          </form>
        </div>
        </div>
         <!-- /container -->
         <br>
         <br>
         <br>
        <div class="copyrightswrapper">
    <div id="copyrights" class="container">
    
     <p class=" text-center "><marquee>Copyright © 2019 One Hundred Consulting. All rights reserved.</marquee></p>
    
    </div> <!-- end of copyrights-->
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>


  </body>
</html>

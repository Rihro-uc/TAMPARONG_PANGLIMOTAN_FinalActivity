<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css');?>">
</head>
<nav class="navbar navbar-dark bg-primary">
  <h2>WELCOME!</h2>
</nav>
<body>

    <!-- <?php echo validation_errors(); ?> -->
    <!-- <?php echo form_open('login_controller/login'); ?>    -->
    <div class="container"><br/><br/><br/>
    
        <form method="POST" action="<?php echo base_url("index.php/login_controller/login")?>" >
        <div class="form-group">
           <center> <h2>LOGIN FORM</h2> </center>
           <div class="col-lg-12">
            <label for="username"><b>Username</b></label>
            <input type="text" name="username" class="form-control" placeholder="Enter username">
            <span class="text-danger"><?php echo form_error('username') ?></span>
        </div>
        </div>
        <div class="form-group">
        <div class="col-lg-12">
            <label for="password"><b>Password</b></label>
            <input type="password" name="password" class="form-control" placeholder="Enter password">
            <span class="text-danger"><?php echo form_error('password') ?></span>
        </div>
        </div>
        <center>
        <div class="form-group">  
        <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
  <a href="#" class="alert-link">Remember me</a>

    </label>
            <button type="submit" name="btnLogin" class="btn btn-primary">Login</button>
            <?php echo $this->session->flashdata("error"); ?>
        </div>
        </form>
</center>

    </div>
    <script type="text/javascript" src="<?php echo base_url();?>/bootstrap/css/bootstrap.min.js"></script>

</body>


</html>
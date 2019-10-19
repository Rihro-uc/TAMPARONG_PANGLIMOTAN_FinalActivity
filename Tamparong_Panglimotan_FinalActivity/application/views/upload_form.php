<html>
<head>
<title>Upload Form</title>
<link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css');?>">
</head>
<nav class="navbar navbar-dark bg-primary">
<h1>HI! <?php echo $this->session->users["username"];?></h1>  <button type="button" class="btn btn-danger"><a href="<?php echo base_url("index.php/login_controller/logout") ?>"><b>LOGOUT</b></a></button>

</nav>
<body>
<br>
<br>
<br>
<center>        
    <br>
    </div>
    <?php echo $error;?>
    <?php echo form_open_multipart(base_url("index.php/upload_controller/do_upload")); ?>
    <div class="form-group" style="width:500px;">
    <input type="file" name="userfile" size="20" class="form-control"/>
    </div>
    <div class="form-group">
    <input type="submit" value="Upload File" class="btn btn-primary" />
    </div><br>
    
    <br>
    <br>
    <br>
    <nav aria-label="...">
  <ul class="pagination pagination-lg">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
    </form>
</div>
</center>
</body>
</html>
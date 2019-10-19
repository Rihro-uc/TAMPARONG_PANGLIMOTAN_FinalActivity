<html>
<head>
<title>Upload Form</title>
</head>
<body>
<center>
    <br>
    <br>
<h3>Your file was successfully uploaded!</h3>


<?php foreach ($upload_data as $item => $value):?>
<li><?php echo $item;?>: <?php echo $value;?></li>
<?php endforeach; ?>


<p><?php echo anchor(base_url("index.php/upload_controller/"), 'Click here! to upload another file!'); ?></p>
</center>
</body>
</html>
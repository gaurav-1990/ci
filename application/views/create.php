<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="row">
<?php 
            if($this->session->flashdata('success'))
            {
             ?>
	            <h4 style="color: green;"><?php echo $this->session->flashdata('success'); ?></h4>
	            <?php
            }
            else
            {
                ?>
                <h4 style="color: red;"><?php echo $this->session->flashdata('fail'); ?></h4>
                <?php
            }
         ?>
</div>
<div class="row">
<?= form_open('Users/create', array("method" => "POST", 'id' => 'reg')); ?>
	
		<input type="text" name="name" placeholder="NAME"><br>
		<input type="text" name="eml" placeholder="EMAIL"><br>
		<input type="password" name="pwd" placeholder="PASSWORD"><br>
		<input type="text" name="mob" placeholder="MOBILE"><br>
		<input type="text" name="city" placeholder="CITY"><br>
		<input type="submit" name="save" value="SUBMIT">
	
	  <?= form_close(); ?>  
</div>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div class="row">

<?php
  foreach($res as $row)
  {
  ?>

<?= form_open('Users/updatedata', array("method" => "POST", 'id' => 'reg')); ?>
	
		<input type="text" name="name" placeholder="NAME" value="<?php echo $row->name; ?>"><br>
		<input type="text" name="eml" placeholder="EMAIL" value="<?php echo $row->email; ?>"><br>
		<input type="password" name="pwd" placeholder="PASSWORD" value="<?php echo $row->password; ?>"><br>
		<input type="text" name="mob" placeholder="MOBILE" value="<?php echo $row->mobile; ?>"><br>
		<input type="text" name="city" placeholder="CITY" value="<?php echo $row->city; ?>"><br>
		<input type="submit" name="update" value="SUBMIT">
	
	  <?= form_close(); ?>  

 <?php } ?>

</div>

</body>
</html>
<?php
	include_once('public_header.php');
?>
	<?php  echo form_open('login/admin_login') ?>
	  	<div class="conṭainer">
		  		<legend>Admin Login</legend><br>
			    <div class="form-group col-md-3">
			      <label>USERNAME</label>
			      <?php echo form_input(['class'=>'form-control','name'=>'un','placeholder'=>'USERNAME','value'=>set_value('un')]);?>
			    </div>
			    
			    <div class="col-md-5">
			    	<?php echo form_error('un'); ?>
			    </div>
		    
			    <div class="form-group col-md-3">
			      <label>Password</label>
			      <?php echo form_password(['name'=>'pwd','class'=>'form-control','placeholder'=>'PASSWORD']);?>
			    </div>

			    <div class="col-md-5">
			    	<?php echo form_error('pwd'); ?>
			    </div>
		    
		   		<div class="form-group col-md-3">
		   			<?php echo form_submit(['class'=>'btn btn-primary','value'=>'SUBMIT','name'=>'login']); ?>
		   		</div>
		</div>
	<?php echo form_close(); ?>
	

<?php
	include_once('public_footer.php');
?>
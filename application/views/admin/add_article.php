<?php include_once('admin_header.php'); ?>

	<div class="container">
		<?php  echo form_open('admin/store_article') ?>
	  	<?php echo form_hidden('user_id',$this->session->userdata('user_id')); ?>
		  		<legend>Add Article</legend><br>
		  		

			    <div class="form-group col-md-8">
			      <label>Article Title:</label>
			      <?php echo form_input(['class'=>'form-control','name'=>'title','placeholder'=>'Article Title','value'=>set_value('title')]);?>
			    </div>
			    
			    <div class="col-md-5">
			    	<?php echo form_error('title'); ?>
			    </div>
		    
			    <div class="form-group col-md-8">
			      <label>Article Body:</label>
			      <?php echo form_textarea(['name'=>'body','class'=>'form-control','placeholder'=>'Article Body','value'=>set_value('body')]);?>
			    </div>

			    <div class="col-md-5">
			    	<?php echo form_error('body'); ?>
			    </div>
		    
		   		<div class="form-group col-md-3">
		   			<?php echo form_submit(['class'=>'btn btn-primary','value'=>'SUBMIT','name'=>'login']); ?>
		   		</div>
	<?php echo form_close(); ?>	
	</div>

<?php include_once('admin_footer.php'); ?>
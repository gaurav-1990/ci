<?php
	include_once('admin_header.php');
?>
<br>
<div class="container">
	<div class="col-lg-6 col-lg-offset-6">
			<?= anchor('admin/add_article','ADD ARTICLE',['class'=>'btn btn-info pull-right'])?>
			<!-- <a href="<?= base_url('admin/add_article')?>" class="btn btn-info pull-right">ADD ARTICLE</a> -->
		</div><br>

		<?php if($feedback = $this->session->flashdata('feedback')) { 
				$feedback_class = $this->session->flashdata('feedback_class');
		?>
		  		<div class="row">
			  		<div class="alert alert-dismissible <?= $feedback_class ?>">
						  <?= $feedback ?>
					</div>
				</div>
				<?php } ?>

	<table class="table">
		<thead>
			<th>User ID</th>
			<th>Title</th>
			<th>Action</th>
		</thead>
		<tbody>
			
		<?php if(count($articles)):
		?>

		<?php
			foreach($articles as $art):
		?>

			<tr>
				<td>1</td>
				<td><?= $art->title ?></td>
				<td>
					
					<a href='<?=base_url("admin/edit_article/{$art->id}")?>' class="btn btn-primary">EDIT</a>
					<a href="" class="btn btn-danger">DELETE</a>
				</td>
			</tr>

		<?php endforeach; ?>

		<?php else:	?>
			<tr>
				<td colspan="3">NO RECORDS FOUND</td>
			</tr>
		
		<?php endif;?>

		</tbody>
	</table>
</div>

<?php
	include_once('admin_footer.php');
?>
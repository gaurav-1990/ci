<?php
	include_once('admin_header.php');
?>

<div class="container">
	<table class="table">
		<thead>
			<th>Sr. No.</th>
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
					<button class="btn btn-primary">EDIT</button>
					<button class="btn btn-danger">DELETE</button>
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
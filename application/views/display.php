<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>EMAIL</th>
			<th>PASSWORD</th>
			<th>MOBILE</th>
			<th>CITY</th>
			<th>UPDATE</th>
			<th>DELETE</th>
		</tr>
		<?php
			foreach($res as $key)
			{

		?>
		
		<tr>
			<td><?php echo $key->id; ?></td>
			<td><?php echo $key->name; ?></td>
			<td><?php echo $key->email; ?></td>
			<td><?php echo $key->password; ?></td>
			<td><?php echo $key->mobile; ?></td>
			<td><?php echo $key->city; ?></td>
			<td><a href="<?=base_url("Users/updatedata/{$key->id}")?>">UPDATE</a></td>
			<td><a href="<?=base_url("Users/deletedata/{$key->id}")?>?>">DELETE</a></td>
		</tr>

		<?php } ?>
	</table>
</body>
</html>
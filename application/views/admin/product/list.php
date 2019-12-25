<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center><h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1></center>
	<center><?php echo anchor('admin/products/add','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Price</th>
			<th>Description</th>
			<th>Action</th>
		</tr>
		<?php
		$no = 1;
		foreach($products as $u){
		?>
		<tr>
			<td><?php echo $u->product_id ?></td>
			<td><?php echo $u->name ?></td>
			<td><?php echo $u->price ?></td>
			<td><?php echo $u->description ?></td>
			<td>
			      <?php echo anchor('admin/products/edit/'.$u->product_id,'Edit'); ?>
                              <?php echo anchor('admin/products/delete/'.$u->product_id,'Delete'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>

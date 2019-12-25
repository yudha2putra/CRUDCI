<!DOCTYPE html>
<html>
<head>
	<title>CRUD dengan CodeIgniter</title>
</head>
<body>
	<center>
		<h1>CRUD dengan CodeIgniter</h1>
		<h3>Edit Data</h3>
	</center>
	<form action="<?php echo base_url(). 'admin/products/update'; ?>" method="post" enctype="multipart/form-data">
		<table style="margin:20px auto;">
			<tr>
				<td>Name</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $product->product_id?>">
					<input type="text" name="name" value="<?php echo $product->name ?>">
				</td>
			</tr>
			<tr>
				<td>Price</td>
				<td><input type="text" name="price" value="<?php echo $product->price ?>"></td>
			</tr>
			<tr>
				<td>Description</td>
				<td><input type="text" name="description" value="<?php echo $product->description ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>

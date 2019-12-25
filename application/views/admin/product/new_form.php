<!DOCTYPE html>
<html>
<head>
	<title>CRUD dengan CodeIgniter</title>
</head>
<body>
	<center>
		<h1>CRUD dengan CodeIgniter</h1>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url(). 'admin/products/add'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Price</td>
				<td><input type="text" name="price"></td>
			</tr>
			<tr>
				<td>Description</td>
				<td><input type="text" name="description"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"><input type="button" onclick="window.location.href = 'http://localhost/CRUDCI/index.php/admin/products/';" value="Back"/></td>
			</tr>
		</table>
	</form>
</body>
</html>

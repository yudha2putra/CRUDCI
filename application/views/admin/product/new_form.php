<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
	<title>CRUD Pada CodeIgniter</title>
</head>
<body>
	<div class="container">
		<div class="card mt-5">
			<div class="card-header text-center">
				CRUD CodeIgniter Data Produk Yudha Dwiputra - <a href="https://github.com/yudha2putra/CRUDCI" target="_blank">Github Project</a>
			</div>
			<div class="card-body">
				<a href="<?php echo base_url().'admin/products';?>" class="btn btn-primary"> Kembali</a>
				<br/>
				<br/>
				<form action="<?php echo base_url().'admin/products/add';?>" method="post">
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" class="form-control" placeholder="Product name. .">
					</div>
					<div class="form-group">
						<label>Price</label>
						<input type="number" name="price" class="form-control" placeholder="Product price. ..">
					</div>
					<div class="form-group">
						<label>Description</label>
						<input type="text" name="description" class="form-control" placeholder="Description. .">
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-success" value="Simpan">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>

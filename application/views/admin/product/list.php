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
				<a href="<?php echo base_url().'admin/products/add'?>" class="btn btn-primary">Input Produk Baru</a>
				<br/>
				<br/>
				<table class="table table-bordered table-hover table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Price</th>
							<th>Description</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($products as $u){?>
						<tr>
							<td><?php echo $u->product_id ?></td>
							<td><?php echo $u->name ?></td>
							<td><?php echo $u->price ?></td>
							<td><?php echo $u->description ?></td>
							<td>
								<a href="<?php echo base_url().'admin/products/edit/'.$u->product_id ?>" class="btn btn-warning">Edit</a>
								<a href="<?php echo base_url().'admin/products/delete/'.$u->product_id ?>" class="btn btn-danger">Hapus</a>
							</td>
						</tr>
						<?php } ?>
					</tbody>
			</div>
		</div>
	</div>
</body>
</html>

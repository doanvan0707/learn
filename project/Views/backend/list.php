<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Danh sách sản phẩm</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<h2>Danh sách sản phẩm</h2>
			<table class="table table-dark table-striped">
				<tr>
					<th>STT</th>
					<th>Name</th>
					<th>Description</th>
					<th>Price</th>
					<th>Category</th>
					<th>Action</th>
				</tr>
				<?php foreach ($products as $key => $product): ?>
					<tr>
						<td><?php echo ++$key ?></td>
						<td><a href="Controllers/ProductController.php?action=detail&id=<?php echo $product['id'] ?>"><?php echo $product['name'] ?></a></td>
						<td><?php echo $product['description'] ?></td>
						<td><?php echo '$' . $product['price'] ?></td>
						<td><?php echo $product['category_name'] ?></td>
						 <td>
							<a href="Controllers/ProductController.php?action=edit&id=<?php echo $product['id'] ?>" class="btn btn-warning">Edit</a>
							<a href="Controllers/ProductController.php?action=delete&id=<?php echo $product['id'] ?>" class="btn btn-danger">Delete</a>
						</td>
					</tr>
				<?php endforeach ?>
			</table>
			<a href="Controllers/ProductController.php?action=create" class="btn btn-primary">Add product</a>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>
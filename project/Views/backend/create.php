<?php  
require_once '../../Models/Product.php';
$categories = new Product();
$categories = $categories->listCategories();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Thêm mới sản phẩm</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<h2>Thêm sản phẩm</h2>
			<form action="../../Controllers/ProductController.php?action=insert" method="post">
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="form-control">
				</div>
				<div class="form-group">
					<label>Description</label>
					<input type="text" name="description" class="form-control">
				</div>
				<div class="form-group">
					<label>Price</label>
					<input type="text" name="price" class="form-control">
				</div>
				<div class="form-group">
					<label>Category</label>
					<select class="form-control" name="category_id">
						<?php foreach ($categories as $key => $category): ?>
							<option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
						<?php endforeach ?>
					</select>
				</div>
				<div class="form-group">
					<input type="submit" value="Update" class="btn btn-primary">
				</div>
			</form>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>
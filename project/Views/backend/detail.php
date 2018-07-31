<?php  
require_once '../../Models/Product.php';
$id = filter_input(INPUT_GET, 'id');
$product = new Product();
$product = $product->detail($id);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Chi tiết sản phẩm</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<h2>Chi tiết sản phẩm</h2>
			<ol>
				<li><?php echo 'Tên sản phẩm: ' . $product['name'] ?></li>
				<li><?php echo 'Mô tả: ' . $product['description'] ?></li>
				<li><?php echo 'Thể loại: ' . $product['category_name'] ?></li>
				<li><?php echo 'Giá cả: $' . $product['price'] ?></li>
			</ol>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>
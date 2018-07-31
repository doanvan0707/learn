<?php
require '../Models/Product.php';
$action = filter_input(INPUT_GET, 'action');
switch ($action) {
		case 'create': {
				header('Location: ../Views/backend/create.php');
				break;
		}
		case 'insert': {
				$name = filter_input(INPUT_POST, 'name');
				$description = filter_input(INPUT_POST, 'description');
				$price = filter_input(INPUT_POST, 'price');
				$category_id = filter_input(INPUT_POST, 'category_id');	
				$product = new Product();
				$product->insert($name, $description, $price, $category_id);
				header('Location: ../admin.php');
				break;
		}
		case 'showProductByCate': {
				$id = filter_input(INPUT_GET, 'id');
				$showProduct = new Product();
				$showProduct = $showProduct->showProductByCate($id);
				include('../Views/frontend/indexByCategory.php');
				break;
		}
		case 'edit': {
				$id = filter_input(INPUT_GET, 'id');
				header('Location: ../Views/backend/edit.php?id=' . $id);
				break;
		}
		case 'update': {
				$id = filter_input(INPUT_GET, 'id');
				$name = filter_input(INPUT_POST, 'name');
				$description = filter_input(INPUT_POST, 'description');
				$price = filter_input(INPUT_POST, 'price');
				$category_id = filter_input(INPUT_POST, 'category_id');	
				$product = new Product();
				$product->update($name, $description, $price, $category_id, $id);
				header('Location: ../admin.php');
				break;
		}
		case 'detail': {
				$id = filter_input(INPUT_GET, 'id');
				header('Location: ../Views/backend/detail.php?id=' . $id);
				break;
		}
		case 'delete': {
				$id = filter_input(INPUT_GET, 'id');
				$product = new Product();
				$product->delete($id);
				header('Location: ../admin.php');
				break;
		}
		default: 
			header('Location: ../admin.php');
			break;
}


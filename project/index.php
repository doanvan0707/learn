<?php
// Giao diện frontend
require_once 'Models/Product.php';
$listCategories = new Product();
$listCategories = $listCategories->listCategories();
$products = new Product();
$products = $products->index();
include_once('Views/frontend/index.php');

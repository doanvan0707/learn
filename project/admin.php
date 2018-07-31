<?php
// Giao diện backend
require_once 'Models/Product.php';
$products = new Product();
$products = $products->index();
include_once('Views/backend/list.php');

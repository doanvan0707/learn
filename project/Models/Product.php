<?php
require('ConnectDB.php');

Class Product 
{
    public $name;
    public $description;
    public $price;
    public $category;

    public $db;

    function __construct()
    {
        $this->db = ConnectDB::connect();
    }


    public function index()
    {
    		try {
            $query = "SELECT p.id, p.name, p.description, p.price, c.name as category_name
						FROM products as p INNER JOIN categories as c ON p.category_id = c.id";
            $statement = $this->db->prepare($query);
            $statement->execute();
            $products = $statement->fetchAll();
            $statement->closeCursor();
            return $products ? $products : [];
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function listCategories()
    {
    		try {
            $query = "SELECT * FROM categories";
            $statement = $this->db->prepare($query);
            $statement->execute();
            $products = $statement->fetchAll();
            $statement->closeCursor();
            return $products ? $products : [];
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function show($id)
    {
            try {
            $query = "SELECT *
                        FROM products WHERE id=:id";
            $statement = $this->db->prepare($query);
            $statement->bindValue(':id', $id);
            $statement->execute();
            $products = $statement->fetch();
            $statement->closeCursor();
            return $products ? $products : [];
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // Update dữ liệu đã chỉnh sửa
    public function update($name, $description, $price, $category_id, $id)
    {
        try {
            $query = "UPDATE products SET name = :name, description = :description, price = :price, category_id = :category_id WHERE id = :id";
            $statement = $this->db->prepare($query);
            $statement->bindValue(':id', $id);
            $statement->bindValue(':name', $name);
            $statement->bindValue(':description', $description);
            $statement->bindValue(':price', $price);
            $statement->bindValue(':category_id', $category_id);
            $statement->execute();
            $statement->closeCursor();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    // Show detail (chi tiết của sản phẩm)

    public function detail($id)
    {
            try {
            $query = "SELECT p.id, p.name, p.description, p.price, c.name as category_name
                        FROM products as p INNER JOIN categories as c ON p.category_id = c.id WHERE p.id=:id";
            $statement = $this->db->prepare($query);
            $statement->bindValue(':id', $id);
            $statement->execute();
            $products = $statement->fetch();
            $statement->closeCursor();
            return $products ? $products : [];
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function showProductByCate($id)
    {
        try {
            // $query = "SELECT p.id, p.name, p.description, p.price, c.name as category_name
            //             FROM products as p LEFT JOIN categories as c ON p.category_id = c.id WHERE c.id=:id";
            $query = "SELECT p.id, p.name, p.description, p.price, c.name as category_name
                        FROM categories as c LEFT JOIN products as p ON p.category_id = c.id WHERE p.category_id=:id";       
            $statement = $this->db->prepare($query);
            $statement->bindValue(':id', $id);
            $statement->execute();
            $products = $statement->fetchAll();
            $statement->closeCursor();
            return $products ? $products : [];
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // Chèn dữ liệu
    public function insert($name, $description, $price, $category_id)
    {
        try {
            $query = "insert into products
              (name, description, price, category_id) values
              (:name, :description, :price, :category_id)";
            $statement = $this->db->prepare($query);
            $statement->bindValue(':name', $name);
            $statement->bindValue(':description', $description);
            $statement->bindValue(':price', $price);
            $statement->bindValue(':category_id', $category_id);
            $statement->execute();
            $statement->closeCursor();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // Xóa dữ liệu
    public function delete($id)
    {
        try {
            $query = "delete from products where id = :id";
            $statement = $this->db->prepare($query);
            $statement->bindValue(':id', $id);
            $statement->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}

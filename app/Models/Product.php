<?php
namespace App\Models;

class Product extends BaseModel {

    public function getAllProducts() {
        $sql = "SELECT * FROM products";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function delete($id) {
        $sql = "DELETE FROM products WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
    }

    public function find($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function create($data) {
        $sql = "INSERT INTO products (name, price)
                VALUES (:name, :price)";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'name' => $data['name'],
            'price' => $data['price'],
        ]);
    }

    public function update($id, $data) {
    $sql = "UPDATE products 
            SET name = :name,
                price = :price
            WHERE id = :id";

        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            'name' => $data['name'],
            'price' => $data['price'],
            'id' => $id
        ]);
    }
}

<?php
namespace App\Controllers;

use App\Models\Product;

class ProductController {

    public function index() {
        // Lấy dữ liệu từ Model
        $productModel = new Product();
        $products = $productModel->getAllProducts();

        // Truyền dữ liệu sang View
        include 'views/product_list.php';
    }

    public function delete() {
        $id = $_GET['id'] ?? null;

        if ($id) {
            $productModel = new Product();
            $productModel->delete($id);
        }

        header("Location: index.php?page=product-list");
        exit;
    }

    public function detail() {
        $id = $_GET['id'] ?? null;

        if (!$id) {
            echo "Không tìm thấy sản phẩm";
            return;
        }

        $productModel = new Product();
        $product = $productModel->find($id);

        include 'views/product-detail.php';
    }

    public function create() {
        // Hiển thị form
        $error = null;
        include 'views/product-add.php';
    }

    public function store() {
        // Lấy dữ liệu từ POST
        $name = $_POST['name'] ?? '';
        $price = $_POST['price'] ?? '';

        // Validate đơn giản
        if ($name === '' || $price === '') {
            $error = "Vui lòng nhập đầy đủ Tên và Giá";
            include 'views/product-add.php';
            return;
        }

        // Gọi Model để lưu
        $productModel = new Product();
        $productModel->create([
            'name' => $name,
            'price' => $price,
        ]);

        // Quay về danh sách
        header("Location: index.php?page=product-list");
        exit;
    }

    public function edit($id) {
        $productModel = new Product();
        $product = $productModel->find($id);
        include 'views/product-edit.php';
    }

    public function update($id) {
        if (empty($_POST['name']) || empty($_POST['price'])) {
            echo "Không được để trống dữ liệu";
            return;
        }

        $productModel = new Product();
        $productModel->update($id, $_POST);

        header("Location: index.php?page=product-list");
        exit;
    }

}

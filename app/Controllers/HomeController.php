<?php
namespace App\Controllers;

use App\Models\Student;

class HomeController {
    public function index() {
        // 1. Chuẩn bị dữ liệu
        $message = "Chào mừng đến với MVC!";
        $studentInfo = (new Student())->getInfo();

        // 2. Gọi View
        include 'views/home.php';
    }
}

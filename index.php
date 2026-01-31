<?php
// Load Composer autoload
require 'vendor/autoload.php';

use Dotenv\Dotenv;
use App\Controllers\HomeController;
use App\Controllers\ProductController;

$page = $_GET['page'] ?? 'home';
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

switch ($page) {
    case 'home':
        (new HomeController())->index();
        break;

    case 'product-list':
        (new ProductController())->index();
        break;

    case 'product-delete':
        (new ProductController())->delete();
        break;

    case 'product-detail':
        (new ProductController())->detail();
        break;

    case 'product-add':
        (new ProductController())->create();
        break;

    case 'product-store':
        (new ProductController())->store();
        break;
    
    case 'product-edit':
        if (isset($_GET['id'])) {
            (new ProductController())->edit($_GET['id']);
        }
        break;

    case 'product-update':
        if (isset($_GET['id'])) {
            (new ProductController())->update($_GET['id']);
        }
        break;


    default:
        echo "404 - Page Not Found";
}
<?php
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/index.php':
        require __DIR__ . '/list.php';
        break;
    case '/':
        require __DIR__ . '/list.php';
        break;
    case '':
        require __DIR__ . '/list.php';
        break;
    case '/add-product':
        require __DIR__ . '/add-product.php';
        break;
    case '/addproduct':
        require __DIR__ . '/add-product.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}
?>

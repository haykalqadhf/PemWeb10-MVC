<?php
require_once 'controllers/TaskController.php';

// Routing sederhana
$controller = new TaskController();
$action = $_GET['action'] ?? 'index';

if (method_exists($controller, $action)) {
    $controller->$action();
} else {
    echo "Halaman tidak ditemukan!";
}